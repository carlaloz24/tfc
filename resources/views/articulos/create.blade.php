@extends('layouts.app')
@section('title', 'Crear Artículo')
@section('content')
    <div class="main-container">
        <div class="second-background"></div>
        <div class="admin-content">
            <h1>Crear Artículo</h1>
            <p>Añade un nuevo artículo al blog</p>
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
                <form method="POST" action="{{ route('articles.store') }}" enctype="multipart/form-data" class="admin-form">
                    @csrf
                    <div class="form-group">
                        <label for="titulo" class="form-label">Título</label>
                        <input type="text" name="titulo" id="titulo" class="form-control" value="{{ old('titulo') }}" placeholder="Ingresa el título" required autofocus>
                        @error('titulo') <span class="error-message">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="contenido" class="form-label">Contenido</label>
                        <textarea name="contenido" id="contenido" class="form-control" style="border-radius: 15px" rows="6" placeholder="Escribe el contenido del artículo" required>{{ old('contenido') }}</textarea>                    </div>
                    <div class="form-group">
                        <label for="imagen" class="form-label">Imagen (opcional)</label>
                        <input type="file" name="imagen" id="imagen" class="form-control file-input" accept="image/*">
                        @error('imagen') <span class="error-message">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn-admin-create">Crear Artículo</button>
                        <a href="{{ route('admin.dashboard') }}" class="btn-admin-cancel">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
