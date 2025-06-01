@extends('layouts.app')
@section('title', 'Recuperar Contraseña')
@section('content')
    <div class="main-container">
        <div class="second-background"></div>
        <div class="login-content">
            <h1>Recuperar Contraseña</h1>
            <p>Ingresa tu correo para recibir un enlace de restablecimiento</p>
            <div class="login-container">
                @if (session('status'))
                    <div class="alert alert-success">{{ session('status') }}</div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST" action="{{ route('password.email') }}" class="login-form">
                    @csrf
                    <div class="form-group">
                        <label for="correo" class="form-label">Correo Electrónico</label>
                        <input type="email" name="email" id="correo" class="form-control" value="{{ old('email') }}" placeholder="Ingresa tu correo" required autofocus>
                    </div>
                    <button type="submit" class="btn-login">Enviar Enlace</button>
                    <div class="login-links">
                        <a href="{{ route('login') }}" class="link-secondary">Volver al inicio de sesión</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
