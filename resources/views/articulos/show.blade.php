@extends('layouts.app')
@section('title', isset($articulo->titulo) ? $articulo->titulo : 'Artículo')
@section('content')
    <div class="main-container">
        <div class="second-background" style="z-index:-10;"></div>

    <div class="container mt-5">
        @if ($articulo)
            <div class="article-container">
                <h1 class="article-title">{{ $articulo->titulo }}</h1>
                <p class="article-date">
                    @if ($articulo->fecha_publicacion)
                        {{ \Carbon\Carbon::parse($articulo->fecha_publicacion)->format('d/m/Y') }}
                    @else
                        Sin fecha
                    @endif
                </p>
                <div class="article-content" >
                    {!! $articulo->contenido ?: 'Sin contenido disponible' !!}
                </div>
                @if ($articulo->imagen)
                    <img src="{{ Storage::url($articulo->imagen) }}"
                         alt="{{ $articulo->titulo }}"
                         class="article-image img-fluid mt-3">
                @else
                    <p class="no-image mt-3">Sin imagen</p>
                @endif
                <div class="article-actions mt-3">
                    <a href="{{ route('articulos.index') }}"
                       class="btn btn-custom">Volver</a>
                    @auth
                        @if (Auth::user()->is_admin)
                            <a href="{{ route('articulos.edit', $articulo->slug) }}"
                               class="btn btn-custom">Editar</a>
                        @endif
                    @endauth
                </div>
            </div>
        @else
            <p class="error-message">No se encontró el artículo.</p>
        @endif
            <br>
    </div>
    </div>


@endsection
