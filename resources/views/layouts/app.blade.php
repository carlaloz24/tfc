<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TFC - @yield('title', 'Inicio')</title>
    <!-- Bootstrap CDN (si prefieres esto) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Vite para CSS/JS personalizados -->

    <!-- Librería descargar PDF -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('styles')
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">TFC</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('calculadora') }}">Calculadora</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('planes') }}">Planes</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('articulos.index') }}">Blog</a></li>
            </ul>
            <ul class="navbar-nav">
                @auth
                    <li class="nav-item"><a class="nav-link" href="{{ route('perfil') }}">Mi Perfil</a></li>
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit" class="nav-link btn btn-link">Cerrar Sesión</button>
                        </form>
                    </li>
                @else
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Iniciar Sesión</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Registrarse</a></li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
<div class="container mt-4">
    @yield('content')
</div>
<footer class="bg-light py-3 mt-4">
    <div class="container text-center">
        <p>© 2025 TFC. Todos los derechos reservados.</p>
    </div>
</footer>
<!-- Bootstrap JS CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@vite(['resources/js/calculadora.js'])
@yield('scripts')
</body>
</html>
