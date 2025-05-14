@extends('layouts.app')
@section('title', 'Planes')
@section('content')
    <div class="main-container">
        <div class="second-background"></div>
        <header class="hero">
            <h1>Elige el plan que mejor se adapta a tu perro</h1>
            <p style="line-height: 24px">
                Elige la mejor opción para tu perro y tú.
                Sin costos ocultos ni sorpresas, solo alimentación saludable y equilibrada, directamente a tu puerta.
            </p>
        </header>
        <section class="plans">
            <article class="card">
                <h2>Plan Básico</h2>
                <p class="price">
                    <span class="price-from">Desde</span><br>
                    <span class="price-value">50€ /mes</span>
                </p>
                <p class="description">Ideal para empezar con una dieta sencilla y nutritiva</p>
                <button onclick="window.location.href='{{ auth()->check() && auth()->user()->mascotas->isNotEmpty() ? route('planes.select', ['mascota_id' => auth()->user()->mascotas->first()->id, 'tipo_plan' => 'basico']) : route('login') }}'">Contratar Plan</button>                <p class="features-title">Características:</p>
                <ul>
                    <li><span class="check-circle green"></span>Entrega automática recurrente</li>
                    <li><span class="check-circle green"></span>Dieta estándar (BARF, Cocida o Mixta)</li>
                </ul>
            </article>
            <article class="card popular">
                <span class="badge">Más Popular</span>
                <div class="card-content">
                    <h2>Plan Personalizado</h2>
                    <p class="price">
                        <span class="price-from">Desde</span><br>
                        <span class="price-value">110€ /mes</span>
                    </p>
                    <p class="description">Ideal para quienes buscan una dieta personalizada para su perro</p>
                    <button onclick="window.location.href='{{ auth()->check() && auth()->user()->mascotas->isNotEmpty() ? route('planes.select', ['mascota_id' => auth()->user()->mascotas->first()->id, 'tipo_plan' => 'personalizado']) : route('login') }}'">Contratar Plan</button>                <ul>
                        <li><span class="check-circle green"></span>Dieta 100% personalizada</li>
                        <li><span class="check-circle green"></span>Entrega automática recurrente</li>
                        <li><span class="check-circle green"></span>Guía básica de nutrición canina</li>
                        <li><span class="check-circle green"></span>Contenido exclusivo vía email</li>
                    </ul>
                </div>
            </article>
            <article class="card">
                <h2>Plan Premium</h2>
                <p class="price">
                    <span class="price-from">Desde</span><br>
                    <span class="price-value">140€ /mes</span>
                </p>
                <p class="description">Ideal para una alimentación cuidada al máximo detalle</p>
                <button onclick="window.location.href='{{ auth()->check() && auth()->user()->mascotas->isNotEmpty() ? route('planes.select', ['mascota_id' => auth()->user()->mascotas->first()->id, 'tipo_plan' => 'personalizado']) : route('login') }}'">Contratar Plan</button>                <ul>

                <li><span class="check-circle green"></span>Dieta 100% personalizada</li>
                    <li><span class="check-circle green"></span>Entrega automática recurrente</li>
                    <li><span class="check-circle green"></span>Guía básica de nutrición canina</li>
                    <li><span class="check-circle green"></span>Contenido exclusivo vía email</li>
                    <li><span class="check-circle green"></span>Asesoría nutricional mensual</li>
                    <li><span class="check-circle green"></span>Snacks de regalo</li>
                </ul>
            </article>
            <div class="plans-table-container">
                <table class="plans-table">
                    <thead>
                    <tr>
                        <th>Característica</th>
                        <th>Plan Básico</th>
                        <th>Plan Personalizado</th>
                        <th>Plan Premium</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Precio</td>
                        <td>Desde 50€/mes</td>
                        <td>Desde 110€/mes</td>
                        <td>Desde 140€/mes</td>
                    </tr>
                    <tr>
                        <td>Dieta</td>
                        <td>Estándar</td>
                        <td>100% Personalizada</td>
                        <td>100% Personalizada</td>
                    </tr>
                    <tr>
                        <td>Número de raciones</td>
                        <td>2/día</td>
                        <td>Hasta 3/día</td>
                        <td>Hasta 5/día</td>
                    </tr>
                    <tr>
                        <td>Entrega automática recurrente</td>
                        <td><span class="check-circle orange"></span></td>
                        <td><span class="check-circle orange"></span></td>
                        <td><span class="check-circle orange"></span></td>
                    </tr>
                    <tr>
                        <td>Guía básica de nutrición canina</td>
                        <td><span class="check-circle orange"></span></td>
                        <td><span class="check-circle orange"></span></td>
                        <td><span class="check-circle orange"></span></td>
                    </tr>
                    <tr>
                        <td>Contenido exclusivo vía email</td>
                        <td>-</td>
                        <td><span class="check-circle orange"></span></td>
                        <td><span class="check-circle orange"></span></td>
                    </tr>
                    <tr>
                        <td>Snacks de regalo</td>
                        <td>-</td>
                        <td>-</td>
                        <td><span class="check-circle orange"></span></td>
                    </tr>
                    <tr>
                        <td>Asesoría nutricional mensual</td>
                        <td>-</td>
                        <td>-</td>
                        <td><span class="check-circle orange"></span></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </section>
        <footer>
            <p>
                *Todos los planes cuentan con opciones de frecuencia de entrega:
                Mensual, Trimestral o Anual
            </p>
        </footer>
    </div>
@endsection
