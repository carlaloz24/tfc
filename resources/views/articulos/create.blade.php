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
                <form method="POST" action="{{ route('articulos.store') }}" enctype="multipart/form-data" class="admin-form" onsubmit="tinymce.triggerSave(); console.log('Formulario enviado');">
                    @csrf
                    <div class="form-group">
                        <label for="titulo" class="form-label">Título</label>
                        <input type="text" name="titulo" id="titulo" class="form-control" value="{{ old('titulo') }}" placeholder="Ingresa el título" required autofocus>
                        @error('titulo') <span class="error-message">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="contenido" class="form-label">Contenido</label>
                        <textarea name="contenido" id="contenido" class="form-control" rows="6" placeholder="Escribe el contenido del artículo">{{ old('contenido') }}</textarea>
                        @error('contenido') <span class="error-message">{{ $message }}</span> @enderror
                    </div>
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
@push('scripts')
    <script src="https://cdn.tiny.cloud/1/e6iuajh2xjxt68o22sy1iaxn5eylcchex68ueiaw4n38cc37/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#contenido',
            plugins: 'advlist autolink lists link image charmap preview anchor searchreplace visualblocks code fullscreen insertdatetime media table code help wordcount',
            toolbar: 'undo redo | formatselect | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | code preview',
            menubar: false,
            height: 400,
            content_style: 'body { font-family: Arial, sans-serif; font-size: 16px; }'
        });
    </script>
@endpush
