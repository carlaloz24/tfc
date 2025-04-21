@extends('layouts.app')
@section('title', 'Inicio')
@section('content')
    <div class="main-container">
        <div class="second-background"></div>
        <div class="home-content">
            <div class="row align-items-center" style="min-height: 80vh;">
                <div class="col-md-6">
                    <div class="home-text">
                        <h1 class="home-title">Tu Dieta Personalizada</h1>
                        <p class="home-description">Descubre planes de alimentación adaptados a tus necesidades y objetivos.</p>
                        <div class="home-actions">
                            <a href="{{ route('calculadora') }}" class="btn-home-primary">
                                Generar dieta gratis
                                <i class="bi bi-arrow-right ms-2"></i>
                            </a>
                            <a href="{{ route('planes') }}" class="btn-home-secondary">Ver planes</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <img src="{{ asset('images/dieta-placeholder.png') }}" alt="Dieta personalizada" class="home-image">
                </div>
            </div>
        </div>
    </div>

    <style>

    </style>
@endsection
