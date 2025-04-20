@extends('layouts.app')
@section('title', 'Iniciar Sesión')
@section('content')
    <div class="main-container">
        <div class="second-background"></div>
        <div class="login-content">
            <h1>Iniciar Sesión</h1>
            <p>Accede a tu cuenta</p>
            <div class="login-container">
                @if (session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
                <form method="POST" action="{{ route('login') }}" class="login-form">
                    @csrf
                    <div class="form-group">
                        <label for="correo" class="form-label">Correo Electrónico</label>
                        <input type="email" name="correo" id="correo" class="form-control" value="{{ old('correo') }}" placeholder="Ingresa tu correo" required autofocus>
                        @error('correo') <span class="error-message">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="contraseña" class="form-label">Contraseña</label>
                        <input type="password" name="contraseña" id="contraseña" class="form-control" placeholder="Ingresa tu contraseña" required>
                        @error('contraseña') <span class="error-message">{{ $message }}</span> @enderror
                    </div>
                    <button type="submit" class="btn-login">Iniciar Sesión</button>
                </form>
            </div>
        </div>
    </div>
@endsection
