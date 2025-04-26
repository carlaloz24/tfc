@extends('layouts.app')
@section('title', 'Inicio')
@section('content')
    <div class="main-container">
        <div class="second-background"></div>
        <div class="container-fluid home-content">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="home-text">
                        <h1 class="home-title">Transforma la calidad de vida de tu mascota</h1>
                        <p class="home-description">Optimiza la salud de tu perro con planes de alimentación personalizados, diseñados para adaptarse perfectamente a sus características y necesidades, garantizando su bienestar y vitalidad.</p>
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

    <!-- Nueva sección de información -->
    <div class="info-container">
        <div class="info-background"></div>
        <div class="container-fluid info-content">
            <h2 class="info-title">Nuestras Historias</h2>
            <p class="info-subtitle">Descubre cómo Barfco transforma la vida de las mascotas con nuestras animaciones interactivas.</p>
            <div class="info-gallery">
                <div class="info-item">
                    <img src="{{ asset('images/dieta-placeholder.png') }}" alt="Historia 1" class="info-image">
                    <p class="info-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="info-item">
                    <img src="{{ asset('images/dieta-placeholder.png') }}" alt="Historia 2" class="info-image">
                    <p class="info-text">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div class="info-item">
                    <img src="{{ asset('images/dieta-placeholder.png') }}" alt="Historia 3" class="info-image">
                    <p class="info-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>
                <div class="info-item">
                    <img src="{{ asset('images/dieta-placeholder.png') }}" alt="Historia 4" class="info-image">
                    <p class="info-text">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="info-item">
                    <img src="{{ asset('images/dieta-placeholder.png') }}" alt="Historia 5" class="info-image">
                    <p class="info-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                </div>
                <div class="info-item">
                    <img src="{{ asset('images/dieta-placeholder.png') }}" alt="Historia 6" class="info-image">
                    <p class="info-text">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Sección de contacto -->
    <div class="contact-container">
        <div class="contact-background"></div>
        <div class="container-fluid contact-content">
            <div class="row align-items-start">
                <div class="col-md-6">
                    <div class="contact-text">
                        <h2 class="contact-title">Contáctanos</h2>
                        <p class="contact-subtitle">Estaremos encantados de resolver tus dudas, no dudes en contactar con nosotros</p>
                        <ul class="contact-info" style="margin-left:7px;">
                            <li><span class="contact-label">Email:</span> <a href="mailto:info@barfco.com">info@barfco.com</a></li>
                            <li><span class="contact-label">Teléfono:</span> <a href="tel:+1234567890">+34 123-456-789</a></li>
                            <li><span class="contact-label">Dirección:</span> <a href="https://www.google.com/maps/place/Pol%C3%ADgono+Industrial+de+Guarnizo,+39611+El+Astillero,+Cantabria,+Spain" target="_blank">Polígono Industrial de Guarnizo, 39611 El Astillero, Cantabria, España</a></li>
                        </ul>
                        <div class="contact-social">
                            <p class="social-title"></p>
                            <div class="social-icons">
                                <a href="#" class="social-link"><i class="bi bi-facebook"></i></a>
                                <a href="#" class="social-link"><i class="bi bi-instagram"></i></a>
                                <a href="#" class="social-link"><i class="bi bi-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <form class="contact-form" action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="form-label">Nombre</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Tu nombre" required>
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Correo electrónico</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Tu correo" required>
                        </div>
                        <div class="form-group">
                            <label for="message" class="form-label">Mensaje</label>
                            <textarea id="message" name="message" class="form-control" rows="5" placeholder="Escribe tu mensaje" required style="border-radius:10px;"></textarea>
                        </div>
                        <button type="submit" class="btn-home-primary">Enviar mensaje</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer actualizado -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-background"></div>
            <div class="footer-content">
                <div class="footer-column">
                    <img src="{{ asset('images/logo-barfco.png') }}" alt="Barfco Logo" class="footer-logo">
                    <h3 class="footer-newsletter-title">Suscríbete a la newsletter</h3>
                    <p class="footer-newsletter-text">Recibe por correo los artículos nuevos del blog, ofertas exclusivas y novedades.</p>
                    <form class="footer-newsletter-form" action="{{ route('newsletter.subscribe') }}" method="POST">
                        @csrf
                        <div class="newsletter-input-group">
                            <input type="email" name="email" class="form-control" placeholder="Tu correo electrónico" required>
                            <button type="submit" class="btn-footer-subscribe">Suscribirse</button>
                        </div>
                    </form>
                </div>
                <div class="footer-column">
                    <ul class="footer-links">
                        <li><strong><a>Secciones</a></strong></li>
                        <li><a href="#">Sección 1</a></li>
                        <li><a href="#">Sección 2</a></li>
                        <li><a href="#">Sección 3</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <ul class="footer-links">
                        <li><strong><a>Páginas</a></strong></li>
                        <li><a href="#top">Inicio</a></li>
                        <li><a href="{{ route('calculadora') }}">Calculadora</a></li>
                        <li><a href="{{ route('planes') }}">Planes</a></li>
                        <li><a href="{{ route('contacto') }}">Contacto</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <ul class="footer-links">
                        <li><strong><a>Soporte</a></strong></li>
                        <li><a href="{{ route('politica-privacidad') }}">Política de Privacidad</a></li>
                        <li><a href="{{ route('terminos-uso') }}">Términos de Uso</a></li>
                        <li><a href="{{ route('aviso-legal') }}">Aviso Legal</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>2025 Todos los derechos reservados Barfco</p>
            </div>
        </div>
    </footer>
@endsection
@push('scripts')
    <script src="{{ asset('js/info-gallery.js') }}"></script>
@endpush
