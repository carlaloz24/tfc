<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;

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

        $articulos = $query->paginate(10); // Aumentado a 10 artículos por página

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

        if ($request->filled('start_date') && $request->filled('end_date')) {
            $startDate = Carbon::createFromFormat('Y-m-d', $request->input('start_date'))->startOfDay();
            $endDate = Carbon::createFromFormat('Y-m-d', $request->input('end_date'))->endOfDay();
            $query->whereBetween('fecha_publicacion', [$startDate, $endDate]);
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
        try {
            Log::info('Iniciando creación de artículo', ['request' => $request->all()]);

            $validated = $request->validate([
                'titulo' => 'required|string|max:255',
                'contenido' => 'required|string',
                'fecha_publicacion' => 'nullable|date',
                'imagen' => 'nullable|image|max:2048',
            ]);

            Log::info('Validación correcta', ['validated' => $validated]);

            $slug = Str::slug($request->input('titulo'));
            $originalSlug = $slug;
            $count = 1;
            while (Articulo::where('slug', $slug)->exists()) {
                $slug = $originalSlug . '-' . $count++;
            }

            Log::info('Slug generado', ['slug' => $slug]);

            if (!auth()->check()) {
                Log::error('Usuario no autenticado');
                return redirect()->route('login')->with('error', 'Debes iniciar sesión');
            }

            $userId = auth()->id();
            Log::info('ID de usuario', ['id_usuario' => $userId]);

            $data = $validated;
            $data['slug'] = $slug;
            $data['id_usuario'] = $userId;
            $data['fecha_publicacion'] = $validated['fecha_publicacion'] ?? now()->toDateTimeString();

            if ($request->hasFile('imagen')) {
                Log::info('Subiendo imagen');
                $data['imagen'] = $request->file('imagen')->store('articulos', 'public'); // Cambiado a 'articulos', 'public'
                Log::info('Imagen guardada', ['imagen' => $data['imagen']]);
            }

            Log::info('Creando artículo', ['data' => $data]);
            Articulo::create($data);

            Log::info('Artículo creado con éxito');

            return redirect()->route('admin.dashboard')
                ->with('success', 'Artículo creado con éxito');
        } catch (\Exception $e) {
            Log::error('Error al crear artículo', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);
            return back()->with('error', 'Error al crear el artículo: ' . $e->getMessage());
        }
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
            'id_usuario' => 'required|exists:usuarios,id',
        ]);

        if ($request->hasFile('imagen')) {
            $validated['imagen'] = $request->file('imagen')->store('articulos', 'public'); // Cambiado
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
