<?php
namespace App\Http\Controllers;
use App\Models\Articulo;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ArticuloController extends Controller
{
    public function index()
    {
        $articulos = Articulo::all();
        return view('articulos.index', compact('articulos'));
    }

    public function adminIndex()
    {
        $articulos = Articulo::all();
        return view('articulos.index', compact('articulos'));
    }

    public function create()
    {
        return view('articulos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'contenido' => 'required|string',
            'imagen' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $articulo = new Articulo();
        $articulo->id_usuario = auth()->id();
        $articulo->titulo = $request->titulo;
        $articulo->slug = Str::slug($request->titulo);
        $articulo->contenido = $request->contenido;
        $articulo->fecha_publicacion = now();

        if ($request->hasFile('imagen')) {
            $path = $request->file('imagen')->store('articulos', 'public');
            $articulo->imagen = 'articulos/' . basename($path);
        }

        $articulo->save();

        return redirect()->route('admin.articulos.index')->with('success', 'Artículo creado.');
    }

    public function show($id)
    {
        $articulo = Articulo::findOrFail($id);
        return view('articulos.show', compact('articulo'));
    }

    public function edit($id)
    {
        $articulo = Articulo::findOrFail($id);
        return view('articulos.edit', compact('articulo'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'contenido' => 'required|string',
            'imagen' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $articulo = Articulo::findOrFail($id);
        $articulo->titulo = $request->titulo;
        $articulo->slug = Str::slug($request->titulo);
        $articulo->contenido = $request->contenido;

        if ($request->hasFile('imagen')) {
            $path = $request->file('imagen')->store('articulos', 'public');
            $articulo->imagen = 'articulos/' . basename($path);
        }

        $articulo->save();

        return redirect()->route('admin.articulos.index')->with('success', 'Artículo actualizado.');
    }

    public function destroy($id)
    {
        $articulo = Articulo::findOrFail($id);
        $articulo->delete();
        return redirect()->route('admin.articulos.index')->with('success', 'Artículo eliminado.');
    }
}
