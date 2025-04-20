@extends('layouts.app')
@section('title', 'Editar Artículo')
@section('content')
    <div class="main-container">
        <div class="second-background"></div>
        <div class="admin-content">
            <h1>Editar Artículo</h1>
            <p>Modifica los detalles del artículo</p>
            <div class="admin-container">
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST" action="{{ route('articles.update', $articulo) }}" enctype="multipart/form-data" class="admin-form">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="titulo" class="form-label">Título</label>
                        <input type="text" name="titulo" id="titulo" class="form-control" value="{{ old('titulo', $articulo->titulo) }}" placeholder="Ingresa el título" required autofocus>
                        @error('titulo') <span class="error-message">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="contenido" class="form-label">Contenido</label>
                        <textarea name="contenido" id="contenido" class="form-control" style="border-radius: 15px" rows="6" placeholder="Escribe el contenido del artículo" required>{{ old('contenido', $articulo->contenido) }}</textarea>
                        @error('contenido') <span class="error-message">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="imagen" class="form-label">Imagen (opcional)</label>
                        <input type="file" name="imagen" id="imagen" class="form-control file-input" accept="image/*">
                        @if ($articulo->imagen)
                            <img src="{{ Storage::url($articulo->imagen) }}" alt="Imagen actual" class="preview-image mt-2">
                            <div class="form-check mt-2">
                                <input type="checkbox" name="borrar_imagen" id="borrar_imagen" class="form-check-input">
                                <label for="borrar_imagen" class="form-check-label">Borrar imagen actual</label>
                            </div>
                        @endif
                        @error('imagen') <span class="error-message">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-actions">
                        <a href="{{ route('admin.dashboard') }}" class="btn-admin-cancel">Cancelar</a>
                        <button type="submit" class="btn-admin-create">Actualizar Artículo</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
