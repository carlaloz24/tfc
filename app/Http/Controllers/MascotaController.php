<?php
namespace App\Http\Controllers;
use App\Models\Mascota;
use App\Models\Usuario;
use Illuminate\Http\Request;

class MascotaController extends Controller
{
    public function create()
    {
        $usuarios = Usuario::all();
        return view('mascotas.create', compact('usuarios'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_usuario' => 'required|exists:usuarios,id',
            'nombre' => 'required|string|max:255',
            'raza' => 'nullable|string|max:255',
            'categoria_edad' => 'required|in:cachorro_menor_4,cachorro_mayor_4,adulto,senior',
            'peso' => 'required|numeric|min:0|max:999.99',
            'nivel_actividad' => 'required|in:baja,moderada,alta',
            'esterilizado' => 'required|boolean',
            'tipo_dieta_preferida' => 'required|in:barf,cocida,mixta_50,mixta_70',
        ]);

        $mascota = new Mascota();
        $mascota->id_usuario = $request->id_usuario;
        $mascota->nombre = $request->nombre;
        $mascota->raza = $request->raza;
        $mascota->categoria_edad = $request->categoria_edad;
        $mascota->peso = $request->peso;
        $mascota->nivel_actividad = $request->nivel_actividad;
        $mascota->esterilizado = $request->esterilizado;
        $mascota->tipo_dieta_preferida = $request->tipo_dieta_preferida;
        $mascota->save();

        return redirect()->route('mascotas.index')->with('success', 'Mascota creada.');
    }
}
