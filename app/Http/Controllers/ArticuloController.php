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
        return view('articulos.public_index', compact('articulos'));
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
            $articulo->imagen = $path;
        }

        $articulo->save();

        return redirect()->route('admin.dashboard')->with('success', 'Artículo creado.');
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
            if ($articulo->imagen) {
                Storage::disk('public')->delete($articulo->imagen);
            }
            $path = $request->file('imagen')->store('articulos', 'public');
            $articulo->imagen = $path;
        }

        $articulo->save();

        return redirect()->route('admin.dashboard')->with('success', 'Artículo actualizado.');
    }

    public function destroy($id)
    {
        $articulo = Articulo::findOrFail($id);
        if ($articulo->imagen) {
            Storage::disk('public')->delete($articulo->imagen);
        }
        $articulo->delete();
        return redirect()->route('admin.dashboard')->with('success', 'Artículo eliminado.');
    }

    public function show($slug)
    {
        $articulo = Articulo::where('slug', $slug)->firstOrFail();
        return view('articulos.show', compact('articulo'));
    }

    public function edit($id)
    {
        $articulo = Articulo::findOrFail($id);
        return view('articulos.edit', compact('articulo'));
    }


}
