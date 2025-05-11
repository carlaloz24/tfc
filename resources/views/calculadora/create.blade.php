@extends('layouts.app')
@section('title', 'Calculadora')
@section('content')
    <div class="main-container">
        <div class="second-background"></div>
        <header class="hero">
            <h1>Calculadora de Dietas Caninas</h1>
            <p style="line-height: 24px">Personaliza la dieta ideal para {{ $mascota->nombre }}</p>
        </header>
        <section class="plans">
            <article class="card" style="max-width: 1000px; width: 100%">
                <form id="formularioDieta" action="{{ route('calculadora.store') }}" method="POST" class="form-calculadora p-4">
                    @csrf
                    <input type="hidden" name="mascota_id" value="{{ $mascota->id }}">
                    <input type="hidden" name="menu_json" id="menu_json" value="{}">
                    <input type="hidden" name="nombre" value="{{ $mascota->nombre }}">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="peso" class="form-label">Peso (kg)</label>
                                <input type="number" class="form-control" id="peso" name="peso" min="1" step="0.1" value="{{ $mascota->peso }}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="categoria_edad" class="form-label">Edad</label>
                                <select class="form-select" id="categoria_edad" name="categoria_edad" required>
                                    <option value="cachorro_menor_4" {{ $mascota->categoria_edad == 'cachorro_menor_4' ? 'selected' : '' }}>Cachorro (<4 meses)</option>
                                    <option value="cachorro_mayor_4" {{ $mascota->categoria_edad == 'cachorro_mayor_4' ? 'selected' : '' }}>Cachorro (>4 meses)</option>
                                    <option value="adulto" {{ $mascota->categoria_edad == 'adulto' ? 'selected' : '' }}>Adulto</option>
                                    <option value="senior" {{ $mascota->categoria_edad == 'senior' ? 'selected' : '' }}>Senior</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="esterilizado" class="form-label">¿Esterilizado?</label>
                                <select class="form-select" id="esterilizado" name="esterilizado" required>
                                    <option value="1" {{ $mascota->esterilizado ? 'selected' : '' }}>Sí</option>
                                    <option value="0" {{ $mascota->esterilizado ? '' : 'selected' }}>No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="nivel_actividad" class="form-label">Nivel de Actividad</label>
                                <select class="form-select" id="nivel_actividad" name="nivel_actividad" required>
                                    <option value="baja" {{ $mascota->nivel_actividad == 'baja' ? 'selected' : '' }}>Baja</option>
                                    <option value="moderada" {{ $mascota->nivel_actividad == 'moderada' ? 'selected' : '' }}>Moderada</option>
                                    <option value="alta" {{ $mascota->nivel_actividad == 'alta' ? 'selected' : '' }}>Alta</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="tipo_dieta" class="form-label">Tipo de Dieta</label>
                                <select class="form-select" id="tipo_dieta" name="tipo_dieta" required>
                                    <option value="barf" {{ $mascota->tipo_dieta_preferida == 'barf' ? 'selected' : '' }}>BARF</option>
                                    <option value="cocida" {{ $mascota->tipo_dieta_preferida == 'cocida' ? 'selected' : '' }}>Cocida</option>
                                    <option value="mixta_50" {{ $mascota->tipo_dieta_preferida == 'mixta_50' ? 'selected' : '' }}>Mixta (50% Pienso / 50% Natural)</option>
                                    <option value="mixta_70" {{ $mascota->tipo_dieta_preferida == 'mixta_70' ? 'selected' : '' }}>Mixta (70% Pienso / 30% Natural)</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Condiciones de Salud</label><br>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="obesidad" name="condiciones_salud[]" value="obesidad" {{ in_array('obesidad', $mascota->condiciones_salud ?? []) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="obesidad">Obesidad</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="renal" name="condiciones_salud[]" value="renal" {{ in_array('renal', $mascota->condiciones_salud ?? []) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="renal">Renal</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="artrosis" name="condiciones_salud[]" value="artrosis" {{ in_array('artrosis', $mascota->condiciones_salud ?? []) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="artrosis">Artrosis</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="diabetes" name="condiciones_salud[]" value="diabetes" {{ in_array('diabetes', $mascota->condiciones_salud ?? []) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="diabetes">Diabetes</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="alergia" name="condiciones_salud[]" value="alergia" {{ in_array('alergia', $mascota->condiciones_salud ?? []) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="alergia">Alergia / Intolerancia</label>
                                </div>
                                <select multiple class="form-select mt-2" id="alimentos_alergia" name="alimentos_alergia[]" style="display: {{ in_array('alergia', $mascota->condiciones_salud ?? []) ? 'block' : 'none' }};">
                                    <option value="pollo_pechuga" {{ in_array('pollo_pechuga', $mascota->alimentos_alergia ?? []) ? 'selected' : '' }}>Pechuga de Pollo</option>
                                    <option value="pollo_muslo" {{ in_array('pollo_muslo', $mascota->alimentos_alergia ?? []) ? 'selected' : '' }}>Muslo de Pollo</option>
                                    <option value="pavo" {{ in_array('pavo', $mascota->alimentos_alergia ?? []) ? 'selected' : '' }}>Pavo</option>
                                    <option value="ternera" {{ in_array('ternera', $mascota->alimentos_alergia ?? []) ? 'selected' : '' }}>Ternera</option>
                                    <option value="cordero" {{ in_array('cordero', $mascota->alimentos_alergia ?? []) ? 'selected' : '' }}>Cordero</option>
                                    <option value="conejo" {{ in_array('conejo', $mascota->alimentos_alergia ?? []) ? 'selected' : '' }}>Conejo</option>
                                    <option value="sardina" {{ in_array('sardina', $mascota->alimentos_alergia ?? []) ? 'selected' : '' }}>Sardina</option>
                                    <option value="caballa" {{ in_array('caballa', $mascota->alimentos_alergia ?? []) ? 'selected' : '' }}>Caballa</option>
                                    <option value="salmon" {{ in_array('salmon', $mascota->alimentos_alergia ?? []) ? 'selected' : '' }}>Salmón</option>
                                    <option value="higado_pollo" {{ in_array('higado_pollo', $mascota->alimentos_alergia ?? []) ? 'selected' : '' }}>Hígado de Pollo</option>
                                    <option value="higado_res" {{ in_array('higado_res', $mascota->alimentos_alergia ?? []) ? 'selected' : '' }}>Hígado de Res</option>
                                    <option value="rinon_res" {{ in_array('rinon_res', $mascota->alimentos_alergia ?? []) ? 'selected' : '' }}>Riñón de Res</option>
                                    <option value="corazon_pollo" {{ in_array('corazon_pollo', $mascota->alimentos_alergia ?? []) ? 'selected' : '' }}>Corazón de Pollo</option>
                                    <option value="mollejas" {{ in_array('mollejas', $mascota->alimentos_alergia ?? []) ? 'selected' : '' }}>Mollejas</option>
                                    <option value="tripa_verde" {{ in_array('tripa_verde', $mascota->alimentos_alergia ?? []) ? 'selected' : '' }}>Tripa Verde</option>
                                </select>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    @vite(['resources/js/calculadora.js'])
@endpush
