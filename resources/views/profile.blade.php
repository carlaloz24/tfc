@extends('layouts.app')
@section('title', 'Mi Perfil')
@section('content')
    <div class="profile-container">
               <div class="profile-block">
            <h1> ¡Hola {{ Auth::user()->nombre }} !</h1>
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

            <!-- Lista de mascotas y dietas -->
            <div class="profile-panel">
                <h2 class="profile-title">Tus Mascotas</h2>
                <a href="{{ route('mascotas.create') }}" class="profile-btn-primary mb-3">Añadir Mascota</a>
                @if($mascotas->isEmpty())
                    <p class="profile-description">No tienes mascotas registradas. ¡Añade una!</p>
                @else
                    <div class="row g-3">
                        @foreach($mascotas as $mascota)
                            <div class="col-md-6">
                                <div class="pet-card">
                                    <div class="pet-card-body">
                                        <h3 class="pet-card-title">{{ $mascota->nombre }}</h3>
                                        <p class="pet-card-text">
                                            <strong>Raza:</strong> {{ $mascota->raza ?? 'No especificada' }}<br>
                                            <strong>Edad:</strong> {{ $mascota->categoria_edad }}<br>
                                            <strong>Peso:</strong> {{ $mascota->peso }} kg<br>
                                            <strong>Plan:</strong>
                                            @if($mascota->plan)
                                                {{ ucfirst($mascota->plan->tipo_plan) }} ({{ ucfirst($mascota->plan->frecuencia) }})
                                            @else
                                                Sin plan
                                            @endif
                                        </p>
                                        <h4 class="pet-card-subtitle">Dietas Generadas</h4>
                                        @if($mascota->dietas->isEmpty())
                                            <p>No hay dietas generadas para {{ $mascota->nombre }}.</p>
                                            <a href="{{ route('calculadora') }}" class="pet-btn-primary">Generar Dieta</a>

                                        @else
                                            <ul class="pet-diet-list">
                                                @foreach($mascota->dietas as $dieta)
                                                    <li class="pet-diet-item">
                                                        <span>Dieta {{ ucfirst($dieta->tipo_dieta) }} - {{ $dieta->created_at->format('Y-m-d') }}</span>
                                                        <a href="{{ route('dietas.download', $dieta->id) }}" class="pet-btn-download">Descargar PDF</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                        <div class="pet-card-actions">
                                            <a href="{{ route('mascotas.show', $mascota->id) }}" class="pet-btn-action"><i class="bi bi-eye"></i></a>
                                            <a href="{{ route('mascotas.edit', $mascota->id) }}" class="pet-btn-action"><i class="bi bi-pencil"></i></a>
                                            <form action="{{ route('mascotas.destroy', $mascota->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="pet-btn-action pet-btn-delete" onclick="return confirm('¿Eliminar esta mascota?')"><i class="bi bi-trash"></i></button>
                                            </form>
                                            @if(!$mascota->plan)
                                                <a href="{{ route('planes.contratar', ['tipo_plan' => 'basico', 'mascota_id' => $mascota->id]) }}" class="pet-btn-primary">Contratar Plan</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>

            <!-- Facturas -->
            <div class="profile-panel">
                <h2 class="profile-title">Facturas</h2>
                <p class="profile-description">Descarga las facturas de tus planes contratados.</p>
                <a href="#" class="profile-btn-secondary" onclick="alert('Funcionalidad en desarrollo')">Descargar Facturas</a>
            </div>
        </div>
    </div>
@endsection
