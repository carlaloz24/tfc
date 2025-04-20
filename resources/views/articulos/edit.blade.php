@extends('layouts.app')
@section('title', 'Editar Artículo')
@section('content')
    <div class="container mt-5">
        <h1>Editar Artículo</h1>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <form method="POST" action="{{ route('articles.update', $articulo) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="titulo" class="form-label">Título</label>
                <input type="text" name="titulo" id="titulo" class="form-control" value="{{ old('titulo', $articulo->titulo) }}" required>
                @error('titulo') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
                <label for="contenido" class="form-label">Contenido</label>
                <textarea name="contenido" id="contenido" class="form-control" rows="6" required>{{ old('contenido', $articulo->contenido) }}</textarea>
                @error('contenido') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
                <label for="imagen" class="form-label">Imagen (opcional)</label>
                <input type="file" name="imagen" id="imagen" class="form-control" accept="image/*">
                @if ($articulo->imagen)
                    <img src="{{ Storage::url($articulo->imagen) }}" alt="Imagen actual" class="img-thumbnail mt-2" style="max-width: 200px;">
                @endif
                @error('imagen') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <button type="submit" class="btn btn-primary">Actualizar Artículo</button>
            <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
