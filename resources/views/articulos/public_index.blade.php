@extends('layouts.app')
@section('title', 'Blog')
@section('content')
    <div class="main-container">
        <div class="second-background"></div>
        <div class="content">
            <h1>Blog</h1>
            <p>Explora nuestros artículos sobre dietas y alimentación canina</p>
        </div>
        <div class="card-container">
            @if ($articulos->isEmpty())
                <p>No hay artículos que mostrar</p>
            @else
                @foreach ($articulos as $articulo)
                    <a href="{{ route('articulos.show', $articulo->slug) }}" class="card-link">
                        <div class="card-articulos">
                            @if ($articulo->imagen)
                                <img src="{{ asset('storage/' . $articulo->imagen) }}" alt="{{ $articulo->titulo }}" class="card-img">
                            @else
                                <p>Sin imagen</p>
                            @endif
                            <h2>{{ $articulo->titulo }}</h2>
                            <p class="subtitle">{{ Str::limit($articulo->contenido, 100) }}</p>
                            <small>
                                Publicado:
                                @if ($articulo->fecha_publicacion)
                                    {{ \Carbon\Carbon::parse($articulo->fecha_publicacion)->format('d/m/Y') }}
                                @else
                                    Sin fecha
                                @endif
                            </small>
                        </div>
                    </a>
                @endforeach
            @endif
        </div>
    </div>
@endsection
