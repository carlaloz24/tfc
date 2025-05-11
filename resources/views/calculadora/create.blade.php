@extends('layouts.app')
@section('title', 'Calculadora de Dieta')
@section('content')
    <div class="main-container">
        <div class="second-background"></div>
        <header class="hero">
            <h1>Calculadora de Dietas Caninas {{ $mascota ? 'para ' . $mascota->nombre : '' }}</h1>
            <p style="line-height: 24px">Genera la dieta específica para {{ $mascota->nombre }} en un solo click</p>
        </header>
        <section class="plans">
            <article class="card" style="max-width: 1000px; width: 100%">
                <form id="formularioDieta" action="{{ route('calculadora.store') }}" method="POST" class="form-calculadora p-4">
                    @csrf
                    @if($mascota)
                        <input type="hidden" name="mascota_id" value="{{ $mascota->id }}">
                    @endif
                    <input type="hidden" name="menu_json" id="menu_json" value="{}">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="nombrePerro" class="form-label">Nombre del Perro</label>
                                <input type="text" class="form-control" id="nombrePerro" name="nombre" value="{{ old('nombre', $mascota->nombre ?? '') }}" required>
                                @error('nombre')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="peso" class="form-label">Peso (kg)</label>
                                <input type="number" class="form-control" id="peso" name="peso" min="1" step="0.1" value="{{ old('peso', $mascota->peso ?? '') }}" required>
                                @error('peso')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="edad" class="form-label">Edad</label>
                                <select class="form-select" id="edad" name="categoria_edad" required>
                                    <option value="cachorro_menor_4" {{ old('categoria_edad', $mascota->categoria_edad ?? '') == 'cachorro_menor_4' ? 'selected' : '' }}>Cachorro (<4 meses)</option>
                                    <option value="cachorro_mayor_4" {{ old('categoria_edad', $mascota->categoria_edad ?? '') == 'cachorro_mayor_4' ? 'selected' : '' }}>Cachorro (>4 meses)</option>
                                    <option value="adulto" {{ old('categoria_edad', $mascota->categoria_edad ?? '') == 'adulto' ? 'selected' : '' }}>Adulto</option>
                                    <option value="senior" {{ old('categoria_edad', $mascota->categoria_edad ?? '') == 'senior' ? 'selected' : '' }}>Senior</option>
                                </select>
                                @error('categoria_edad')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="esterilizado" class="form-label">¿Esterilizado?</label>
                                <select class="form-select" id="esterilizado" name="esterilizado" required>
                                    <option value="1" {{ old('esterilizado', $mascota->esterilizado ?? '') == 1 ? 'selected' : '' }}>Sí</option>
                                    <option value="0" {{ old('esterilizado', $mascota->esterilizado ?? '') == 0 ? 'selected' : '' }}>No</option>
                                </select>
                                @error('esterilizado')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="nivelActividad" class="form-label">Nivel de Actividad</label>
                                <select class="form-select" id="nivelActividad" name="nivel_actividad" required>
                                    <option value="baja" {{ old('nivel_actividad', $mascota->nivel_actividad ?? '') == 'baja' ? 'selected' : '' }}>Baja</option>
                                    <option value="moderada" {{ old('nivel_actividad', $mascota->nivel_actividad ?? '') == 'moderada' ? 'selected' : '' }}>Moderada</option>
                                    <option value="alta" {{ old('nivel_actividad', $mascota->nivel_actividad ?? '') == 'alta' ? 'selected' : '' }}>Alta</option>
                                </select>
                                @error('nivel_actividad')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="tipoDieta" class="form-label">Tipo de Dieta</label>
                                <select class="form-select" id="tipoDieta" name="tipo_dieta" required>
                                    <option value="barf" {{ old('tipo_dieta', $mascota->tipo_dieta_preferida ?? '') == 'barf' ? 'selected' : '' }}>BARF</option>
                                    <option value="cocida" {{ old('tipo_dieta', $mascota->tipo_dieta_preferida ?? '') == 'cocida' ? 'selected' : '' }}>Cocida</option>
                                    <option value="mixta_50" {{ old('tipo_dieta', $mascota->tipo_dieta_preferida ?? '') == 'mixta_50' ? 'selected' : '' }}>Mixta (50% Pienso / 50% Natural)</option>
                                    <option value="mixta_70" {{ old('tipo_dieta', $mascota->tipo_dieta_preferida ?? '') == 'mixta_70' ? 'selected' : '' }}>Mixta (70% Pienso / 30% Natural)</option>
                                </select>
                                @error('tipo_dieta')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Condiciones de Salud</label><br>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="obesidad" name="condiciones_salud[]" value="obesidad" {{ is_array(old('condiciones_salud', $mascota->condiciones_salud ?? [])) && in_array('obesidad', old('condiciones_salud', $mascota->condiciones_salud ?? [])) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="obesidad">Obesidad</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="renal" name="condiciones_salud[]" value="renal" {{ is_array(old('condiciones_salud', $mascota->condiciones_salud ?? [])) && in_array('renal', old('condiciones_salud', $mascota->condiciones_salud ?? [])) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="renal">Renal</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="artrosis" name="condiciones_salud[]" value="artrosis" {{ is_array(old('condiciones_salud', $mascota->condiciones_salud ?? [])) && in_array('artrosis', old('condiciones_salud', $mascota->condiciones_salud ?? [])) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="artrosis">Artrosis</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="diabetes" name="condiciones_salud[]" value="diabetes" {{ is_array(old('condiciones_salud', $mascota->condiciones_salud ?? [])) && in_array('diabetes', old('condiciones_salud', $mascota->condiciones_salud ?? [])) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="diabetes">Diabetes</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="alergia" name="condiciones_salud[]" value="alergia" {{ is_array(old('condiciones_salud', $mascota->condiciones_salud ?? [])) && in_array('alergia', old('condiciones_salud', $mascota->condiciones_salud ?? [])) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="alergia">Alergia / Intolerancia</label>
                                </div>
                                <select multiple class="form-select mt-2" id="alimentosAlergia" name="alimentos_alergia[]" style="display: {{ in_array('alergia', old('condiciones_salud', $mascota->condiciones_salud ?? [])) ? 'block' : 'none' }};">
                                    <option value="pollo_pechuga" {{ is_array(old('alimentos_alergia', $mascota->alimentos_alergia ?? [])) && in_array('pollo_pechuga', old('alimentos_alergia', $mascota->alimentos_alergia ?? [])) ? 'selected' : '' }}>Pechuga de Pollo</option>
                                    <option value="pollo_muslo" {{ is_array(old('alimentos_alergia', $mascota->alimentos_alergia ?? [])) && in_array('pollo_muslo', old('alimentos_alergia', $mascota->alimentos_alergia ?? [])) ? 'selected' : '' }}>Muslo de Pollo</option>
                                    <option value="pavo" {{ is_array(old('alimentos_alergia', $mascota->alimentos_alergia ?? [])) && in_array('pavo', old('alimentos_alergia', $mascota->alimentos_alergia ?? [])) ? 'selected' : '' }}>Pavo</option>
                                    <option value="ternera" {{ is_array(old('alimentos_alergia', $mascota->alimentos_alergia ?? [])) && in_array('ternera', old('alimentos_alergia', $mascota->alimentos_alergia ?? [])) ? 'selected' : '' }}>Ternera</option>
                                    <option value="cordero" {{ is_array(old('alimentos_alergia', $mascota->alimentos_alergia ?? [])) && in_array('cordero', old('alimentos_alergia', $mascota->alimentos_alergia ?? [])) ? 'selected' : '' }}>Cordero</option>
                                    <option value="conejo" {{ is_array(old('alimentos_alergia', $mascota->alimentos_alergia ?? [])) && in_array('conejo', old('alimentos_alergia', $mascota->alimentos_alergia ?? [])) ? 'selected' : '' }}>Conejo</option>
                                    <option value="sardina" {{ is_array(old('alimentos_alergia', $mascota->alimentos_alergia ?? [])) && in_array('sardina', old('alimentos_alergia', $mascota->alimentos_alergia ?? [])) ? 'selected' : '' }}>Sardina</option>
                                    <option value="caballa" {{ is_array(old('alimentos_alergia', $mascota->alimentos_alergia ?? [])) && in_array('caballa', old('alimentos_alergia', $mascota->alimentos_alergia ?? [])) ? 'selected' : '' }}>Caballa</option>
                                    <option value="salmon" {{ is_array(old('alimentos_alergia', $mascota->alimentos_alergia ?? [])) && in_array('salmon', old('alimentos_alergia', $mascota->alimentos_alergia ?? [])) ? 'selected' : '' }}>Salmón</option>
                                    <option value="higado_pollo" {{ is_array(old('alimentos_alergia', $mascota->alimentos_alergia ?? [])) && in_array('higado_pollo', old('alimentos_alergia', $mascota->alimentos_alergia ?? [])) ? 'selected' : '' }}>Hígado de Pollo</option>
                                    <option value="higado_res" {{ is_array(old('alimentos_alergia', $mascota->alimentos_alergia ?? [])) && in_array('higado_res', old('alimentos_alergia', $mascota->alimentos_alergia ?? [])) ? 'selected' : '' }}>Hígado de Res</option>
                                    <option value="rinon_res" {{ is_array(old('alimentos_alergia', $mascota->alimentos_alergia ?? [])) && in_array('rinon_res', old('alimentos_alergia', $mascota->alimentos_alergia ?? [])) ? 'selected' : '' }}>Riñón de Res</option>
                                    <option value="corazon_pollo" {{ is_array(old('alimentos_alergia', $mascota->alimentos_alergia ?? [])) && in_array('corazon_pollo', old('alimentos_alergia', $mascota->alimentos_alergia ?? [])) ? 'selected' : '' }}>Corazón de Pollo</option>
                                    <option value="mollejas" {{ is_array(old('alimentos_alergia', $mascota->alimentos_alergia ?? [])) && in_array('mollejas', old('alimentos_alergia', $mascota->alimentos_alergia ?? [])) ? 'selected' : '' }}>Mollejas</option>
                                    <option value="tripa_verde" {{ is_array(old('alimentos_alergia', $mascota->alimentos_alergia ?? [])) && in_array('tripa_verde', old('alimentos_alergia', $mascota->alimentos_alergia ?? [])) ? 'selected' : '' }}>Tripa Verde</option>
                                </select>
                                @error('condiciones_salud')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                @error('alimentos_alergia')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button id="calcularBtn" type="submit" style="width: 100%; background-color: #fb4d17; height: 50px;">Calcular Dieta</button>
                        </div>
                    </div>
                </form>
                <div id="resultados" class="mt-5"></div>
                <button id="descargarPDF" class="btn btn-success mt-3" style="display: none;">Descargar PDF</button>
            </article>
        </section>
    </div>
@endsection
@push('scripts')
    @vite(['resources/js/calculadora.js'])
@endpush
