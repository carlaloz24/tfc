@extends('layouts.app')
@section('title', 'Panel de Administración - Artículos')
@section('content')
    <div class="container mt-5">
        <h1>Panel de Administración - Artículos</h1>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <a href="{{ route('articles.create') }}" class="btn btn-primary mb-3">Crear Artículo</a>
        <table class="table">
            <thead>
            <tr>
                <th>Título</th>
                <th>Fecha</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($articulos as $articulo)
                <tr>
                    <td>{{ $articulo->titulo }}</td>
                    <td>
                        @if ($articulo->fecha_publicacion)
                            {{ \Carbon\Carbon::parse($articulo->fecha_publicacion)->format('d/m/Y') }}
                        @else
                            Sin fecha
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('articles.edit', $articulo) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('admin.articulos.destroy', $articulo) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Seguro?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
