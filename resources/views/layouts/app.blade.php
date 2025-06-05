<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barfco - @yield('title', 'Inicio')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/cookies.js'])
    @yield('styles')
</head>
<body><nav class="navbar navbar-expand-lg">
    <div class="navbar-container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('images/logo-barfco.png') }}" alt="Barf&Co Logo" class="navbar-logo">
        </a>
        <button class="navbar-toggler custom-toggler" type="button" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse" id="navbarNav">

            <ul class="navbar-nav mx-auto">
                @if (Auth::check() && Auth::user()->is_admin && request()->is('admin*'))
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.users.index') }}">Gestión de Usuarios</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.articulos.index') }}">Gestión de Artículos</a></li>
                @else
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Inicio</a></li>

                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('calculadora.index') }}">Calculadora</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('planes') }}">Planes</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('articulos.index') }}">Blog</a></li>
                @endif
            </ul>
            <ul class="navbar-nav ms-auto">
                @auth
                    @if (Auth::user()->is_admin && request()->is('admin*'))
                        <li class="nav-item">
                            <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                                @csrf
                                <button type="submit" class="nav-link btn-home-primary">Cerrar Sesión</button>
                            </form>
                        </li>
                    @else
                        <li class="nav-item"><a class="nav-link btn-home-secondary" href="{{ route('profile.index') }}">Cuenta</a></li>
                        <li class="nav-item">
                            <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                                @csrf
                                <button type="submit" class="nav-link btn-home-primary">Cerrar Sesión</button>
                            </form>
                        </li>
                    @endif
                @else
                    <li class="nav-item"><a class="nav-link btn-home-secondary" href="{{ route('login') }}">Iniciar Sesión</a></li>
                    <li class="nav-item"><a class="nav-link btn-home-primary" href="{{ route('register') }}">Registrarse</a></li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
@yield('content')
<footer  class="py-3 mt-4">
    <div class="container text-center">
        <p style="color: #6c757d; font-size: 0.85rem;">© {{ date('Y') }} Barf&Co. Todos los derechos reservados.</p>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@stack('scripts')
</body>
</html>
