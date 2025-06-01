@extends('layouts.app')
@section('title', 'Restablecer Contraseña')
@section('content')
    <div class="main-container">
        <div class="second-background"></div>
        <div class="login-content">
            <h1>Restablecer Contraseña</h1>
            <p>Ingresa tu nueva contraseña</p>
            <div class="login-container">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST" action="{{ route('password.update') }}" class="login-form">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="form-group">
                        <label for="email" class="form-label">Correo Electrónico</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" placeholder="Ingresa tu correo" required>
                    </div>
                    <div class="form-group">
                        <label for="password" class="form-label">Nueva Contraseña</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Ingresa tu nueva contraseña" required>
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation" class="form-label">Confirmar Contraseña</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirma tu contraseña" required>
                    </div>
                    <button type="submit" class="btn-login">Restablecer Contraseña</button>
                    <div class="login-links">
                        <a href="{{ route('login') }}" class="link-secondary">Volver al inicio de sesión</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
