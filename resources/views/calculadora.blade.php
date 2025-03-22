@extends('layouts.app')
@section('title', 'Calculadora')
@section('content')
    <div class="container mt-5">
        <h1 class="text-center">Calculadora de Dietas Caninas</h1>
        <form id="formularioDieta" class="mt-4">
            <div class="mb-3">
                <label for="nombrePerro" class="form-label">Nombre del Perro:</label>
                <input type="text" class="form-control" id="nombrePerro" required>
            </div>
            <div class="mb-3">
                <label for="peso" class="form-label">Peso (kg):</label>
                <input type="number" class="form-control" id="peso" min="1" step="0.1" required>
            </div>
            <div class="mb-3">
                <label for="edad" class="form-label">Edad:</label>
                <select class="form-select" id="edad" required>
                    <option value="cachorro_menor_4">Cachorro (<4 meses)</option>
                    <option value="cachorro_mayor_4">Cachorro (>4 meses)</option>
                    <option value="adulto">Adulto</option>
                    <option value="senior">Senior</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="esterilizado" class="form-label">Esterilizado:</label>
                <select class="form-select" id="esterilizado" required>
                    <option value="no">No</option>
                    <option value="si">Sí</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="nivelActividad" class="form-label">Nivel de Actividad:</label>
                <select class="form-select" id="nivelActividad" required>
                    <option value="baja">Baja</option>
                    <option value="moderada">Moderada</option>
                    <option value="alta">Alta</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="tipoDieta" class="form-label">Tipo de Dieta:</label>
                <select class="form-select" id="tipoDieta" required>
                    <option value="barf">BARF</option>
                    <option value="cocida">Cocida</option>
                    <option value="mixta_50">Mixta (50% Pienso / 50% Natural)</option>
                    <option value="mixta_70">Mixta (70% Pienso / 30% Natural)</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Condiciones de Salud:</label><br>
                <input type="checkbox" id="obesidad" name="condicionesSalud" value="obesidad"> Obesidad<br>
                <input type="checkbox" id="renal" name="condicionesSalud" value="renal"> Renal<br>
                <input type="checkbox" id="artrosis" name="condicionesSalud" value="artrosis"> Artrosis<br>
                <input type="checkbox" id="diabetes" name="condicionesSalud" value="diabetes"> Diabetes<br>
                <input type="checkbox" id="alergia" name="condicionesSalud" value="alergia"> Alergia/Intolerancia
                <select multiple class="form-select mt-2" id="alimentosAlergia" style="display: none;">
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
            <button id="calcularBtn" class="btn btn-primary" style="width: 20%">Calcular Dieta</button>
        </form>

        <div id="resultados" class="mt-5"></div>
        <button id="descargarPDF" class="btn btn-success mt-3" style="display: none;">Descargar PDF</button>
    </div>
@endsection

@push('scripts')
    @vite(['resources/js/calculadora.js'])
@endpush
