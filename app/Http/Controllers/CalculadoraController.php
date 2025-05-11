<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use App\Models\Dieta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;

class CalculadoraController extends Controller
{
    public function create($mascota_id)
    {
        $mascota = Mascota::where('id', $mascota_id)->where('id_usuario', Auth::id())->firstOrFail();
        return view('calculadora.index', compact('mascota'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'mascota_id' => 'required|exists:mascotas,id',
            'tipo_dieta' => 'required|in:barf,cocida,mixta_50,mixta_70',
            'menu_json' => 'required|json',
            'peso' => 'required|numeric|min:0',
        ]);

        $mascota = Mascota::where('id', $request->mascota_id)->where('id_usuario', Auth::id())->firstOrFail();

        // Calcular calorías en el backend
        $calorias = round($request->peso * 30 + 70); // Fórmula simple

        $pdf = PDF::loadView('calculadora.pdf', [
            'mascota' => $mascota,
            'calorias' => $calorias,
            'tipo_dieta' => $request->tipo_dieta,
            'menu' => json_decode($request->menu_json, true),
        ]);

        $pdfData = $pdf->output();

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
}
