@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <h1>Crear Artículo</h1>
        <form method="POST" action="{{ route('articulos.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label>Título</label>
                <input type="text" name="titulo" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Contenido</label>
                <textarea name="contenido" class="form-control" required></textarea>
            </div>
            <div class="mb-3">
                <label>Imagen</label>
                <input type="file" name="imagen" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection
