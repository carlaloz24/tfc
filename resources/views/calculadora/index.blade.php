@extends('layouts.app')
@section('title', 'Calculadora de Dieta')
@section('content')
    <div class="profile-container">
        <div class="profile-block">
            <div class="profile-panel">
                <h2 class="profile-title">Calculadora de Dieta para {{ $mascota->nombre }}</h2>
                <form id="calculadora-form" action="{{ route('calculadora.store') }}" method="POST" class="profile-data-form">
                    @csrf
                    <input type="hidden" name="mascota_id" value="{{ $mascota->id }}">
                    <input type="hidden" name="menu_json" id="menu_json" value='{ "alimentos": ["pollo", "zanahoria"] }'>
                    <div class="row g-3">
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
                        <div class="col-md-6">
                            <div class="profile-form-group">
                                <label for="peso" class="profile-form-label">Peso (kg)</label>
                                <input type="number" id="peso" name="peso" class="profile-form-input" value="{{ $mascota->peso }}" required readonly>
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
