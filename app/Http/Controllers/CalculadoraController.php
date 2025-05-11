<?php
namespace App\Http\Controllers;
use App\Models\Dieta;
use App\Models\Mascota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use PDF;

class CalculadoraController extends Controller
{
    public function index()
    {
        $mascotas = Mascota::where('id_usuario', Auth::id())->get();
        return view('calculadora.index', compact('mascotas'));
    }

    public function show()
    {
        return view('calculadora.create', ['mascota' => null]);
    }

    public function create($mascota_id)
    {
        $mascota = Mascota::where('id', $mascota_id)->where('id_usuario', Auth::id())->firstOrFail();
        return view('calculadora.create', compact('mascota'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'mascota_id' => 'nullable|exists:mascotas,id',
            'tipo_dieta' => 'required|in:barf,cocida,mixta_50,mixta_70',
            'menu_json' => 'required|json',
            'peso' => 'required|numeric|min:0',
            'nombre' => 'required|string',
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
            $mascota = Mascota::where('id', $request->mascota_id)->where('id_usuario', Auth::id())->firstOrFail();
        }

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

        $pdf = PDF::loadView('calculadora.pdf', [
            'mascota' => $mascota,
            'calorias' => $calorias,
            'tipo_dieta' => $request->tipo_dieta,
            'menu' => json_decode($request->menu_json, true),
            'condiciones_salud' => $request->condiciones_salud ?? [],
            'alimentos_alergia' => $request->alimentos_alergia ?? [],
        ]);

        $pdfData = $pdf->output();
        $filename = 'Dieta_' . ($mascota ? $mascota->nombre : $request->nombre) . '_' . now()->format('Y-m-d') . '.pdf';

        if ($mascota) {
            $dieta = new Dieta();
            $dieta->id_mascota = $mascota->id;
            $dieta->id_usuario = Auth::id();
            $dieta->calorias = $calorias;
            $dieta->tipo_dieta = $request->tipo_dieta;
            $dieta->menu_json = $request->menu_json;
            $dieta->pdf_dieta = $pdfData;
            $dieta->fecha_generacion = now();
            $dieta->save();

            return redirect()->route('profile.index')->with('success', 'Dieta generada correctamente.');
        }

        // Si no hay mascota, devuelve el PDF directamente
        return Response::make($pdfData, 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
        ]);
    }

    public function download($id)
    {
        $dieta = Dieta::where('id', $id)
            ->whereHas('mascota', function ($query) {
                $query->where('id_usuario', Auth::id());
            })
            ->firstOrFail();

        if (!$dieta->pdf_dieta) {
            return redirect()->back()->with('error', 'No hay PDF disponible.');
        }

        $pdfData = $dieta->pdf_dieta;
        $filename = 'Dieta_' . $dieta->mascota->nombre . '_' . $dieta->created_at->format('Y-m-d') . '.pdf';

        return Response::make($pdfData, 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
        ]);
    }
}
