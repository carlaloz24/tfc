@extends('layouts.app')
@section('content')
    <h1>Mi Perfil</h1>
    <p>Bienvenido, {{ auth()->user()->name }}</p>
@endsection
