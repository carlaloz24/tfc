@extends('layouts.app')
@section('title', $articulo->titulo)
@section('content')
    <div class="container mt-5">
        <h1>{{ $articulo->titulo }}</h1>
        <p><strong>Publicado el:</strong>
            @if ($articulo->fecha_publicacion)
                {{ \Carbon\Carbon::parse($articulo->fecha_publicacion)->format('d/m/Y') }}
            @else
                Sin fecha
            @endif
        </p>
        @if ($articulo->imagen)
            <img src="{{ Storage::url($articulo->imagen) }}" alt="{{ $articulo->titulo }}" class="img-fluid mb-3" style="max-width: 100%;">
        @endif
        <div>{!! nl2br(e($articulo->contenido)) !!}</div>
        <a href="{{ route('articulos.index') }}" class="btn btn-secondary mt-3">Volver al Blog</a>
        @auth
            @if (Auth::user()->is_admin)
                <a href="{{ route('articles.edit', $articulo) }}" class="btn btn-warning mt-3">Editar</a>
            @endif
        @endauth
    </div>
@endsection
