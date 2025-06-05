@extends('layouts.app')
@section('title', 'Inicio')
@section('content')
    <div class="main-container">
        <div class="second-background"></div>
        <div class="container-fluid home-content" id="home-info">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="home-text">
                        <h1 class="home-title">Transforma la calidad de vida de tu mascota</h1>
                        <p class="home-description">Optimiza la salud de tu perro con planes de alimentación personalizados, diseñados para adaptarse perfectamente a sus características y necesidades, garantizando su bienestar y vitalidad.</p>
                        <div class="home-actions">
                            <a href="{{ route('calculadora.index') }}" class="btn-home-primary">
                                Generar dieta gratis
                                <i class="bi bi-arrow-right ms-2"></i>
                            </a>
                            <a href="{{ route('planes') }}" class="btn-home-secondary">Ver planes</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <img src="{{ asset('images/home-img.png') }}" alt="Dieta personalizada" class="home-image">
                </div>
            </div>
        </div>
    </div>

    <div class="main-container">
        <div class="main-container" id="sobre-barfco"></div>
        <div class="container-fluid home-content">
            <div class="row align-items-end">
                <div class="col-md-6 text-center">
                    <img src="{{ asset('images/entrega.png') }}" alt="Entrega" class="home-image-entrega">
                </div>
                <div class="col-md-6">
                    <div class="home-text">
                        <div id="scroll-text" class="scroll-text">Somos un equipo apasionado por elevar la salud y
                            el bienestar de nuestros perros mediante dietas personalizadas diseñadas para optimizar su
                            calidad de vida. En Barf&Co, utilizamos ingredientes frescos, orgánicos y libres de
                            aditivos innecesarios, garantizando un compromiso inquebrantable con la excelencia y
                            pureza de cada producto. Ofrecemos entregas recurrentes con alimentos refrigerados para
                            preservar su frescura, junto con un servicio de envío a domicilio que puedes programar
                            para simplificar el proceso.
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>


    <div class="info-gallery-horizontal" id="que-hacemos">
        <section class="info-item">
            <div class="info-box">
                <img src="{{ asset('images/barf-diet.png') }}" alt="Historia 1" class="info-image" style="margin-top:15px;">
                <h3 class="info-item-title">Dieta Barf</h3>
                <p class="info-text">Esta dieta cruda, compuesta por carne fresca, vísceras, huesos carnosos y verduras,
                    replica lo que tu perro comería en la naturaleza. Recomendada por veterinarios y expertos en nutrición
                    canina por su alta biodisponibilidad y beneficios para la salud,
                    es una opción estrella para perros activos, con alergias o necesidades específicas.</p>
            </div>
        </section>
        <section class="info-item">
            <div class="info-box">
                <img src="{{ asset('images/cocida-diet.png') }}" alt="Historia 2" class="info-image" style="margin-top:15px;">
                <h3 class="info-item-title">Dieta cocida</h3>
                <p class="info-text">Si buscas una alternativa fresca y fácil de digerir, la dieta cocida combina carne,
                    verduras y grasas cuidadosamente cocinadas para preservar todos los nutrientes.
                    Ideal para perros senior, con digestiones sensibles o en transición desde pienso, ofrece sabor y
                    salud, adaptándose a las necesidades de cada etapa de vida.

                </p>
            </div>
        </section>
        <section class="info-item">
            <div class="info-box">
                <img src="{{ asset('images/50_50-diet.png') }}" alt="Historia 3" class="info-image"style="margin-top:15px;">
                <h3 class="info-item-title">Mixta 50%</h3>
                <p class="info-text">Esta dieta equilibra un 50% de pienso premium con un 50% de comida fresca,
                    perfecta para perros que les gusta la variedad y dueños que buscan conveniencia sin renunciar a la frescura
                    y calidad del alimento.
                    Este tipo de dieta te ofrece una solución práctica y nutritiva para mantener a tu perro saludable.</p>
            </div>
        </section>

        <section class="info-item">
            <div class="info-box">
                <img src="{{ asset('images/70_30-diet.png') }}" alt="Historia 3" class="info-image" style="margin-top:15px;">
                <h3 class="info-item-title">Mixta 70% </h3>
                <p class="info-text">Para quienes valoran la practicidad con un toque gourmet,
                    esta dieta combina un 70% de pienso de alta calidad, compuesto por ingredientes naturales y sin aditivos,
                    con un 30% de comida fresca.
                    Ideal para perros de cualquier edad y dueños con agendas ocupadas, garantiza nutrición
                    equilibrada con un extra de sabor.</p>
            </div>
        </section>
    </div>


    <!--sección de contacto -->
    <div class="contact-container" id="contacto" style="margin-top: 100px;">
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
                                <a href="https://www.facebook.com/?locale=es_ES" class="social-link"><i class="bi bi-facebook"></i></a>
                                <a href="https://www.instagram.com " class="social-link"><i class="bi bi-instagram"></i></a>
                                <a href="https://x.com/?lang=es" class="social-link"><i class="bi bi-twitter"></i></a>
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

    <!-- footer  -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-background"></div>
            <div class="footer-content">
                <div class="footer-column">
                    <img src="{{ asset('images/logo-barfco-blanco.png') }}" alt="Barfco Logo" class="footer-logo" style="margin-left:-10px">
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
                        <li><a href="#home-info">Sobre Barf&Co</a></li>
                        <li><a href="#sobre-barfco">Qué hacemos</a></li>
                        <li><a href="#que-hacemos">Dietas disponibles</a></li> <!-- Ajusta si creas un ID separado -->
                        <li><a href="#contacto">Contacto</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <ul class="footer-links">
                        <li><strong><a>Páginas</a></strong></li>
                        <li><a href="#top">Inicio</a></li>
                        <li><a href="{{ route('calculadora.index') }}">Calculadora</a></li>
                        <li><a href="{{ route('planes') }}">Planes</a></li>
                        <li><a href="{{ route('contacto') }}">Contacto</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <ul class="footer-links">
                        <li><strong><a>Soporte</a></strong></li>
                        <li><a href="{{ route('politica-privacidad') }}">Política de Privacidad</a></li>
                        <li><a href="{{ route('cookies') }}">Política de Cookies</a></li>
                        <li><a href="{{ route('aviso-legal') }}">Aviso Legal</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
            </div>
        </div>
    </footer>
@endsection
@push('scripts')
    @vite('resources/js/text-animation.js')
    @vite('resources/js/info-gallery.js')
@endpush
