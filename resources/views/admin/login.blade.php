@extends('layouts.app')
@section('title', 'Login Administrador')
@section('content')
    <div class="container mt-5">
        <h1>Login Administrador</h1>
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        @if ($errors->has('correo'))
            <div class="alert alert-danger">{{ $errors->first('correo') }}</div>
        @endif
        <form method="POST" action="{{ route('admin.login') }}">
            @csrf
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
            <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
            <a href="{{ route('login') }}" class="btn btn-secondary">Login Público</a>
        </form>
    </div>
@endsection
