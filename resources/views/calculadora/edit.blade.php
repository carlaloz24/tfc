@extends('layouts.app')
@section('title', 'Actualizar Dieta')
@section('content')
    <div class="main-container">
        <header class="hero">
            <h1>Actualizar Dieta para {{ $mascota->nombre }}</h1>
        </header>
        <section class="plans">
            <article class="card" style="max-width: 1000px; width: 100%">
                <form id="formularioDieta" action="{{ route('calculadora.update', $dieta->id) }}" method="POST" class="form-calculadora p-4">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="mascota_id" value="{{ $mascota->id }}">
                    <input type="hidden" name="menu_json" id="menu_json" value="{}">
                    <input type="hidden" name="nombre" value="{{ $mascota->nombre }}">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <label for="peso" class="form-label">Peso (kg)</label>
                            <input type="number" class="form-control" id="peso" name="peso" min="1" step="0.1" value="{{ $mascota->peso }}" required>
                        </div>
                        <div class="col-md-6">
                            <label for="categoria_edad" class="form-label">Edad</label>
                            <select class="form-select" id="categoria_edad" name="categoria_edad" required>
                                <option value="cachorro_menor_4" {{ $mascota->categoria_edad == 'cachorro_menor_4' ? 'selected' : '' }}>Cachorro (<4 meses)</option>
                                <option value="cachorro_mayor_4" {{ $mascota->categoria_edad == 'cachorro_mayor_4' ? 'selected' : '' }}>Cachorro (>4 meses)</option>
                                <option value="adulto" {{ $mascota->categoria_edad == 'adulto' ? 'selected' : '' }}>Adulto</option>
                                <option value="senior" {{ $mascota->categoria_edad == 'senior' ? 'selected' : '' }}>Senior</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="esterilizado" class="form-label">¿Esterilizado?</label>
                            <select class="form-select" id="esterilizado" name="esterilizado" required>
                                <option value="1" {{ $mascota->esterilizado ? 'selected' : '' }}>Sí</option>
                                <option value="0" {{ !$mascota->esterilizado ? 'selected' : '' }}>No</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="nivel_actividad" class="form-label">Nivel de Actividad</label>
                            <select class="form-select" id="nivel_actividad" name="nivel_actividad" required>
                                <option value="baja" {{ $mascota->nivel_actividad == 'baja' ? 'selected' : '' }}>Baja</option>
                                <option value="moderada" {{ $mascota->nivel_actividad == 'moderada' ? 'selected' : '' }}>Moderada</option>
                                <option value="alta" {{ $mascota->nivel_actividad == 'alta' ? 'selected' : '' }}>Alta</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="tipo_dieta" class="form-label">Tipo de Dieta</label>
                            <select class="form-select" id="tipo_dieta" name="tipo_dieta" required>
                                <option value="barf" {{ $dieta->tipo_dieta == 'barf' ? 'selected' : '' }}>BARF</option>
                                <option value="cocida" {{ $dieta->tipo_dieta == 'cocida' ? 'selected' : '' }}>Cocida</option>
                                <option value="mixta_50" {{ $dieta->tipo_dieta == 'mixta_50' ? 'selected' : '' }}>Mixta (50% Pienso / 50% Natural)</option>
                                <option value="mixta_70" {{ $dieta->tipo_dieta == 'mixta_70' ? 'selected' : '' }}>Mixta (70% Pienso / 30% Natural)</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Condiciones de Salud</label><br>
                            @foreach (['obesidad', 'renal', 'artrosis', 'diabetes', 'alergia'] as $condicion)
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="{{ $condicion }}" name="condiciones_salud[]" value="{{ $condicion }}"
                                        {{ in_array($condicion, $mascota->condiciones_salud ?? []) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="{{ $condicion }}">{{ ucfirst($condicion) }}</label>
                                </div>
                            @endforeach
                            <select multiple class="form-select mt-2" id="alimentos_alergia" name="alimentos_alergia[]" style="display: {{ in_array('alergia', $mascota->condiciones_salud ?? []) ? 'block' : 'none' }};">
                                @foreach (['pollo_pechuga', 'pollo_muslo', 'pavo', 'ternera', 'cordero', 'conejo', 'sardina', 'caballa', 'salmon', 'higado_pollo', 'higado_res', 'rinon_res', 'corazon_pollo', 'mollejas', 'tripa_verde'] as $alimento)
                                    <option value="{{ $alimento }}" {{ in_array($alimento, $mascota->alimentos_alergia ?? []) ? 'selected' : '' }}>
                                        {{ str_replace('_', ' ', ucfirst($alimento)) }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-12">
                            <button id="calcularBtn" type="submit" style="width: 100%; background-color: #083630; height: 50px;">Actualizar Dieta</button>
                        </div>
                    </div>
                </form>
                <div id="resultados" class="mt-5"></div>
            </article>
        </section>
    </div>
@endsection
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    @vite(['resources/js/calculadora.js'])
@endpush
