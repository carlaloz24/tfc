
@extends('layouts.app')
@section('title', 'Cambiar Contraseña')
@section('content')
    <div class="main-container">
        <div class="second-background"></div>
        <div class="admin-content">
            <h1>Cambiar contraseña a <strong>{{ $user->nombre }} </strong></h1>
            <p>Actualiza la contraseña del usuario</p>
            <div class="admin-container">
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
                <div class="password-form-container">
                    <form action="{{ route('admin.users.password.update', $user->id) }}" method="POST" class="password-form">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="password" class="form-label">Nueva Contraseña</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Introduce la nueva contraseña" required>
                        </div>
                        <div class="form-group" style="margin-top: 20px;">
                            <label for="password_confirmation" class="form-label">Confirmar Contraseña</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirma la contraseña" required>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn-admin-primary">Actualizar Contraseña</button>
                            <a href="{{ route('admin.users.index') }}" class="btn-admin-secondary">Volver</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
