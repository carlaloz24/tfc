@extends('layouts.app')
@section('title', 'Nuestros Planes')
@section('content')
    <div class="main-container">
        <div class="second-background"></div>
        <header class="hero">
            <h1>Nuestros Planes</h1>
            <p style="line-height: 24px">Elige el plan perfecto para la dieta de tu mascota</p>
        </header>
        <section class="plans">
            <article class="card" style="max-width: 1000px; width: 100%">
                <div class="p-4">
                    <h2>Planes Disponibles</h2>
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="plan-option">
                                <h3>Básico</h3>
                                <p>Dieta personalizada con entregas mensuales o anuales.</p>
                                <a href="{{ route('login') }}" class="btn" style="background-color: #fb4d17; color: white;">Contratar</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="plan-option">
                                <h3>Premium</h3>
                                <p>Incluye consultas nutricionales y seguimiento.</p>
                                <a href="{{ route('login') }}" class="btn" style="background-color: #fb4d17; color: white;">Contratar</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="plan-option">
                                <h3>Personalizado</h3>
                                <p>Plan a medida con ingredientes específicos.</p>
                                <a href="{{ route('login') }}" class="btn" style="background-color: #fb4d17; color: white;">Contratar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </section>
    </div>
@endsection
