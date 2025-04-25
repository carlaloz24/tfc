@extends('layouts.app')
@section('title', 'Mi Perfil')
@section('content')
    <div class="profile-container">
        <div class="profile-block">
            <!-- Datos del usuario -->
            <div class="profile-panel">
                <h2 class="profile-title">Datos Personales</h2>
                <form action="{{ route('profile.update') }}" method="POST" class="profile-data-form">
                    @csrf
                    @method('PATCH')
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="profile-form-group">
                                <label for="name" class="profile-form-label">Nombre</label>
                                <input type="text" name="name" id="name" class="profile-form-input" value="{{ Auth::user()->nombre }}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="profile-form-group">
                                <label for="email" class="profile-form-label">Correo Electrónico</label>
                                <input type="email" name="email" id="email" class="profile-form-input" value="{{ Auth::user()->correo }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="profile-form-actions">
                        <button type="submit" class="profile-btn-primary">Actualizar Datos</button>
                        <a href="{{ route('profile.delete') }}" class="profile-btn-danger" onclick="return confirm('¿Estás seguro de querer eliminar tu cuenta? Esta acción no se puede deshacer.')">Eliminar Cuenta</a>
                    </div>
                </form>
            </div>

            <!-- Lista de mascotas -->
            <div class="profile-panel">
                <h2 class="profile-title">Tus Mascotas</h2>
                <a href="{{ route('mascotas.create') }}" class="profile-btn-primary mb-3">Añadir Mascota</a>
                @if($mascotas->isEmpty())
                    <p class="profile-description">No tienes mascotas registradas. ¡Añade una!</p>
                @else
                    <div class="table-responsive">
                        <table class="profile-pets-table">
                            <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Raza</th>
                                <th>Categoría Edad</th>
                                <th>Peso</th>
                                <th>Nivel Actividad</th>
                                <th>Dieta Preferida</th>
                                <th>Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($mascotas as $mascota)
                                <tr>
                                    <td>{{ $mascota->nombre }}</td>
                                    <td>{{ $mascota->raza }}</td>
                                    <td>{{ $mascota->categoria_edad }}</td>
                                    <td>{{ $mascota->peso }} kg</td>
                                    <td>{{ $mascota->nivel_actividad }}</td>
                                    <td>{{ $mascota->tipo_dieta_preferida }}</td>
                                    <td>
                                        <a href="{{ route('mascotas.show', $mascota->id) }}" class="profile-action-icon"><i class="bi bi-eye"></i></a>
                                        <a href="{{ route('mascotas.edit', $mascota->id) }}" class="profile-action-icon"><i class="bi bi-pencil"></i></a>
                                        <form action="{{ route('mascotas.destroy', $mascota->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="profile-action-icon profile-action-delete" onclick="return confirm('¿Eliminar esta mascota?')"><i class="bi bi-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>

            <!-- Extras: Historial de dietas y facturas -->
            <div class="profile-panel">
                <h2 class="profile-title">Extras</h2>
                <div class="row g-3">
                    <div class="col-md-6">
                        <h3 class="profile-subtitle">Historial de Dietas</h3>
                        <p class="profile-description">Consulta las dietas generadas para tus mascotas.</p>
                        <a href="#" class="profile-btn-secondary" onclick="alert('Funcionalidad en desarrollo')">Ver Historial</a>
                    </div>
                    <div class="col-md-6">
                        <h3 class="profile-subtitle">Facturas</h3>
                        <p class="profile-description">Descarga las facturas de tu plan contratado.</p>
                        <a href="#" class="profile-btn-secondary" onclick="alert('Funcionalidad en desarrollo')">Descargar Facturas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
