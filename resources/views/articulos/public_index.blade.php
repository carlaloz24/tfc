@extends('layouts.app')
@section('title', 'Blog')
@section('content')
    <div class="container mt-5">
        <h1>Blog</h1>
        @if ($articulos->isEmpty())
            <p>No hay artículos disponibles.</p>
        @else
            <div class="row">
                @foreach ($articulos as $articulo)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            @if ($articulo->imagen)
                                <img src="{{ Storage::url($articulo->imagen) }}" class="card-img-top" alt="{{ $articulo->titulo }}">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $articulo->titulo }}</h5>
                                <p class="card-text">{{ Str::limit($articulo->contenido, 100) }}</p>
                                <a href="{{ route('articulos.show', $articulo->slug) }}" class="btn btn-primary">Leer más</a>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">
                                    Publicado el
                                    @if ($articulo->fecha_publicacion)
                                        {{ \Carbon\Carbon::parse($articulo->fecha_publicacion)->format('d/m/Y') }}
                                    @else
                                        Sin fecha
                                    @endif
                                </small>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
