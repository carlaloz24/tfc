<?php
namespace App\Http\Controllers;

use App\Models\Dieta;
use App\Models\Mascota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Support\Facades\Log;

class CalculadoraController extends Controller
{
    public function index()
    {
        $mascotas = Mascota::where('id_usuario', Auth::id())->get();
        return view('calculadora.index', compact('mascotas'));
    }

    public function show()
    {
        return view('calculadora.index', ['mascota' => null]);
    }

    public function create($mascota_id)
    {
        $mascota = Mascota::where('id', $mascota_id)->where('id_usuario', Auth::id())->firstOrFail();
        return view('calculadora.create', compact('mascota'));
    }

    public function store(Request $request)
    {
        Log::info('Inicio de CalculadoraController@store', ['request' => $request->all()]);

        try {
            $validated = $request->validate([
                'mascota_id' => 'nullable|exists:mascotas,id',
                'tipo_dieta' => 'required|in:barf,cocida,mixta_50,mixta_70',
                'menu_json' => 'required|json',
                'peso' => 'required|numeric|min:0.1',
                'nombre' => 'required|string|max:255',
                'categoria_edad' => 'required|in:cachorro_menor_4,cachorro_mayor_4,adulto,senior',
                'esterilizado' => 'required|boolean',
                'nivel_actividad' => 'required|in:baja,moderada,alta',
                'condiciones_salud' => 'nullable|array',
                'condiciones_salud.*' => 'in:obesidad,renal,artrosis,diabetes,alergia',
                'alimentos_alergia' => 'nullable|array',
                'alimentos_alergia.*' => 'in:pollo_pechuga,pollo_muslo,pavo,ternera,cordero,conejo,sardina,caballa,salmon,higado_pollo,higado_res,rinon_res,corazon_pollo,mollejas,tripa_verde',
            ]);

            $mascota = null;
            if ($request->mascota_id) {
                $mascota = Mascota::where('id', $request->mascota_id)
                    ->where('id_usuario', Auth::id())
                    ->firstOrFail();
                $mascota->update([
                    'peso' => $request->peso,
                    'categoria_edad' => $request->categoria_edad,
                    'esterilizado' => $request->esterilizado,
                    'nivel_actividad' => $request->nivel_actividad,
                    'tipo_dieta_preferida' => $request->tipo_dieta,
                    'condiciones_salud' => $request->condiciones_salud ?? [],
                    'alimentos_alergia' => $request->alimentos_alergia ?? [],
                ]);
            }

            $energiaMetabolica = 70 * pow($request->peso, 0.75);
            $factorAjuste = match ($request->categoria_edad) {
                'cachorro_menor_4' => 3,
                'cachorro_mayor_4' => 2,
                'adulto' => ['baja' => 1.2, 'moderada' => 1.6, 'alta' => 2][$request->nivel_actividad],
                'senior' => 1.2,
            };
            $calorias = $energiaMetabolica * $factorAjuste;

            if (in_array('obesidad', $request->condiciones_salud ?? [])) {
                $calorias *= 0.8;
            }
            if ($request->esterilizado) {
                $gramosIdeales = $request->peso * 20;
                $gramosActuales = $calorias / 2;
                $calorias *= $gramosIdeales / $gramosActuales;
            }
            $calorias = round($calorias);

            $menu = json_decode($request->menu_json, true);
            if (empty($menu)) {
                throw new \Exception('Menú semanal vacío.');
            }

            $dieta = null;
            $pdfPath = null;
            if ($request->mascota_id) {
                $dieta = Dieta::create([
                    'id_mascota' => $mascota->id,
                    'id_usuario' => Auth::id(),
                    'calorias' => $calorias,
                    'tipo_dieta' => $request->tipo_dieta,
                    'menu_json' => $request->menu_json,
                    'fecha_generacion' => now()->toDateString(),
                    'nombre' => $request->nombre,
                    'peso' => $request->peso,
                    'categoria_edad' => $request->categoria_edad,
                    'esterilizado' => $request->esterilizado,
                    'nivel_actividad' => $request->nivel_actividad,
                    'condiciones_salud' => json_encode($request->condiciones_salud ?? []),
                    'alimentos_alergia' => json_encode($request->alimentos_alergia ?? []),
                ]);

                $pdf = PDF::loadView('calculadora.pdf', [
                    'mascota' => $mascota,
                    'calorias' => $calorias,
                    'tipo_dieta' => $request->tipo_dieta,
                    'menu' => $menu,
                    'condiciones_salud' => $request->condiciones_salud ?? [],
                    'alimentos_alergia' => $request->alimentos_alergia ?? [],
                ]);

                $pdfPath = 'dietas/dieta_' . $dieta->id . '.pdf';
                \Storage::put('public/' . $pdfPath, $pdf->output());
                $dieta->update(['pdf_dieta' => $pdfPath]);
            } else {
                // Generar PDF temporal para dietas sin mascota
                $dieta = new Dieta([
                    'id_usuario' => Auth::id(),
                    'calorias' => $calorias,
                    'tipo_dieta' => $request->tipo_dieta,
                    'menu_json' => $request->menu_json,
                    'fecha_generacion' => now()->toDateString(),
                    'nombre' => $request->nombre,
                    'peso' => $request->peso,
                    'categoria_edad' => $request->categoria_edad,
                    'esterilizado' => $request->esterilizado,
                    'nivel_actividad' => $request->nivel_actividad,
                    'condiciones_salud' => json_encode($request->condiciones_salud ?? []),
                    'alimentos_alergia' => json_encode($request->alimentos_alergia ?? []),
                ]);

                $pdf = PDF::loadView('calculadora.pdf', [
                    'mascota' => null,
                    'calorias' => $calorias,
                    'tipo_dieta' => $request->tipo_dieta,
                    'menu' => $menu,
                    'condiciones_salud' => $request->condiciones_salud ?? [],
                    'alimentos_alergia' => $request->alimentos_alergia ?? [],
                ]);

                $tempId = uniqid();
                $pdfPath = 'dietas/temp_dieta_' . $tempId . '.pdf';
                \Storage::put('public/' . $pdfPath, $pdf->output());
            }

            $response = [
                'success' => true,
                'message' => 'Dieta generada correctamente.',
                'dieta_id' => $dieta ? ($dieta->id ?? $tempId) : $tempId,
                'pdf_path' => $pdfPath,
            ];

            if ($request->mascota_id) {
                $response['redirect'] = route('profile.index');
            }

            return response()->json($response);
        } catch (\Exception $e) {
            Log::error('Error al generar dieta: ' . $e->getMessage(), ['trace' => $e->getTraceAsString()]);
            return response()->json([
                'success' => false,
                'error' => 'Error al generar la dieta: ' . $e->getMessage(),
            ], 500);
        }
    }

    public function download($id)
    {
        try {
            $dieta = Dieta::where('id', $id)
                ->whereHas('mascota', function ($query) {
                    $query->where('id_usuario', Auth::id());
                })
                ->firstOrFail();

            $mascota = $dieta->mascota;
            $menu = json_decode($dieta->menu_json, true);
            if (empty($menu)) {
                Log::error('menu_json vacío en CalculadoraController@download para dieta ID: ' . $id);
                return redirect()->back()->with('error', 'No se proporcionó un menú semanal.');
            }

            $pdf = PDF::loadView('calculadora.pdf', [
                'mascota' => $mascota,
                'calorias' => $dieta->calorias,
                'tipo_dieta' => $dieta->tipo_dieta,
                'menu' => $menu,
                'condiciones_salud' => $mascota->condiciones_salud ?? [],
                'alimentos_alergia' => $mascota->alimentos_alergia ?? [],
            ]);

            $pdfPath = 'public/dietas/dieta_' . $dieta->id . '.pdf';
            \Storage::put($pdfPath, $pdf->output());
            $dieta->update(['pdf_dieta' => $pdfPath]);
            Log::info('PDF regenerado para dieta:', $dieta->toArray());

            $filename = 'Dieta_' . $mascota->nombre . '_' . $dieta->created_at->format('Y-m-d') . '.pdf';
            return \Storage::download($pdfPath, $filename, [
                'Content-Type' => 'application/pdf',
            ]);
        } catch (\Exception $e) {
            Log::error('Error al descargar dieta: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Ocurrió un error al descargar la dieta.');
        }
    }
}
