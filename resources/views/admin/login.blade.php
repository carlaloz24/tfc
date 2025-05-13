@extends('layouts.app')
@section('title', 'Iniciar Sesión Administrador')
@section('content')
    <div class="main-container">
        <div class="second-background"></div>
        <div class="login-content">
            <h1>Iniciar Sesión Administrador</h1>
            <p>Accede a tu cuenta de administrador</p>
            <div class="login-container">
                @if (session('error') || $errors->any())
                    <div class="alert alert-danger">
                        {{ session('error') ?: $errors->first('email') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('admin.login') }}" class="login-form">
                    @csrf
                    <div class="form-group">
                        <label for="email" class="form-label">Correo Electrónico</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" placeholder="Ingresa tu correo" required autofocus>
                        @error('email') <span class="error-message">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Ingresa tu contraseña" required>
                        @error('password') <span class="error-message">{{ $message }}</span> @enderror
                    </div>
                    <button type="submit" class="btn-login">Iniciar Sesión</button>
                </form>
            </div>
        </div>
    </div>
@endsection
