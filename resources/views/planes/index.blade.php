@extends('layouts.app')
@section('title', 'Calculadora de Dietas')
@section('content')
    <div class="main-container">
        <div class="second-background"></div>
        <header class="hero">
            <h1>Calculadora de Dietas Caninas</h1>
            <p style="line-height: 24px">Crea una dieta personalizada para tu perro</p>
        </header>
        <section class="plans">
            <article class="card" style="max-width: 1000px; width: 100%">
                <form id="formularioDieta" action="{{ route('calculadora.storeForCalculator') }}" method="POST" class="form-calculadora p-4">
                    @csrf
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="mascota_id" class="form-label">Mascota (opcional)</label>
                                <select class="form-select" id="mascota_id" name="mascota_id">
                                    <option value="">Sin mascota (dieta genérica)</option>
                                    @foreach ($mascotas as $mascota)
                                        <option value="{{ $mascota->id }}" {{ isset($mascotaSeleccionada) && $mascotaSeleccionada->id == $mascota->id ? 'selected' : '' }}>
                                            {{ $mascota->nombre }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('mascota_id')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre del Perro</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $mascotaSeleccionada->nombre ?? 'Perro' }}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="peso" class="form-label">Peso (kg)</label>
                                <input type="number" class="form-control" id="peso" name="peso" min="0.1" step="0.1" value="{{ $mascotaSeleccionada->peso ?? '' }}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="categoria_edad" class="form-label">Edad</label>
                                <select class="form-select" id="categoria_edad" name="categoria_edad" required>
                                    <option value="">Selecciona una opción</option>
                                    <option value="cachorro_menor_4" {{ isset($mascotaSeleccionada) && $mascotaSeleccionada->categoria_edad == 'cachorro_menor_4' ? 'selected' : '' }}>Cachorro (<4 meses)</option>
                                    <option value="cachorro_mayor_4" {{ isset($mascotaSeleccionada) && $mascotaSeleccionada->categoria_edad == 'cachorro_mayor_4' ? 'selected' : '' }}>Cachorro (>4 meses)</option>
                                    <option value="adulto" {{ isset($mascotaSeleccionada) && $mascotaSeleccionada->categoria_edad == 'adulto' ? 'selected' : '' }}>Adulto</option>
                                    <option value="senior" {{ isset($mascotaSeleccionada) && $mascotaSeleccionada->categoria_edad == 'senior' ? 'selected' : '' }}>Senior</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="esterilizado" class="form-label">¿Esterilizado?</label>
                                <select class="form-select" id="esterilizado" name="esterilizado" required>
                                    <option value="">Selecciona una opción</option>
                                    <option value="1" {{ isset($mascotaSeleccionada) && $mascotaSeleccionada->esterilizado ? 'selected' : '' }}>Sí</option>
                                    <option value="0" {{ isset($mascotaSeleccionada) && !$mascotaSeleccionada->esterilizado ? 'selected' : '' }}>No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="nivel_actividad" class="form-label">Nivel de Actividad</label>
                                <select class="form-select" id="nivel_actividad" name="nivel_actividad" required>
                                    <option value="">Selecciona una opción</option>
                                    <option value="baja" {{ isset($mascotaSeleccionada) && $mascotaSeleccionada->nivel_actividad == 'baja' ? 'selected' : '' }}>Baja</option>
                                    <option value="moderada" {{ isset($mascotaSeleccionada) && $mascotaSeleccionada->nivel_actividad == 'moderada' ? 'selected' : '' }}>Moderada</option>
                                    <option value="alta" {{ isset($mascotaSeleccionada) && $mascotaSeleccionada->nivel_actividad == 'alta' ? 'selected' : '' }}>Alta</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="tipo_dieta" class="form-label">Tipo de Dieta</label>
                                <select class="form-select" id="tipo_dieta" name="tipo_dieta" required>
                                    <option value="">Selecciona una opción</option>
                                    <option value="barf" {{ isset($mascotaSeleccionada) && $mascotaSeleccionada->tipo_dieta_preferida == 'barf' ? 'selected' : '' }}>BARF</option>
                                    <option value="cocida" {{ isset($mascotaSeleccionada) && $mascotaSeleccionada->tipo_dieta_preferida == 'cocida' ? 'selected' : '' }}>Cocida</option>
                                    <option value="mixta_50" {{ isset($mascotaSeleccionada) && $mascotaSeleccionada->tipo_dieta_preferida == 'mixta_50' ? 'selected' : '' }}>Mixta (50% Pienso / 50% Natural)</option>
                                    <option value="mixta_70" {{ isset($mascotaSeleccionada) && $mascotaSeleccionada->tipo_dieta_preferida == 'mixta_70' ? 'selected' : '' }}>Mixta (70% Pienso / 30% Natural)</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Condiciones de Salud</label><br>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="obesidad" name="condiciones_salud[]" value="obesidad" {{ isset($mascotaSeleccionada) && in_array('obesidad', $mascotaSeleccionada->condiciones_salud ?? []) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="obesidad">Obesidad</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="renal" name="condiciones_salud[]" value="renal" {{ isset($mascotaSeleccionada) && in_array('renal', $mascotaSeleccionada->condiciones_salud ?? []) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="renal">Renal</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="artrosis" name="condiciones_salud[]" value="artrosis" {{ isset($mascotaSeleccionada) && in_array('artrosis', $mascotaSeleccionada->condiciones_salud ?? []) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="artrosis">Artrosis</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="diabetes" name="condiciones_salud[]" value="diabetes" {{ isset($mascotaSeleccionada) && in_array('diabetes', $mascotaSeleccionada->condiciones_salud ?? []) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="diabetes">Diabetes</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="alergia" name="condiciones_salud[]" value="alergia" {{ isset($mascotaSeleccionada) && in_array('alergia', $mascotaSeleccionada->condiciones_salud ?? []) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="alergia">Alergia / Intolerancia</label>
                                </div>
                                <select multiple class="form-select mt-2" id="alimentos_alergia" name="alimentos_alergia[]" style="display: {{ isset($mascotaSeleccionada) && in_array('alergia', $mascotaSeleccionada->condiciones_salud ?? []) ? 'block' : 'none' }};">
                                    @foreach ([
                                        'pollo_pechuga' => 'Pechuga de Pollo',
                                        'pollo_muslo' => 'Muslo de Pollo',
                                        'pavo' => 'Pavo',
                                        'ternera' => 'Ternera',
                                        'cordero' => 'Cordero',
                                        'conejo' => 'Conejo',
                                        'sardina' => 'Sardina',
                                        'caballa' => 'Caballa',
                                        'salmon' => 'Salmón',
                                        'higado_pollo' => 'Hígado de Pollo',
                                        'higado_res' => 'Hígado de Res',
                                        'rinon_res' => 'Riñón de Res',
                                        'corazon_pollo' => 'Corazón de Pollo',
                                        'mollejas' => 'Mollejas',
                                        'tripa_verde' => 'Tripa Verde'
                                    ] as $value => $label)
                                        <option value="{{ $value }}" {{ isset($mascotaSeleccionada) && in_array($value, $mascotaSeleccionada->alimentos_alergia ?? []) ? 'selected' : '' }}>{{ $label }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <input type="hidden" name="menu_json" id="menu_json" value="{}">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success" style="width: 100%; background-color: #083630; height: 50px;">Calcular Dieta</button>
                        </div>
                    </div>
                </form>
                <div id="resultados" class="mt-5"></div>
                <button id="descargarPDF" class="btn btn-success mt-3" style="display: none; width: 100%; background-color: #083630; height: 50px;">Descargar PDF</button>
            </article>
        </section>
    </div>
@endsection
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    @vite(['resources/js/calculadora.js'])
@endpush
