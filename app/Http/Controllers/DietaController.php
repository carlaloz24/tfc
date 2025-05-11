<?php

namespace App\Http\Controllers;

use App\Models\Dieta;
use App\Models\Mascota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;

class DietaController extends Controller
{
    public function create()
    {
        $mascotas = Mascota::where('id_usuario', Auth::id())->get();
        return view('dietas.create', compact('mascotas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_mascota' => 'required|exists:mascotas,id',
            'calorias' => 'required|numeric|min:0',
            'tipo_dieta' => 'required|in:barf,cocida,mixta_50,mixta_70',
            'menu_json' => 'required|json',
            'pdf_dieta' => 'nullable|file|mimes:pdf|max:2048',
        ]);

        $dieta = new Dieta();
        $dieta->id_mascota = $request->id_mascota;
        $dieta->id_usuario = Auth::id(); // Mantener id_usuario
        $dieta->calorias = $request->calorias;
        $dieta->tipo_dieta = $request->tipo_dieta;
        $dieta->menu_json = $request->menu_json;
        $dieta->fecha_generacion = now();
        if ($request->hasFile('pdf_dieta')) {
            $dieta->pdf_dieta = file_get_contents($request->file('pdf_dieta')->getRealPath());
        }
        $dieta->save();

        return redirect()->route('profile.index')->with('success', 'Dieta creada.');
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
