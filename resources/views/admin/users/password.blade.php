@extends('layouts.app')
@section('title', 'Cambiar Contraseña')
@section('content')
    <div class="container">
        <h1>Cambiar Contraseña: {{ $user->nombre }}</h1>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <form action="{{ route('admin.users.password.update', $user->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="password">Nueva Contraseña</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirmar Contraseña</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar Contraseña</button>
            <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">Volver</a>
        </form>
    </div>
@endsection
