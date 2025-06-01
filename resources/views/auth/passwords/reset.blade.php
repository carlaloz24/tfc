


<!--  Cómo cambiar de contraseña
(*he añadido en .env MAIL_MAILER=log, configuración para enviar correos)

En el login, dar a: "¿Has olvidado tu contraseña?".
Ingresar un correo válido en la página que sale http://barfco.test/password/reset y enviar.
Ir en el proyecto a storage/logs/laravel.log para encontrar el enlace de restablecimiento (buscar "Enlace de restablecimiento").
Acceder al enlace, completar el formulario de restablecimiento y verificar que la contraseña se actualice.
Iniciar sesión con la nueva contraseña.
-->

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
                        <label for="correo" class="form-label">Correo Electrónico</label>
                        <input type="email" name="correo" id="correo" class="form-control" value="{{ old('correo', request()->query('correo')) }}" placeholder="Ingresa tu correo" required>
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
