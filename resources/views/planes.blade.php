@extends('layouts.app')
@section('title', 'Planes')
@section('content')


    <header class="hero">
        <link href="css/app.css" rel="stylesheet" />
        <h1>Lorem ipsum dolor sit consectetur</h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
            consequat mi vel turpis luctus aliquam.
        </p>
    </header>

    <section class="plans">
        <article class="card">
            <h2>Plan Básico</h2>
            <p class="price">Desde <span>50€ /mes</span></p>
            <p>Ideal para empezar con una dieta sencilla y nutritiva</p>
            <button>Contratar Plan</button>
            <ul>
                <li>Entrega automática recurrente</li>
                <li>Dieta estándar (BARF, Cocida o Mixta)</li>
            </ul>
        </article>

        <article class="card popular">
            <span class="badge">Más Popular</span>
            <h2>Plan Personalizado</h2>
            <p class="price">Desde <span>110€ /mes</span></p>
            <p>Ideal para quienes buscan una dieta personalizada para su perro</p>
            <button>Contratar Plan</button>
            <ul>
                <li>Dieta 100% personalizada</li>
                <li>Entrega automática recurrente</li>
                <li>Guía básica de nutrición canina</li>
                <li>Contenido exclusivo vía email</li>
            </ul>
        </article>

        <article class="card">
            <h2>Plan Premium</h2>
            <p class="price">Desde <span>140€ /mes</span></p>
            <p>Ideal para una alimentación cuidada al máximo detalle</p>
            <button>Contratar Plan</button>
            <ul>
                <li>Dieta 100% personalizada</li>
                <li>Entrega automática recurrente</li>
                <li>Guía básica de nutrición canina</li>
                <li>Contenido exclusivo vía email</li>
                <li>Asesoría nutricional mensual</li>
                <li>Snacks de regalo</li>
            </ul>
        </article>
    </section>

    <footer>
        <p>
            *Todos los planes cuentan con opciones de frecuencia de entrega:
            Mensual, Trimestral o Anual
        </p>
    </footer>
@endsection
