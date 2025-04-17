@extends('layouts.app')
@section('title', 'Registrarse')
@section('content')
    <div class="container">
        <h1>Registrarse</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="correo" class="form-label">Correo</label>
                <input type="email" name="correo" id="correo" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="contraseña" class="form-label">Contraseña</label>
                <input type="password" name="contraseña" id="contraseña" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="contraseña_confirmation" class="form-label">Confirmar Contraseña</label>
                <input type="password" name="contraseña_confirmation" id="contraseña_confirmation" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Registrarse</button>
        </form>
    </div>
@endsection
