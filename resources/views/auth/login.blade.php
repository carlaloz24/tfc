@extends('layouts.app')
@section('title', 'Iniciar Sesión')
@section('content')
    <div class="main-container">
        <div class="second-background"></div>
        <div class="login-content">
            <h1>Iniciar Sesión</h1>
            <p>Accede a tu cuenta</p>
            <div class="login-container">
                @if (session('error') || $errors->any())
                    <div class="alert alert-danger">
                        {{ session('error') ?: 'Correo o contraseña incorrectos. Por favor, verifica tus datos.' }}
                    </div>
                @endif
                <form method="POST" action="{{ route('login') }}" class="login-form">
                    @csrf
                    <div class="form-group">
                        <label for="correo" class="form-label">Correo Electrónico</label>
                        <input type="email" name="correo" id="correo" class="form-control" value="{{ old('correo') }}" placeholder="Ingresa tu correo" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="contraseña" class="form-label">Contraseña</label>
                        <input type="password" name="contraseña" id="contraseña" class="form-control" placeholder="Ingresa tu contraseña" required>
                    </div>
                    <button type="submit" class="btn-login">Iniciar Sesión</button>
                    <div class="login-links">
                        <a href="{{ route('register') }}" class="link-secondary"><strong>Crear una cuenta</strong></a>
                        <a href="{{ route('password.request') }}" class="link-secondary">¿Has olvidado tu contraseña?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
