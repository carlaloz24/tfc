@extends('layouts.app')
@section('title', 'Editar Usuario')
@section('content')
    <div class="container">
        <h1>Editar Usuario: {{ $user->nombre }}</h1>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="is_admin">Administrador</label>
                <input type="checkbox" name="is_admin" id="is_admin" {{ $user->is_admin ? 'checked' : '' }}>
            </div>
            <div class="form-group">
                <label for="is_disabled">Cuenta Deshabilitada</label>
                <input type="checkbox" name="is_disabled" id="is_disabled" {{ $user->is_disabled ? 'checked' : '' }}>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">Volver</a>
        </form>
    </div>
@endsection
