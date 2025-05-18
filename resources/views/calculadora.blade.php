@extends('layouts.app')

@section('content')
    <article class="card form-card">
        <div class="form-container" style="width: 1500px;">
            <h2 class="result-title">Calculadora de Dieta</h2>
            <form id="formularioDieta" action="{{ route('calculadora.store') }}" method="POST">
                @csrf
                <label for="mascota_id">Mascota (opcional):</label>
                <select name="mascota_id" id="mascota_id">
                    <option value="">Seleccionar mascota</option>
                    @foreach(auth()->user()->mascotas as $mascota)
                        <option value="{{ $mascota->id }}">{{ $mascota->nombre }}</option>
                    @endforeach
                </select>
                <label for="nombre">Nombre del perro:</label>
                <input type="text" name="nombre" id="nombre" required>
                <label for="peso">Peso (kg):</label>
                <input type="number" name="peso" id="peso" step="0.1" required>
                <label for="categoria_edad">Edad:</label>
                <select name="categoria_edad" id="categoria_edad" required>
                    <option value="cachorro_menor_4">Cachorro (<4 meses)</option>
                    <option value="cachorro_mayor_4">Cachorro (>4 meses)</option>
                    <option value="adulto">Adulto</option>
                    <option value="senior">Senior</option>
                </select>
                <label for="esterilizado">Esterilizado:</label>
                <select name="esterilizado" id="esterilizado" required>
                    <option value="1">Sí</option>
                    <option value="0">No</option>
                </select>
                <label for="nivel_actividad">Nivel de actividad:</label>
                <select name="nivel_actividad" id="nivel_actividad" required>
                    <option value="baja">Baja</option>
                    <option value="moderada">Moderada</option>
                    <option value="alta">Alta</option>
                </select>
                <label for="tipo_dieta">Tipo de dieta:</label>
                <select name="tipo_dieta" id="tipo_dieta" required>
                    <option value="barf">BARF</option>
                    <option value="cocida">Cocida</option>
                    <option value="mixta_50">Mixta 50%</option>
                    <option value="mixta_70">Mixta 70%</option>
                </select>
                <label for="condiciones_salud">Condiciones de salud:</label>
                <select name="condiciones_salud[]" id="condiciones_salud" multiple>
                    <option value="obesidad">Obesidad</option>
                    <option value="renal">Renal</option>
                    <option value="artrosis">Artrosis</option>
                    <option value="diabetes">Diabetes</option>
                    <option value="alergia">Alergia</option>
                </select>
                <label for="alergia">
                    <input type="checkbox" id="alergia"> ¿Alergias alimentarias?
                </label>
                <select name="alimentos_alergia[]" id="alimentos_alergia" multiple style="display: none;">
                    <option value="pollo_pechuga">Pechuga de pollo</option>
                    <option value="pollo_muslo">Muslo de pollo</option>
                    <option value="pavo">Pavo</option>
                    <option value="ternera">Ternera</option>
                    <option value="cordero">Cordero</option>
                    <option value="conejo">Conejo</option>
                    <option value="sardina">Sardina</option>
                    <option value="caballa">Caballa</option>
                    <option value="salmon">Salmón</option>
                    <option value="higado_pollo">Hígado de pollo</option>
                    <option value="higado_res">Hígado de res</option>
                    <option value="rinon_res">Riñón de res</option>
                    <option value="corazon_pollo">Corazón de pollo</option>
                    <option value="mollejas">Mollejas</option>
                    <option value="tripa_verde">Tripa verde</option>
                </select>
                <input type="hidden" name="menu_json" id="menu_json">
                <button type="submit">Generar Dieta</button>
            </form>
        </div>
    </article>
    <div id="resultados"></div>
    <div class="button-group">
        <button id="descargarPDF" style="display: none;" class="download-pdf">Descargar PDF</button>
        <a href="/planes" id="contratarPlan" style="display: none;" class="plan-button">Contratar un plan</a>
    </div>
@endsection
