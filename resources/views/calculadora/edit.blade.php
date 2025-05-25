@extends('layouts.app')
@section('title', 'Editar Mascota')
@section('content')
    <div class="main-container">
        <header class="hero">
            <h1>Editar Mascota: {{ $mascota->nombre }}</h1>
        </header>
        <section class="plans">
            <article class="card" style="max-width: 1000px; width: 100%">
                <form action="{{ route('mascotas.update', $mascota->id) }}" method="POST" class="form-calculadora p-4">
                    @csrf
                    @method('PUT')
                    <div class="row g-4">
                        <div class="col-md-6">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre', $mascota->nombre) }}" required>
                            @error('nombre')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="raza" class="form-label">Raza</label>
                            <select class="form-select" id="raza" name="raza" required>
                                <option value="">Selecciona una raza</option>
                            </select>
                            @error('raza')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div id="raza-error" class="text-danger" style="display: none;">Error al cargar las razas. Por favor, intenta de nuevo.</div>
                        </div>
                        <div class="col-md-6">
                            <label for="peso" class="form-label">Peso (kg)</label>
                            <input type="number" class="form-control" id="peso" name="peso" min="0.1" step="0.1" value="{{ old('peso', $mascota->peso) }}" required>
                            @error('peso')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="categoria_edad" class="form-label">Edad</label>
                            <select class="form-select" id="categoria_edad" name="categoria_edad" required>
                                <option value="cachorro_menor_4" {{ old('categoria_edad', $mascota->categoria_edad) == 'cachorro_menor_4' ? 'selected' : '' }}>Cachorro (<4 meses)</option>
                                <option value="cachorro_mayor_4" {{ old('categoria_edad', $mascota->categoria_edad) == 'cachorro_mayor_4' ? 'selected' : '' }}>Cachorro (>4 meses)</option>
                                <option value="adulto" {{ old('categoria_edad', $mascota->categoria_edad) == 'adulto' ? 'selected' : '' }}>Adulto</option>
                                <option value="senior" {{ old('categoria_edad', $mascota->categoria_edad) == 'senior' ? 'selected' : '' }}>Senior</option>
                            </select>
                            @error('categoria_edad')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="esterilizado" class="form-label">¿Esterilizado?</label>
                            <select class="form-select" id="esterilizado" name="esterilizado" required>
                                <option value="1" {{ old('esterilizado', $mascota->esterilizado) ? 'selected' : '' }}>Sí</option>
                                <option value="0" {{ old('esterilizado', $mascota->esterilizado) ? '' : 'selected' }}>No</option>
                            </select>
                            @error('esterilizado')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="nivel_actividad" class="form-label">Nivel de Actividad</label>
                            <select class="form-select" id="nivel_actividad" name="nivel_actividad" required>
                                <option value="baja" {{ old('nivel_actividad', $mascota->nivel_actividad) == 'baja' ? 'selected' : '' }}>Baja</option>
                                <option value="moderada" {{ old('nivel_actividad', $mascota->nivel_actividad) == 'moderada' ? 'selected' : '' }}>Moderada</option>
                                <option value="alta" {{ old('nivel_actividad', $mascota->nivel_actividad) == 'alta' ? 'selected' : '' }}>Alta</option>
                            </select>
                            @error('nivel_actividad')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="tipo_dieta_preferida" class="form-label">Tipo de Dieta Preferida</label>
                            <select class="form-select" id="tipo_dieta_preferida" name="tipo_dieta_preferida" required>
                                <option value="barf" {{ old('tipo_dieta_preferida', $mascota->tipo_dieta_preferida) == 'barf' ? 'selected' : '' }}>BARF</option>
                                <option value="cocida" {{ old('tipo_dieta_preferida', $mascota->tipo_dieta_preferida) == 'cocida' ? 'selected' : '' }}>Cocida</option>
                                <option value="mixta_50" {{ old('tipo_dieta_preferida', $mascota->tipo_dieta_preferida) == 'mixta_50' ? 'selected' : '' }}>Mixta (50% Pienso / 50% Natural)</option>
                                <option value="mixta_70" {{ old('tipo_dieta_preferida', $mascota->tipo_dieta_preferida) == 'mixta_70' ? 'selected' : '' }}>Mixta (70% Pienso / 30% Natural)</option>
                            </select>
                            @error('tipo_dieta_preferida')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Condiciones de Salud</label><br>
                            @foreach (['obesidad', 'renal', 'artrosis', 'diabetes', 'alergia'] as $condicion)
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="{{ $condicion }}" name="condiciones_salud[]" value="{{ $condicion }}"
                                        {{ in_array($condicion, old('condiciones_salud', $mascota->condiciones_salud ?? [])) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="{{ $condicion }}">{{ ucfirst($condicion) }}</label>
                                </div>
                            @endforeach
                            @error('condiciones_salud')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <select multiple class="form-select mt-2" id="alimentos_alergia" name="alimentos_alergia[]"
                                    style="display: {{ in_array('alergia', old('condiciones_salud', $mascota->condiciones_salud ?? [])) ? 'block' : 'none' }};">
                                @foreach (['pollo_pechuga', 'pollo_muslo', 'pavo', 'ternera', 'cordero', 'conejo', 'sardina', 'caballa', 'salmon', 'higado_pollo', 'higado_res', 'rinon_res', 'corazon_pollo', 'mollejas', 'tripa_verde'] as $alimento)
                                    <option value="{{ $alimento }}" {{ in_array($alimento, old('alimentos_alergia', $mascota->alimentos_alergia ?? [])) ? 'selected' : '' }}>
                                        {{ str_replace('_', ' ', ucfirst($alimento)) }}
                                    </option>
                                @endforeach
                            </select>
                            @error('alimentos_alergia')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary" style="width: 100%; height: 50px; background-color: #083630;">Actualizar Mascota</button>
                        </div>
                    </div>
                </form>
            </article>
        </section>
    </div>
@endsection
@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const alergiaCheckbox = document.getElementById('alergia');
            const alimentosAlergiaSelect = document.getElementById('alimentos_alergia');
            const razaSelect = document.getElementById('raza');

            // Manejar visibilidad del selector de alergias
            if (alergiaCheckbox && alimentosAlergiaSelect) {
                alergiaCheckbox.addEventListener('change', function () {
                    alimentosAlergiaSelect.style.display = this.checked ? 'block' : 'none';
                });
            }

            // Cargar razas desde Dog CEO's Dog API
            if (razaSelect) {
                fetch('https://dog.ceo/api/breeds/list/all')
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Error en la respuesta de la API');
                        }
                        return response.json();
                    })
                    .then(data => {
                        razaSelect.innerHTML = '<option value="">Selecciona una raza</option>';
                        const breeds = Object.keys(data.message);
                        breeds.forEach(breed => {
                            const formattedBreed = breed
                                .split(/[-\s]/)
                                .map(item => item.charAt(0).toUpperCase() + item.slice(1))
                                .join(' ');
                            const option = document.createElement('option');
                            option.value = formattedBreed;
                            option.textContent = formattedBreed;
                            if (formattedBreed === '{{ $mascota->raza }}') {
                                option.selected = true;
                            }
                            razaSelect.appendChild(option);
                        });
                    })
                    .catch(error => {
                        console.error('Error al cargar razas:', error);
                        document.getElementById('raza-error').style.display = 'block';
                        razaSelect.innerHTML = '<option value="">Error al cargar razas</option>';
                    });
            }
        });
    </script>
@endpush
