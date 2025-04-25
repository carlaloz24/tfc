<?php
namespace App\Http\Controllers;
use App\Models\Mascota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MascotaController extends Controller
{
    public function index()
    {
        $mascotas = Auth::user()->mascotas;
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
            'raza' => 'required|string|max:255',
            'categoria_edad' => 'required|string',
            'peso' => 'required|numeric|min:0',
            'nivel_actividad' => 'required|string',
            'esterilizado' => 'required|boolean',
            'tipo_dieta_preferida' => 'required|string',
        ]);

        Auth::user()->mascotas()->create($request->all());
        return redirect()->route('profile.index')->with('success', 'Mascota añadida.');
    }

    public function show(Mascota $mascota)
    {
        $this->authorize('view', $mascota);
        return view('mascotas.show', compact('mascota'));
    }

    public function edit(Mascota $mascota)
    {
        $this->authorize('update', $mascota);
        return view('mascotas.edit', compact('mascota'));
    }

    public function update(Request $request, Mascota $mascota)
    {
        $this->authorize('update', $mascota);
        $request->validate([
            'nombre' => 'required|string|max:255',
            'raza' => 'required|string|max:255',
            'categoria_edad' => 'required|string',
            'peso' => 'required|numeric|min:0',
            'nivel_actividad' => 'required|string',
            'esterilizado' => 'required|boolean',
            'tipo_dieta_preferida' => 'required|string',
        ]);

        $mascota->update($request->all());
        return redirect()->route('profile.index')->with('success', 'Mascota actualizada.');
    }

    public function destroy(Mascota $mascota)
    {
        $this->authorize('delete', $mascota);
        $mascota->delete();
        return redirect()->route('profile.index')->with('success', 'Mascota eliminada.');
    }
}
