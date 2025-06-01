@extends('layouts.app')
@section('content')
    <div class="main-container">
        <div class="second-background"></div>
        <div class="admin-content">
            <h1>Gestión de Usuarios</h1>
            <p>Gestiona los usuarios de la plataforma</p>
            <div class="admin-container">
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <div class="user-table-container">
                    <table class="user-table">
                        <thead>
                        <tr>
                            <th data-label="ID">ID</th>
                            <th data-label="Nombre">Nombre</th>
                            <th data-label="Email">Email</th>
                            <th data-label="Admin">Admin</th>
                            <th data-label="Deshabilitado">Deshabilitado</th>
                            <th data-label="Acciones">Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse ($users as $user)
                            <tr>
                                <td data-label="ID">{{ $user->id }}</td>
                                <td data-label="Nombre">{{ $user->nombre }}</td>
                                <td data-label="Email">{{ $user->correo }}</td>
                                <td data-label="Admin">{{ $user->is_admin ? 'Sí' : 'No' }}</td>
                                <td data-label="Deshabilitado">{{ $user->is_disabled ? 'Sí' : 'No' }}</td>
                                <td data-label="Acciones" class="user-actions">
                                    <a href="{{ route('admin.users.edit', $user->id) }}" class="btn-user-edit">                                        <i class="bi bi-pen"></i>
                                    </a>
                                    <a href="{{ route('admin.users.password', $user->id) }}" class="btn-user-password">Cambiar Contraseña</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="no-users">No hay usuarios disponibles.</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
