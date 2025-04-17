@extends('layouts.app')
@section('title', $articulo->titulo)
@section('content')
    <div class="container mt-4">
        <h1>{{ $articulo->titulo }}</h1>
        <p><strong>Publicado el:</strong> {{ $articulo->fecha_publicacion }}</p>
        <div>{!! nl2br(e($articulo->contenido)) !!}</div>
        @if ($articulo->imagen)
            <img src="{{ Storage::url($articulo->imagen) }}" alt="{{ $articulo->titulo }}" class="img-fluid">
        @endif
    </div>
@endsection
