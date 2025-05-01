<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ArticuloController extends Controller
{
    public function index(Request $request)
    {
        $query = Articulo::query();

        $orderBy = $request->query('order_by', 'recent');
        if ($orderBy === 'recent') {
            $query->orderBy('fecha_publicacion', 'desc');
        } elseif ($orderBy === 'oldest') {
            $query->orderBy('fecha_publicacion', 'asc');
        }

        $articulos = $query->paginate(2);

        return view('articulos.public_index', compact('articulos'));
    }

    public function adminIndex(Request $request)
    {
        $query = Articulo::query();

        $orderBy = $request->query('order_by', 'recent');
        if ($orderBy === 'recent') {
            $query->orderBy('fecha_publicacion', 'desc');
        } elseif ($orderBy === 'oldest') {
            $query->orderBy('fecha_publicacion', 'asc');
        }

        if ($request->filled('date_range')) {
            $dates = explode(' - ', $request->input('date_range'));
            if (count($dates) === 2) {
                $startDate = Carbon::createFromFormat('d/m/Y', trim($dates[0]))->startOfDay();
                $endDate = Carbon::createFromFormat('d/m/Y', trim($dates[1]))->endOfDay();
                $query->whereBetween('fecha_publicacion', [$startDate, $endDate]);
            }
        }

        $articulos = $query->paginate(10);

        return view('articulos.index', compact('articulos'));
    }

    public function create()
    {
        return view('articulos.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'contenido' => 'required|string',
            'fecha_publicacion' => 'nullable|date',
            'imagen' => 'nullable|image|max:2048',
            'slug' => 'required|string|unique:articulos,slug',
            'id_usuario' => 'required|exists:users,id',
        ]);

        if ($request->hasFile('imagen')) {
            $validated['imagen'] = $request->file('imagen')->store('public/articulos');
        }

        Articulo::create($validated);

        return redirect()->route('admin.dashboard')
            ->with('success', 'Artículo creado con éxito');
    }

    public function show($slug)
    {
        $articulo = Articulo::where('slug', $slug)->firstOrFail();
        return view('articulos.show', compact('articulo'));
    }

    public function edit($slug)
    {
        $articulo = Articulo::where('slug', $slug)->firstOrFail();
        return view('articulos.edit', compact('articulo'));
    }

    public function update(Request $request, $slug)
    {
        $articulo = Articulo::where('slug', $slug)->firstOrFail();

        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'contenido' => 'required|string',
            'fecha_publicacion' => 'nullable|date',
            'imagen' => 'nullable|image|max:2048',
            'slug' => 'required|string|unique:articulos,slug,' . $articulo->id,
            'id_usuario' => 'required|exists:users,id',
        ]);

        if ($request->hasFile('imagen')) {
            $validated['imagen'] = $request->file('imagen')->store('public/articulos');
        }

        $articulo->update($validated);

        return redirect()->route('admin.dashboard')
            ->with('success', 'Artículo actualizado con éxito');
    }

    public function destroy($slug)
    {
        $articulo = Articulo::where('slug', $slug)->firstOrFail();
        $articulo->delete();

        return redirect()->route('admin.dashboard')
            ->with('success', 'Artículo eliminado con éxito');
    }
}
