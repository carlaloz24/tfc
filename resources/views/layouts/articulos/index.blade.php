@extends('layouts.app')
@section('title', 'Blog')
@section('content')

        <div class="content">
            <h1>Blog</h1>
            <p>Explora nuestros artículos sobre dietas y cuidado canino.</p>
        </div>

        <div class="card-container">
            @if ($articulos->isEmpty())
                <p>No hay artículos que mostrar</p>
            @else
                @foreach ($articulos as $articulo)
                    <div class="card-articulos">
                        @if ($articulo->imagen)
                            <img src="{{ asset('storage/' . $articulo->imagen) }}" alt="{{ $articulo->titulo }}" class="card-img">
                        @else
                            <img src="{{ asset('images/placeholder.jpg') }}" alt="Placeholder" class="card-img">
                        @endif
                        <h2>{{ $articulo->titulo }}</h2>
                        <p>{{ Str::limit($articulo->contenido, 100) }}</p>
                        <small>Publicado: {{ $articulo->fecha_publicacion }}</small>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection
