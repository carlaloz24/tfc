@extends('layouts.app')
@section('title', 'Registrarse')
@section('content')
    <div class="container mt-5">
        <h1>Registrarse</h1>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre') }}" required>
                @error('nombre') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
                <label for="correo" class="form-label">Correo</label>
                <input type="email" name="correo" id="correo" class="form-control" value="{{ old('correo') }}" required>
                @error('correo') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
                <label for="contraseña" class="form-label">Contraseña</label>
                <input type="password" name="contraseña" id="contraseña" class="form-control" required>
                @error('contraseña') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
                <label for="contraseña_confirmation" class="form-label">Confirmar Contraseña</label>
                <input type="password" name="contraseña_confirmation" id="contraseña_confirmation" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Registrarse</button>
            <a href="{{ route('login') }}" class="btn btn-secondary">Volver</a>
        </form>
    </div>
@endsection
