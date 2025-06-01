@extends('layouts.app')
@section('title', 'Gestión de Usuarios')
@section('content')
    <div class="container">
        <h1>Gestión de Usuarios</h1>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Admin</th>
                <th>Deshabilitado</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->nombre }}</td>
                    <td>{{ $user->correo }}</td>
                    <td>{{ $user->is_admin ? 'Sí' : 'No' }}</td>
                    <td>{{ $user->is_disabled ? 'Sí' : 'No' }}</td>
                    <td>
                        <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-primary btn-sm">Editar</a>
                        <a href="{{ route('admin.users.password', $user->id) }}" class="btn btn-secondary btn-sm">Cambiar Contraseña</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
