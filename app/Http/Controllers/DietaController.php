<?php
namespace App\Http\Controllers;

use App\Models\Mascota;
use App\Models\Dieta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class DietaController extends Controller
{
    public function getPdf(Request $request, $mascota_id)
    {
        try {
            $user = Auth::user();
            Log::info('DietaController@getPdf: Iniciando', ['mascota_id' => $mascota_id, 'user_id' => $user ? $user->id : null]);

            if (!$user) {
                Log::warning('DietaController@getPdf: Usuario no autenticado');
                return response()->json(['success' => false, 'message' => 'Usuario no autenticado'], 401);
            }

            $mascota = Mascota::where('id_usuario', $user->id)->where('id', $mascota_id)->with('dietas')->first();
            if (!$mascota) {
                Log::error('DietaController@getPdf: Mascota no encontrada', ['mascota_id' => $mascota_id, 'user_id' => $user->id]);
                return response()->json(['success' => false, 'message' => 'Mascota no encontrada'], 404);
            }

            if ($mascota->dietas->isEmpty()) {
                Log::warning('DietaController@getPdf: No hay dietas para la mascota', ['mascota_id' => $mascota_id]);
                return response()->json(['success' => false, 'message' => 'No hay dietas asociadas'], 404);
            }

            $dieta = $mascota->dietas()->latest()->first();
            if (!$dieta->pdf_dieta || !Storage::exists($dieta->pdf_dieta)) {
                Log::warning('DietaController@getPdf: PDF no encontrado', ['dieta_id' => $dieta->id, 'pdf_dieta' => $dieta->pdf_dieta]);
                return response()->json(['success' => false, 'message' => 'PDF no disponible'], 404);
            }

            $pdfUrl = Storage::temporaryUrl($dieta->pdf_dieta, now()->addMinutes(5));
            Log::info('DietaController@getPdf: URL temporal generada', ['pdf_url' => $pdfUrl]);
            return response()->json(['success' => true, 'pdf_url' => $pdfUrl]);
        } catch (\Exception $e) {
            Log::error('DietaController@getPdf: Error inesperado', ['mascota_id' => $mascota_id, 'error' => $e->getMessage()]);
            return response()->json(['success' => false, 'message' => 'Error al cargar el PDF'], 500);
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'mascota_id' => 'required|exists:mascotas,id',
            'tipo_dieta' => 'required|in:barf,cocida,mixta_50,mixta_70',
            'menu_json' => 'required|json',
            'peso' => 'required|numeric',
            'nombre' => 'required|string',
            'categoria_edad' => 'required|in:cachorro_menor_4,cachorro_mayor_4,adulto,senior',
            'esterilizado' => 'required|boolean',
            'nivel_actividad' => 'required|in:baja,moderada,alta',
            'condiciones_salud' => 'nullable|array',
            'condiciones_salud.*' => 'in:obesidad,renal,artrosis,diabetes,alergia',
            'alimentos_alergia' => 'nullable|array',
            'alimentos_alergia.*' => 'in:pollo_pechuga,pollo_muslo,pavo,ternera,cordero,conejo,sardina,caballa,salmon,higado_pollo,higado_res,rinon_res,corazon_pollo,mollejas,tripa_verde',
        ]);

        $mascota = Mascota::where('id', $request->mascota_id)->where('id_usuario', Auth::id())->firstOrFail();

        // Calcular calorías
        $baseCalorias = $request->peso * 30 + 70;
        $calorias = match ($request->categoria_edad) {
            'cachorro_menor_4' => $baseCalorias * 2,
            'cachorro_mayor_4' => $baseCalorias * 1.5,
            'adulto' => $baseCalorias * ($request->esterilizado ? 0.8 : 1),
            'senior' => $baseCalorias * 0.7,
        };
        $calorias *= match ($request->nivel_actividad) {
            'baja' => 0.8,
            'moderada' => 1,
            'alta' => 1.2,
        };
        if (in_array('obesidad', $request->condiciones_salud ?? [])) {
            $calorias *= 0.7;
        }
        $calorias = round($calorias);

        // Generar PDF
        $menu = json_decode($request->menu_json, true);
        $dietaData = $this->generateDietaData($menu, $calorias, $request->tipo_dieta);
        $ajustesAplicados = $this->getAjustesAplicados($request->condiciones_salud ?? [], $request->esterilizado);

        $pdf = PDF::loadView('calculadora.pdf', [
            'mascota' => $mascota,
            'calorias' => $calorias,
            'tipo_dieta' => $request->tipo_dieta,
            'menu' => $menu,
            'dieta' => $dietaData,
            'condiciones_salud' => $request->condiciones_salud ?? [],
            'alimentos_alergia' => $request->alimentos_alergia ?? [],
            'nombre' => $mascota->nombre,
            'peso' => $mascota->peso,
            'raza' => $mascota->raza,
            'categoria_edad' => $mascota->categoria_edad,
            'esterilizado' => $mascota->esterilizado,
            'nivel_actividad' => $mascota->nivel_actividad,
            'ajustes_aplicados' => $ajustesAplicados,
        ])->setPaper('a4')->setOptions(['defaultFont' => 'Arial', 'dpi' => 150]);

        // Guardar el PDF en storage
        $pdfPath = 'dietas/dieta_' . $mascota->id . '_' . now()->format('YmdHis') . '.pdf';
        Storage::put($pdfPath, $pdf->output());

        // Guardar dieta
        $dieta = new Dieta();
        $dieta->id_mascota = $mascota->id;
        $dieta->id_usuario = Auth::id();
        $dieta->calorias = $calorias;
        $dieta->tipo_dieta = $request->tipo_dieta;
        $dieta->menu_json = $request->menu_json;
        $dieta->pdf_dieta = $pdfPath; // Guardar la ruta en lugar de datos binarios
        $dieta->fecha_generacion = now();
        $dieta->save();

        Log::info('DietaController@store: Dieta guardada', [
            'dieta_id' => $dieta->id,
            'mascota_id' => $mascota->id,
            'pdf_dieta' => $dieta->pdf_dieta,
        ]);

        return redirect()->route('profile.index')->with('success', 'Dieta generada correctamente.');
    }

    private function generateDietaData($menu, $calorias, $tipoDieta)
    {
        $dietaData = [];
        if (in_array($tipoDieta, ['barf', 'cocida'])) {
            $dietaData = [
                'carne' => ['kcal' => $calorias * 0.55, 'gramos' => 0, 'proteinas' => 0, 'grasas' => 0, 'carbohidratos' => 0],
                'visceras' => ['kcal' => $calorias * 0.10, 'gramos' => 0, 'proteinas' => 0, 'grasas' => 0, 'carbohidratos' => 0],
                'huesos' => ['kcal' => $calorias * 0.125, 'gramos' => 0, 'proteinas' => 0, 'grasas' => 0, 'carbohidratos' => 0],
                'verduras' => ['kcal' => $calorias * 0.125, 'gramos' => 0, 'proteinas' => 0, 'grasas' => 0, 'carbohidratos' => 0],
                'grasas' => ['kcal' => $calorias * 0.10, 'gramos' => 0, 'proteinas' => 0, 'grasas' => 0, 'carbohidratos' => 0],
            ];
        } elseif ($tipoDieta === 'mixta_50') {
            $dietaData = [
                'pienso' => ['kcal' => $calorias * 0.5, 'gramos' => 0, 'proteinas' => 0, 'grasas' => 0, 'carbohidratos' => 0],
                'natural' => ['kcal' => $calorias * 0.5, 'gramos' => 0, 'proteinas' => 0, 'grasas' => 0, 'carbohidratos' => 0],
            ];
        } elseif ($tipoDieta === 'mixta_70') {
            $dietaData = [
                'pienso' => ['kcal' => $calorias * 0.7, 'gramos' => 0, 'proteinas' => 0, 'grasas' => 0, 'carbohidratos' => 0],
                'natural' => ['kcal' => $calorias * 0.3, 'gramos' => 0, 'proteinas' => 0, 'grasas' => 0, 'carbohidratos' => 0],
            ];
        }

        foreach ($menu as $dia => $comidas) {
            foreach (['manana', 'tarde'] as $periodo) {
                foreach ($comidas[$periodo] ?? [] as $cat => $item) {
                    if (isset($dietaData[$cat])) {
                        $gramos = (float)preg_replace('/[^0-9.]/', '', $item);
                        $dietaData[$cat]['gramos'] += $gramos / 14; // Promedio diario
                        $dietaData[$cat]['proteinas'] += $gramos * 0.1 / 14;
                        $dietaData[$cat]['grasas'] += $gramos * 0.05 / 14;
                        $dietaData[$cat]['carbohidratos'] += $gramos * 0.1 / 14;
                    }
                }
            }
        }

        return $dietaData;
    }

    private function getAjustesAplicados($condicionesSalud, $esterilizado)
    {
        $ajustes = [];
        if ($condicionesSalud && in_array('obesidad', $condicionesSalud)) {
            $ajustes[] = 'Reducción por obesidad';
        }
        if ($esterilizado) {
            $ajustes[] = 'Reducción por esterilización';
        }
        return $ajustes;
    }
}
