@extends('layouts.app')
@section('title', $articulo->titulo)
@section('content')
    <div class="container mt-4">
        <h1>{{ $articulo->titulo }}</h1>
        <p><strong>Publicado el:</strong> {{ $articulo->fecha_publicacion }}</p>
        <div>{!! nl2br(e($articulo->contenido)) !!}</div>
        <p>{{ $articulo->fecha_publicacion->format('d F Y') }}</p>

        <p>{{ $articulo->fecha_publicacion->format('d F Y') }}</p>

        @if ($articulo->imagen)
            <img src="{{ asset('storage/' . $articulo->imagen) }}" alt="{{ $articulo->titulo }}" class="card-img">
        @else
            <p>Sin imagen</p>
        @endif
    </div>
@endsection
