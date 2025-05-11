@extends('layouts.app')
@section('title', 'Generar Dieta')
@section('content')
    <div class="profile-container">
        <div class="profile-block">
            <div class="profile-panel">
                <h2 class="profile-title">Generar Dieta para {{ $mascota->nombre }}</h2>
                <form action="{{ route('calculadora.store') }}" method="POST" class="profile-data-form">
                    @csrf
                    <input type="hidden" name="mascota_id" value="{{ $mascota->id }}">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="profile-form-group">
                                <label for="calorias" class="profile-form-label">Calorías (kcal/día)</label>
                                <input type="number" name="calorias" id="calorias" class="profile-form-input" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="profile-form-group">
                                <label for="tipo_dieta" class="profile-form-label">Tipo de Dieta</label>
                                <select name="tipo_dieta" id="tipo_dieta" class="profile-form-select" required>
                                    <option value="barf">BARF</option>
                                    <option value="cocida">Cocida</option>
                                    <option value="mixta_50">Mixta 50%</option>
                                    <option value="mixta_70">Mixta 70%</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="profile-form-group">
                                <label for="menu_json" class="profile-form-label">Menú (JSON)</label>
                                <textarea name="menu_json" id="menu_json" class="profile-form-input" required>{ "alimentos": ["pollo", "zanahoria"] }</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="profile-form-actions">
                        <button type="submit" class="profile-btn-primary">Generar Dieta</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
