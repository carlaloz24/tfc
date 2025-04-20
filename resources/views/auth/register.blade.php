@extends('layouts.app')
@section('title', 'Registrarse')
@section('content')
    <div class="main-container">
        <div class="second-background"></div>
        <div class="login-content">
            <h1>Registrarse</h1>
            <p>Crea tu cuenta Barfco</p>
            <div class="login-container">
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
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
                <form method="POST" action="{{ route('register') }}" class="login-form">
                    @csrf
                    <div class="form-group">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre') }}" placeholder="Introduce tu nombre" required autofocus>
                        @error('nombre') <span class="error-message">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="correo" class="form-label">Correo Electrónico</label>
                        <input type="email" name="correo" id="correo" class="form-control" value="{{ old('correo') }}" placeholder="Introduce tu correo" required>
                        @error('correo') <span class="error-message">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="contraseña" class="form-label">Contraseña</label>
                        <input type="password" name="contraseña" id="contraseña" class="form-control" placeholder="Introduce tu contraseña" required>
                        @error('contraseña') <span class="error-message">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="contraseña_confirmation" class="form-label">Confirmar Contraseña</label>
                        <input type="password" name="contraseña_confirmation" id="contraseña_confirmation" class="form-control" placeholder="Confirma tu contraseña" required>
                    </div>
                    <button type="submit" class="btn-login">Registrarse</button>
                    <div class="login-links">
                        <a href="{{ route('login') }}" class="link-secondary">Ya tengo una cuenta</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
