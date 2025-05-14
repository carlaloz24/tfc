@extends('layouts.app')
@section('title', 'Mi Perfil')
@section('content')
    <div class="profile-container">
        <div class="profile-block">
            <h1>¡Hola {{ Auth::user()->nombre }}!</h1>
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
                                            <strong>Edad:</strong> {{ ucfirst(str_replace('_', ' ', $mascota->categoria_edad)) }}<br>
                                            <strong>Peso:</strong> {{ $mascota->peso }} kg<br>
                                            <strong>Nivel de Actividad:</strong> {{ ucfirst($mascota->nivel_actividad) }}<br>
                                            <strong>Esterilizado:</strong> {{ $mascota->esterilizado ? 'Sí' : 'No' }}<br>
                                            <strong>Dieta Preferida:</strong> {{ ucfirst(str_replace('_', ' ', $mascota->tipo_dieta_preferida)) }}<br>
                                            <strong>Condiciones de Salud:</strong> {{ implode(', ', $mascota->condiciones_salud ?? []) ?: 'Ninguna' }}<br>
                                            <strong>Alergias:</strong> {{ implode(', ', $mascota->alimentos_alergia ?? []) ?: 'Ninguna' }}<br>
                                            <strong>Plan:</strong>
                                            @if($mascota->plan)
                                                {{ ucfirst($mascota->plan->tipo_plan) }} ({{ ucfirst($mascota->plan->frecuencia) }})
                                            @else
                                                Sin plan
                                            @endif
                                        </p>
                                        <h4 class="pet-card-subtitle">Dieta Actual</h4>
                                        @if($mascota->dietas->isEmpty())
                                            <p>No hay dieta generada para {{ $mascota->nombre }}.</p>
                                            <a href="{{ route('calculadora.create', $mascota->id) }}" class="pet-btn-primary">Generar Dieta</a>
                                        @else
                                            @php
                                                $dieta = $mascota->dietas->first();
                                            @endphp
                                            <p>
                                                Dieta {{ ucfirst($dieta->tipo_dieta) }} - {{ $dieta->created_at->format('Y-m-d') }}
                                                <a href="{{ route('calculadora.download', $dieta->id) }}" class="pet-btn-download">Descargar PDF</a>
                                            </p>
                                            <a href="{{ route('calculadora.create', $mascota->id) }}" class="pet-btn-primary">Actualizar Dieta</a>
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
                                                <a href="{{ route('planes.select', $mascota->id) }}" class="pet-btn-primary">Contratar Plan</a>
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
            <div class="profile-section">
                <h2>Mis Facturas</h2>
                @if (auth()->user()->facturas->isEmpty())
                    <p>No tienes facturas.</p>
                @else
                    <table class="facturas-table">
                        <thead>
                        <tr>
                            <th>Fecha</th>
                            <th>Plan</th>
                            <th>Mascota</th>
                            <th>Precio</th>
                            <th>Descargar</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach (auth()->user()->facturas as $factura)
                            <tr>
                                <td>{{ $factura->fecha_emision->format('d/m/Y') }}</td>
                                <td>{{ ucfirst($factura->tipo_plan) }}</td>
                                <td>{{ $factura->mascota->nombre }}</td>
                                <td>€{{ number_format($factura->precio, 2) }}/{{ $factura->frecuencia }}</td>
                                <td>
                                    <a href="{{ Storage::url($factura->pdf_path) }}" class="btn btn-orange" download>Descargar PDF</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @endif
            </div>



        </div>
    </div>
@endsection
