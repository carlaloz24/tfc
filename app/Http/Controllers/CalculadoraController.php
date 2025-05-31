<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\Dieta;
use App\Models\Mascota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Support\Facades\Log;

class CalculadoraController extends Controller
{

    public function index() {
        $mascotas = Mascota::where('id_usuario', Auth::id())->get();
        return view('calculadora.index', compact('mascotas'));
    }

    public function show() {
        return view('calculadora.index', ['mascota' => null]);
    }

    public function create($mascota_id) {
        $mascota = Mascota::where('id', $mascota_id)->where('id_usuario', Auth::id())->firstOrFail();
        return view('calculadora.create', compact('mascota'));
    }


    public function store(Request $request)
    {
        Log::info('Datos recibidos en CalculadoraController@store:', $request->all());

        $request->validate([
            'mascota_id' => 'nullable|exists:mascotas,id',
            'tipo_dieta' => 'required|in:barf,cocida,mixta_50,mixta_70',
            'menu_json' => 'required|json',
            'peso' => 'required|numeric|min:0.1',
            'nombre' => 'required|string|max:255',
            'raza' => 'required|string|max:255',
            'categoria_edad' => 'required|in:cachorro_menor_4,cachorro_mayor_4,adulto,senior',
            'esterilizado' => 'required|boolean',
            'nivel_actividad' => 'required|in:baja,moderada,alta',
            'condiciones_salud' => 'nullable|array',
            'condiciones_salud.*' => 'in:obesidad,renal,artrosis,diabetes,alergia',
            'alimentos_alergia' => 'nullable|array',
            'alimentos_alergia.*' => 'in:pollo_pechuga,pollo_muslo,pavo,ternera,cordero,conejo,sardina,caballa,salmon,higado_pollo,higado_res,rinon_res,corazon_pollo,mollejas,tripa_verde',
        ]);

        try {
            $mascota = null;
            $isUpdate = false;

            if ($request->mascota_id) {
                $mascota = Mascota::where('id', $request->mascota_id)
                    ->where('id_usuario', Auth::id())
                    ->firstOrFail();

                // Actualizar datos de la mascota
                $mascota->peso = $request->peso;
                $mascota->raza = $request->raza;
                $mascota->categoria_edad = $request->categoria_edad;
                $mascota->esterilizado = $request->esterilizado;
                $mascota->nivel_actividad = $request->nivel_actividad;
                $mascota->tipo_dieta_preferida = $request->tipo_dieta;
                $mascota->condiciones_salud = $request->condiciones_salud ?? [];
                $mascota->alimentos_alergia = $request->alimentos_alergia ?? [];
                $mascota->save();
                Log::info('Mascota actualizada:', $mascota->toArray());

                // Verificar si es actualización
                $isUpdate = $mascota->dietas()->exists();
            }

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

//            // Generar PDF solo si no es actualización
//            $pdf = PDF::loadView('calculadora.pdf', [
//                'mascota' => $mascota,
//                'calorias' => $calorias,
//                'tipo_dieta' => $request->tipo_dieta,
//                'menu' => json_decode($request->menu_json, true),
//                'condiciones_salud' => $request->condiciones_salud ?? [],
//                'alimentos_alergia' => $request->alimentos_alergia ?? [],
//                'nombre' => $request->nombre,
//                'peso' => $request->peso,
//                'raza' => $request->raza,
//                'categoria_edad' => $request->categoria_edad,
//                'esterilizado' => $request->esterilizado,
//                'nivel_actividad' => $request->nivel_actividad,
//            ]);
//            $pdfData = $pdf->output();
//            $filename = 'Dieta_' . ($mascota ? $mascota->nombre : $request->nombre) . '_' . now()->format('Y-m-d') . '.pdf';
//            $pdfPath = 'public/dietas/' . $filename;
//            Storage::put($pdfPath, $pdfData); // esto guarda el PDF siempre

            $menu = json_decode($request->menu_json, true) ?? [];
            Log::info('Generando PDF con menu_json:', ['menu' => $menu, 'raw_menu_json' => $request->menu_json]);
            if (empty($menu)) {
                Log::warning('Menú vacío en store, regenerando menú semanal');
                $menu = $this->generarMenuSemanal($calorias, $request->tipo_dieta, $request->condiciones_salud ?? [], $request->alimentos_alergia ?? []);
                $request->merge(['menu_json' => json_encode($menu)]);
                Log::info('Menú regenerado:', ['menu' => $menu]);
            }
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
                'nombre' => $request->nombre,
                'peso' => $request->peso,
                'raza' => $request->raza,
                'categoria_edad' => $request->categoria_edad,
                'esterilizado' => $request->esterilizado,
                'nivel_actividad' => $request->nivel_actividad,
                'ajustes_aplicados' => $ajustesAplicados,
            ])->setPaper('a4')->setOptions(['defaultFont' => 'Arial', 'dpi' => 150]);
            $pdfData = $pdf->output();
            $filename = 'Dieta_' . ($mascota ? $mascota->nombre : $request->nombre) . '_' . now()->format('Y-m-d') . '.pdf';
            $pdfPath = 'public/dietas/' . $filename;
            Storage::put($pdfPath, $pdfData);

            // Guardar/actualizar la dieta si hay mascota
            if ($mascota) {
                $dieta = Dieta::where('id_mascota', $mascota->id)->first() ?? new Dieta();
                $dieta->pdf_dieta = $pdfPath; // Actualiza siempre la ruta del PDF


                $dieta->id_mascota = $mascota->id;
                $dieta->id_usuario = Auth::id();
                $dieta->calorias = $calorias;
                $dieta->tipo_dieta = $request->tipo_dieta;
                $dieta->menu_json = $request->menu_json;
                $dieta->fecha_generacion = now()->toDateString();
                Log::info('Datos de la dieta antes de guardar:', $dieta->toArray());
                $dieta->save();
                Log::info('Dieta guardada con ID: ' . $dieta->id);

                return response()->json([
                    'success' => true,
                    'dieta_id' => $dieta->id,
                    'message' => $isUpdate ? 'Cambios actualizados correctamente.' : 'Dieta generada correctamente.',
                    'redirect' => $isUpdate ? route('profile.index') : null,
                    'nombre' => $request->nombre,
                    'raza' => $request->raza,
                    'peso' => $request->peso,
                    'tipo_dieta' => $request->tipo_dieta,
                ]);
            }

            // Descargar PDF si no hay mascota
            // Retornar JSON para calculadora/index
            return response()->json([
                'success' => true,
                'message' => 'Dieta generada correctamente.',
                'nombre' => $request->nombre,
                'peso' => $request->peso,
                'raza' => $request->raza,
                'tipo_dieta' => $request->tipo_dieta,
                'calorias' => $calorias,
            ]);


        } catch (\Exception $e) {
            Log::error('Error al generar dieta: ' . $e->getMessage(), ['trace' => $e->getTraceAsString()]);
            return response()->json([
                'success' => false,
                'error' => 'Ocurrió un error al generar la dieta: ' . $e->getMessage(),
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
            $menu = json_decode($dieta->menu_json, true) ?? [];
            Log::info('Descargando PDF con menu_json:', ['menu' => $menu, 'raw_menu_json' => $dieta->menu_json]);

            // Si $menu está vacío, regenera el menú
            if (empty($menu)) {
                Log::warning('Menú vacío, regenerando menú semanal', ['dieta_id' => $dieta->id]);
                $menu = $this->generarMenuSemanal($dieta->calorias, $dieta->tipo_dieta, $mascota->condiciones_salud ?? [], $mascota->alimentos_alergia ?? []);
                $dieta->menu_json = json_encode($menu);
                $dieta->save();
                Log::info('Menú regenerado y guardado:', ['menu' => $menu]);
            }

            $dietaData = $this->generateDietaData($menu, $dieta->calorias, $dieta->tipo_dieta);
            $ajustesAplicados = $this->getAjustesAplicados($mascota->condiciones_salud ?? [], $mascota->esterilizado);

            $pdf = PDF::loadView('calculadora.pdf', [
                'mascota' => $mascota,
                'calorias' => $dieta->calorias,
                'tipo_dieta' => $dieta->tipo_dieta,
                'menu' => $menu,
                'dieta' => $dietaData,
                'condiciones_salud' => $mascota->condiciones_salud ?? [],
                'alimentos_alergia' => $mascota->alimentos_alergia ?? [],
                'nombre' => $mascota->nombre,
                'peso' => $mascota->peso,
                'raza' => $mascota->raza,
                'categoria_edad' => $mascota->categoria_edad,
                'esterilizado' => $mascota->esterilizado,
                'nivel_actividad' => $mascota->nivel_actividad,
                'ajustes_aplicados' => $ajustesAplicados,
            ])->setPaper('a4')->setOptions(['defaultFont' => 'Arial', 'dpi' => 150]);

            $filename = 'Dieta_' . $mascota->nombre . '_' . $dieta->fecha_generacion . '.pdf';
            return $pdf->download($filename);
        } catch (\Exception $e) {
            Log::error('Error al descargar dieta: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Ocurrió un error al descargar la dieta.');
        }
    }

    private function generarMenuSemanal($calorias, $tipoDieta, $condicionesSalud, $alimentosAlergia)
    {
        $dias = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo'];
        $menu = [];
        $opcionesAlimentos = [
            'carne' => array_diff(['pollo_pechuga', 'pollo_muslo', 'pavo', 'ternera', 'cordero', 'conejo', 'sardina', 'caballa', 'salmon'], $alimentosAlergia),
            'visceras' => array_diff(['higado_pollo', 'higado_res', 'rinon_res', 'corazon_pollo', 'mollejas', 'tripa_verde'], $alimentosAlergia),
            'huesos' => ['alitas_pollo', 'cuellos_pavo', 'costillas_cordero', 'carcasa_pollo', 'patas_pollo'],
            'verduras' => ['calabaza', 'zanahoria', 'esparragos', 'pepino', 'espinaca', 'brocoli', 'manzana', 'pera', 'arandanos'],
            'grasas' => ['aceite_oliva', 'aceite_pescado', 'grasa_pato'],
            'pienso' => ['pienso'],
            'natural' => ['natural'],
        ];

        // Definir distribución de calorías por categoría
        $dietaBase = [];
        if (in_array($tipoDieta, ['barf', 'cocida'])) {
            $dietaBase = [
                'carne' => ['kcal' => $calorias * 0.55],
                'visceras' => ['kcal' => $calorias * 0.10],
                'huesos' => ['kcal' => $calorias * 0.125],
                'verduras' => ['kcal' => $calorias * 0.125],
                'grasas' => ['kcal' => $calorias * 0.10],
            ];
        } elseif ($tipoDieta === 'mixta_50') {
            $dietaBase = [
                'pienso' => ['kcal' => $calorias * 0.5],
                'natural' => ['kcal' => $calorias * 0.5],
            ];
        } elseif ($tipoDieta === 'mixta_70') {
            $dietaBase = [
                'pienso' => ['kcal' => $calorias * 0.7],
                'natural' => ['kcal' => $calorias * 0.3],
            ];
        }

        // Simulación de datos nutricionales (basado en calculadora.js 'alimentos')
        $alimentosNutricion = [
            'pollo_pechuga' => ['kcal' => 1.65, 'proteinas' => 0.31, 'grasas' => 0.035, 'carbohidratos' => 0],
            'pollo_muslo' => ['kcal' => 2.09, 'proteinas' => 0.26, 'grasas' => 0.115, 'carbohidratos' => 0],
            'pavo' => ['kcal' => 1.89, 'proteinas' => 0.29, 'grasas' => 0.075, 'carbohidratos' => 0],
            'ternera' => ['kcal' => 2.50, 'proteinas' => 0.26, 'grasas' => 0.15, 'carbohidratos' => 0],
            // Agrega más alimentos según calculadora.js
            'calabaza' => ['kcal' => 0.26, 'proteinas' => 0.01, 'grasas' => 0.001, 'carbohidratos' => 0.065],
            'aceite_oliva' => ['kcal' => 8.84, 'proteinas' => 0, 'grasas' => 1, 'carbohidratos' => 0],
            'pienso' => ['kcal' => 3.5, 'proteinas' => 0.25, 'grasas' => 0.10, 'carbohidratos' => 0.50],
            'natural' => ['kcal' => 1.5, 'proteinas' => 0.15, 'grasas' => 0.05, 'carbohidratos' => 0.20],
        ];

        foreach ($dias as $dia) {
            $menu[$dia] = ['manana' => [], 'tarde' => []];
            foreach ($dietaBase as $categoria => $datos) {
                $listaAlimentos = $opcionesAlimentos[$categoria] ?? [];
                if (empty($listaAlimentos)) {
                    continue;
                }

                $alimentoManana = $listaAlimentos[array_rand($listaAlimentos)];
                $alimentoTarde = $listaAlimentos[array_rand($listaAlimentos)];
                $datosManana = $alimentosNutricion[$alimentoManana] ?? ['kcal' => 1, 'proteinas' => 0.1, 'grasas' => 0.05, 'carbohidratos' => 0.1];
                $datosTarde = $alimentosNutricion[$alimentoTarde] ?? ['kcal' => 1, 'proteinas' => 0.1, 'grasas' => 0.05, 'carbohidratos' => 0.1];

                $gramosTotales = $datos['kcal'] / (($datosManana['kcal'] + $datosTarde['kcal']) / 2);
                $gramosManana = $gramosTotales / 2;
                $gramosTarde = $gramosTotales / 2;

                $etiquetaManana = $tipoDieta === 'cocida' ? str_replace('_', ' ', ucfirst($alimentoManana)) . ' (cocido)' : str_replace('_', ' ', ucfirst($alimentoManana));
                $etiquetaTarde = $tipoDieta === 'cocida' ? str_replace('_', ' ', ucfirst($alimentoTarde)) . ' (cocido)' : str_replace('_', ' ', ucfirst($alimentoTarde));

                $menu[$dia]['manana'][$categoria] = round($gramosManana) . 'g ' . $etiquetaManana;
                $menu[$dia]['tarde'][$categoria] = round($gramosTarde) . 'g ' . $etiquetaTarde;
            }
        }

        return $menu;
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
