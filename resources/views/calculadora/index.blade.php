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
                <form id="formularioDieta" action="{{ route('calculadora.store') }}" method="POST" class="form-calculadora p-4">
                    @csrf
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre del Perro</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ej. Max">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="peso" class="form-label">Peso (kg)</label>
                                <input type="number" class="form-control" id="peso" name="peso" min="0.1" step="0.1" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="categoria_edad" class="form-label">Edad</label>
                                <select class="form-select" id="categoria_edad" name="categoria_edad" required>
                                    <option value="">Selecciona una opción</option>
                                    <option value="cachorro_menor_4">Cachorro (<4 meses)</option>
                                    <option value="cachorro_mayor_4">Cachorro (>4 meses)</option>
                                    <option value="adulto">Adulto</option>
                                    <option value="senior">Senior</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="esterilizado" class="form-label">¿Esterilizado?</label>
                                <select class="form-select" id="esterilizado" name="esterilizado" required>
                                    <option value="">Selecciona una opción</option>
                                    <option value="1">Sí</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="nivel_actividad" class="form-label">Nivel de Actividad</label>
                                <select class="form-select" id="nivel_actividad" name="nivel_actividad" required>
                                    <option value="">Selecciona una opción</option>
                                    <option value="baja">Baja</option>
                                    <option value="moderada">Moderada</option>
                                    <option value="alta">Alta</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="tipo_dieta" class="form-label">Tipo de Dieta</label>
                                <select class="form-select" id="tipo_dieta" name="tipo_dieta" required>
                                    <option value="">Selecciona una opción</option>
                                    <option value="barf">BARF</option>
                                    <option value="cocida">Cocida</option>
                                    <option value="mixta_50">Mixta (50% Pienso / 50% Natural)</option>
                                    <option value="mixta_70">Mixta (70% Pienso / 30% Natural)</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Condiciones de Salud</label><br>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="obesidad" name="condiciones_salud[]" value="obesidad">
                                    <label class="form-check-label" for="obesidad">Obesidad</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="renal" name="condiciones_salud[]" value="renal">
                                    <label class="form-check-label" for="renal">Renal</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="artrosis" name="condiciones_salud[]" value="artrosis">
                                    <label class="form-check-label" for="artrosis">Artrosis</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="diabetes" name="condiciones_salud[]" value="diabetes">
                                    <label class="form-check-label" for="diabetes">Diabetes</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="alergia" name="condiciones_salud[]" value="alergia">
                                    <label class="form-check-label" for="alergia">Alergia / Intolerancia</label>
                                </div>
                                <select multiple class="form-select mt-2" id="alimentos_alergia" name="alimentos_alergia[]" style="display: none;">
                                    <option value="pollo_pechuga">Pechuga de Pollo</option>
                                    <option value="pollo_muslo">Muslo de Pollo</option>
                                    <option value="pavo">Pavo</option>
                                    <option value="ternera">Ternera</option>
                                    <option value="cordero">Cordero</option>
                                    <option value="conejo">Conejo</option>
                                    <option value="sardina">Sardina</option>
                                    <option value="caballa">Caballa</option>
                                    <option value="salmon">Salmón</option>
                                    <option value="higado_pollo">Hígado de Pollo</option>
                                    <option value="higado_res">Hígado de Res</option>
                                    <option value="rinon_res">Riñón de Res</option>
                                    <option value="corazon_pollo">Corazón de Pollo</option>
                                    <option value="mollejas">Mollejas</option>
                                    <option value="tripa_verde">Tripa Verde</option>
                                </select>
                            </div>
                        </div>
                        <input type="hidden" name="menu_json" id="menu_json" value="{}">
                        <div class="col-md-12">
                            <button id="calcularBtn" type="submit" style="width: 100%; background-color: #fb4d17; height: 50px; border-radius: 25px;">Calcular Dieta</button>
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
