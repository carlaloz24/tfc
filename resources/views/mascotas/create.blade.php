@extends('layouts.app')
@section('title', 'Añadir Mascota')
@section('content')
    <div class="container">
        <h2 class="profile-title">Añadir Nueva Mascota</h2>
        <div class="plan-form">
            <form action="{{ route('mascotas.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nombre" class="plan-form-label">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="plan-form-select" value="{{ old('nombre') }}" required>
                    @error('nombre')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="raza" class="plan-form-label">Raza</label>
                    <input type="text" name="raza" id="raza" class="plan-form-select" value="{{ old('raza') }}">
                    @error('raza')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="categoria_edad" class="plan-form-label">Categoría de Edad</label>
                    <select name="categoria_edad" id="categoria_edad" class="plan-form-select" required>
                        <option value="cachorro_menor_4" {{ old('categoria_edad') == 'cachorro_menor_4' ? 'selected' : '' }}>Cachorro (menor a 4 meses)</option>
                        <option value="cachorro_mayor_4" {{ old('categoria_edad') == 'cachorro_mayor_4' ? 'selected' : '' }}>Cachorro (mayor a 4 meses)</option>
                        <option value="adulto" {{ old('categoria_edad') == 'adulto' ? 'selected' : '' }}>Adulto</option>
                        <option value="senior" {{ old('categoria_edad') == 'senior' ? 'selected' : '' }}>Senior</option>
                    </select>
                    @error('categoria_edad')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="peso" class="plan-form-label">Peso (kg)</label>
                    <input type="number" name="peso" id="peso" class="plan-form-select" step="0.01" value="{{ old('peso') }}" required>
                    @error('peso')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="nivel_actividad" class="plan-form-label">Nivel de Actividad</label>
                    <select name="nivel_actividad" id="nivel_actividad" class="plan-form-select" required>
                        <option value="baja" {{ old('nivel_actividad') == 'baja' ? 'selected' : '' }}>Baja</option>
                        <option value="moderada" {{ old('nivel_actividad') == 'moderada' ? 'selected' : '' }}>Moderada</option>
                        <option value="alta" {{ old('nivel_actividad') == 'alta' ? 'selected' : '' }}>Alta</option>
                    </select>
                    @error('nivel_actividad')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="esterilizado" class="plan-form-label">Esterilizado</label>
                    <select name="esterilizado" id="esterilizado" class="plan-form-select" required>
                        <option value="1" {{ old('esterilizado') == '1' ? 'selected' : '' }}>Sí</option>
                        <option value="0" {{ old('esterilizado') == '0' ? 'selected' : '' }}>No</option>
                    </select>
                    @error('esterilizado')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="tipo_dieta_preferida" class="plan-form-label">Dieta Preferida</label>
                    <select name="tipo_dieta_preferida" id="tipo_dieta_preferida" class="plan-form-select" required>
                        <option value="barf" {{ old('tipo_dieta_preferida') == 'barf' ? 'selected' : '' }}>BARF</option>
                        <option value="cocida" {{ old('tipo_dieta_preferida') == 'cocida' ? 'selected' : '' }}>Cocida</option>
                        <option value="mixta_50" {{ old('tipo_dieta_preferida') == 'mixta_50' ? 'selected' : '' }}>Mixta 50%</option>
                        <option value="mixta_70" {{ old('tipo_dieta_preferida') == 'mixta_70' ? 'selected' : '' }}>Mixta 70%</option>
                    </select>
                    @error('tipo_dieta_preferida')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="profile-btn-primary">Añadir Mascota</button>
            </form>
        </div>
    </div>
@endsection
