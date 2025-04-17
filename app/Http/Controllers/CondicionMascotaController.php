<?php
namespace App\Http\Controllers;
use App\Models\CondicionMascota;
use App\Models\Mascota;
use Illuminate\Http\Request;

class CondicionMascotaController extends Controller
{
    public function create()
    {
        $mascotas = Mascota::all();
        return view('condiciones_mascotas.create', compact('mascotas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_mascota' => 'required|exists:mascotas,id',
            'condicion' => 'required|in:obesidad,renal,artrosis,diabetes,alergia',
            'alimento_alergia' => 'nullable|string|max:255',
        ]);

        $condicion = new CondicionMascota();
        $condicion->id_mascota = $request->id_mascota;
        $condicion->condicion = $request->condicion;
        $condicion->alimento_alergia = $request->alimento_alergia;
        $condicion->save();

        return redirect()->route('condiciones_mascotas.index')->with('success', 'Condición creada.');
    }
}
