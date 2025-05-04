<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MascotaController extends Controller
{
    public function index()
    {
        $mascotas = Mascota::where('id_usuario', Auth::id())->get();
        return view('mascotas.index', compact('mascotas'));
    }

    public function create()
    {
        return view('mascotas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'raza' => 'nullable|string|max:255',
            'categoria_edad' => 'required|in:cachorro_menor_4,cachorro_mayor_4,adulto,senior',
            'peso' => 'required|numeric|min:0',
            'nivel_actividad' => 'required|in:baja,moderada,alta',
            'esterilizado' => 'required|boolean',
            'tipo_dieta_preferida' => 'required|in:barf,cocida,mixta_50,mixta_70',
        ]);

        Mascota::create([
            'id_usuario' => Auth::id(),
            'nombre' => $request->nombre,
            'raza' => $request->raza,
            'categoria_edad' => $request->categoria_edad,
            'peso' => $request->peso,
            'nivel_actividad' => $request->nivel_actividad,
            'esterilizado' => $request->esterilizado,
            'tipo_dieta_preferida' => $request->tipo_dieta_preferida,
        ]);

        return redirect()->route('profile.index')->with('success', 'Mascota añadida correctamente.');
    }

    public function show(Mascota $mascota)
    {
        if ($mascota->id_usuario !== Auth::id()) {
            abort(403);
        }
        return view('mascotas.show', compact('mascota'));
    }

    public function edit(Mascota $mascota)
    {
        if ($mascota->id_usuario !== Auth::id()) {
            abort(403);
        }
        return view('mascotas.edit', compact('mascota'));
    }

    public function update(Request $request, Mascota $mascota)
    {
        if ($mascota->id_usuario !== Auth::id()) {
            abort(403);
        }

        $request->validate([
            'nombre' => 'required|string|max:255',
            'raza' => 'nullable|string|max:255',
            'categoria_edad' => 'required|in:cachorro_menor_4,cachorro_mayor_4,adulto,senior',
            'peso' => 'required|numeric|min:0',
            'nivel_actividad' => 'required|in:baja,moderada,alta',
            'esterilizado' => 'required|boolean',
            'tipo_dieta_preferida' => 'required|in:barf,cocida,mixta_50,mixta_70',
        ]);

        $mascota->update($request->only([
            'nombre', 'raza', 'categoria_edad', 'peso', 'nivel_actividad', 'esterilizado', 'tipo_dieta_preferida'
        ]));

        return redirect()->route('profile.index')->with('success', 'Mascota actualizada correctamente.');
    }

    public function destroy(Mascota $mascota)
    {
        if ($mascota->id_usuario !== Auth::id()) {
            abort(403);
        }
        $mascota->delete();
        return redirect()->route('profile.index')->with('success', 'Mascota eliminada correctamente.');
    }
}
