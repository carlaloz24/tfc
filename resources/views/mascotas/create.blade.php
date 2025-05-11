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
                <div class="mb-3">
                    <label class="plan-form-label">Condiciones de Salud</label><br>
                    <div class="form-check">
                        <input type="checkbox" name="condiciones_salud[]" id="obesidad" value="obesidad" {{ in_array('obesidad', old('condiciones_salud', [])) ? 'checked' : '' }}>
                        <label for="obesidad">Obesidad</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="condiciones_salud[]" id="renal" value="renal" {{ in_array('renal', old('condiciones_salud', [])) ? 'checked' : '' }}>
                        <label for="renal">Renal</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="condiciones_salud[]" id="artrosis" value="artrosis" {{ in_array('artrosis', old('condiciones_salud', [])) ? 'checked' : '' }}>
                        <label for="artrosis">Artrosis</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="condiciones_salud[]" id="diabetes" value="diabetes" {{ in_array('diabetes', old('condiciones_salud', [])) ? 'checked' : '' }}>
                        <label for="diabetes">Diabetes</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="condiciones_salud[]" id="alergia" value="alergia" {{ in_array('alergia', old('condiciones_salud', [])) ? 'checked' : '' }}>
                        <label for="alergia">Alergia / Intolerancia</label>
                    </div>
                    <select multiple name="alimentos_alergia[]" id="alimentos_alergia" class="plan-form-select mt-2" style="display: {{ in_array('alergia', old('condiciones_salud', [])) ? 'block' : 'none' }};">
                        <option value="pollo_pechuga" {{ in_array('pollo_pechuga', old('alimentos_alergia', [])) ? 'selected' : '' }}>Pechuga de Pollo</option>
                        <option value="pollo_muslo" {{ in_array('pollo_muslo', old('alimentos_alergia', [])) ? 'selected' : '' }}>Muslo de Pollo</option>
                        <option value="pavo" {{ in_array('pavo', old('alimentos_alergia', [])) ? 'selected' : '' }}>Pavo</option>
                        <option value="ternera" {{ in_array('ternera', old('alimentos_alergia', [])) ? 'selected' : '' }}>Ternera</option>
                        <option value="cordero" {{ in_array('cordero', old('alimentos_alergia', [])) ? 'selected' : '' }}>Cordero</option>
                        <option value="conejo" {{ in_array('conejo', old('alimentos_alergia', [])) ? 'selected' : '' }}>Conejo</option>
                        <option value="sardina" {{ in_array('sardina', old('alimentos_alergia', [])) ? 'selected' : '' }}>Sardina</option>
                        <option value="caballa" {{ in_array('caballa', old('alimentos_alergia', [])) ? 'selected' : '' }}>Caballa</option>
                        <option value="salmon" {{ in_array('salmon', old('alimentos_alergia', [])) ? 'selected' : '' }}>Salmón</option>
                        <option value="higado_pollo" {{ in_array('higado_pollo', old('alimentos_alergia', [])) ? 'selected' : '' }}>Hígado de Pollo</option>
                        <option value="higado_res" {{ in_array('higado_res', old('alimentos_alergia', [])) ? 'selected' : '' }}>Hígado de Res</option>
                        <option value="rinon_res" {{ in_array('rinon_res', old('alimentos_alergia', [])) ? 'selected' : '' }}>Riñón de Res</option>
                        <option value="corazon_pollo" {{ in_array('corazon_pollo', old('alimentos_alergia', [])) ? 'selected' : '' }}>Corazón de Pollo</option>
                        <option value="mollejas" {{ in_array('mollejas', old('alimentos_alergia', [])) ? 'selected' : '' }}>Mollejas</option>
                        <option value="tripa_verde" {{ in_array('tripa_verde', old('alimentos_alergia', [])) ? 'selected' : '' }}>Tripa Verde</option>
                    </select>
                    @error('condiciones_salud')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                    @error('alimentos_alergia')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="profile-btn-primary">Añadir Mascota</button>
            </form>
        </div>
    </div>
    <script>
        document.getElementById('alergia').addEventListener('change', function() {
            document.getElementById('alimentos_alergia').style.display = this.checked ? 'block' : 'none';
        });
    </script>
@endsection
