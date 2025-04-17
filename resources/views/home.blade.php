@extends('layouts.app')
@section('title', 'Inicio')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Bienvenido a TFC</h1>
            <p>Esta es la página principal.</p>
            @auth
                <p>Hola, {{ auth()->user()->nombre }}!</p>
            @endauth
        </div>
    </div>
@endsection
