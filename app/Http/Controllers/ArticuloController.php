<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use Illuminate\Http\Request;

class ArticuloController extends Controller
{
    public function index()
    {
        $articulos = Articulo::all();
        return view('layouts.articulos.index', compact('articulos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'contenido' => 'required',
            'imagen' => 'image|max:2048', // Máx 2MB
        ]);

        $articulo = new Articulo();
        $articulo->id_usuario = auth()->id(); // ID del admin logueado
        $articulo->titulo = $request->titulo;
        $articulo->slug = \Str::slug($request->titulo);
        $articulo->contenido = $request->contenido;
        $articulo->fecha_publicacion = now();

        if ($request->hasFile('imagen')) {
            $path = $request->file('imagen')->store('articulos', 'public');
            $articulo->imagen = $path;
        }

        $articulo->save();

        return redirect('/blog')->with('success', 'Artículo creado');
    }

    public function create()
    {
        return view('layouts.articulos.create');
    }
}
