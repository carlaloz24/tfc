@extends('layouts.app')
@section('title', 'Editar Artículo')
@section('content')
    <div class="container">
        <h1>Editar Artículo</h1>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <form method="POST" action="{{ route('admin.articulos.update', $articulo) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="titulo" class="form-label">Título</label>
                <input type="text" name="titulo" id="titulo" class="form-control" value="{{ $articulo->titulo }}" required>
            </div>
            <div class="mb-3">
                <label for="contenido" class="form-label">Contenido</label>
                <textarea name="contenido" id="contenido" class="form-control" rows="10" required>{{ $articulo->contenido }}</textarea>
            </div>
            <div class="mb-3">
                <label for="imagen" class="form-label">Imagen</label>
                <input type="file" name="imagen" id="imagen" class="form-control">
                @if ($articulo->imagen)
                    <img src="{{ asset('storage/' . $articulo->imagen) }}" alt="{{ $articulo->titulo }}" width="100">
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
@endsection
