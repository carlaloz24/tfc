<?php
namespace App\Http\Controllers;
use App\Models\Comentario;
use App\Models\Articulo;
use App\Models\Usuario;
use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    public function create()
    {
        $articulos = Articulo::all();
        $usuarios = Usuario::all();
        return view('comentarios.create', compact('articulos', 'usuarios'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_articulo' => 'required|exists:articulos,id',
            'id_usuario' => 'nullable|exists:usuarios,id',
            'contenido' => 'required|string',
        ]);

        $comentario = new Comentario();
        $comentario->id_articulo = $request->id_articulo;
        $comentario->id_usuario = $request->id_usuario;
        $comentario->contenido = $request->contenido;
        $comentario->save();

        return redirect()->route('comentarios.index')->with('success', 'Comentario creado.');
    }
}
