<?php
namespace App\Http\Controllers;
use App\Models\Dieta;
use App\Models\Mascota;
use Illuminate\Http\Request;

class DietaController extends Controller
{
    public function create()
    {
        $mascotas = Mascota::all();
        return view('dietas.create', compact('mascotas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_mascota' => 'required|exists:mascotas,id',
            'calorias' => 'required|numeric|min:0',
            'tipo_dieta' => 'required|in:barf,cocida,mixta_50,mixta_70',
            'menu_json' => 'required|json',
        ]);

        $dieta = new Dieta();
        $dieta->id_mascota = $request->id_mascota;
        $dieta->calorias = $request->calorias;
        $dieta->tipo_dieta = $request->tipo_dieta;
        $dieta->menu_json = $request->menu_json;
        $dieta->save();

        return redirect()->route('dietas.index')->with('success', 'Dieta creada.');
    }
}
