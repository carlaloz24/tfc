@extends('layouts.app')

@section('content')
    <div class="main-container">
        <div class="second-background"></div>
        <div class="container-fluid home-content" style="padding: 90px;">
            <h2 style="font-weight: bolder">Aviso Legal</h2>
            <p style="color:#6c757d; font-size: 0.9rem">Bienvenido al sitio web de Barf&Co. Este Aviso Legal regula el acceso y uso de nuestro sitio web, ubicado en <a href="http://www.barfco.com">www.barfco.com</a>. Al navegar por nuestro sitio, aceptas cumplir con las condiciones aquí descritas. Te recomendamos leer este documento cuidadosamente.</p>

            <br><h4>1. Identificación del titular</h4>
            <p style="color:#858d93; font-size: 0.9rem">El sitio web es operado por:</p>
            <ul>
                <li><strong>Nombre</strong>: Barf&Co</li>
                <li><strong>Domicilio</strong>: Polígono Industrial de Guarnizo, 39611 El Astillero, Cantabria, España</li>
                <li><strong>Correo electrónico</strong>: <a href="mailto:soporte@barfco.com">soporte@barfco.com</a></li>
                <li><strong>Teléfono</strong>: +34 123-456-789</li>
            </ul>

            <br><h4>2. Objeto del sitio web</h4>
            <p style="color:#858d93; font-size: 0.9rem">El sitio web de Barf&Co tiene como finalidad proporcionar información sobre nuestros servicios de planes de alimentación personalizados para mascotas, permitir el acceso a herramientas como la calculadora de dietas, y facilitar la comunicación con nuestros usuarios a través de formularios de contacto y suscripciones a newsletters.</p>

            <br><h4>3. Condiciones de uso</h4>
            <p style="color:#858d93; font-size: 0.9rem">Como usuario, te comprometes a:</p>
            <ul>
                <li>Utilizar el sitio web de manera lícita, respetando la normativa vigente.</li>
                <li>No realizar actividades que puedan dañar, sobrecargar o comprometer la seguridad del sitio.</li>
                <li>No reproducir, distribuir o modificar los contenidos del sitio sin autorización expresa.</li>
            </ul>

            <br><h4>4. Propiedad intelectual e industrial</h4>
            <p style="color:#858d93; font-size: 0.9rem">Todos los contenidos del sitio web (textos, imágenes, logotipos, diseños, código, etc.) son propiedad de Barf&Co o de terceros que han autorizado su uso. Queda prohibida su reproducción, distribución o uso sin permiso expreso, salvo para uso personal y no comercial.</p>

            <br><h4>5. Responsabilidad</h4>
            <p style="color:#858d93; font-size: 0.9rem">Barf&Co no se responsabiliza por:</p>
            <ul>
                <li>Interrupciones en el acceso al sitio web debido a fallos técnicos o de terceros.</li>
                <li>Daños derivados del uso indebido del sitio por parte de los usuarios.</li>
                <li>La exactitud o actualización de contenidos de sitios web de terceros enlazados.</li>
            </ul>
            <p style="color:#858d93; font-size: 0.9rem">Nos esforzamos por mantener el sitio actualizado y seguro, pero no garantizamos la ausencia de errores o virus.</p>

            <br><h4>6. Enlaces a terceros</h4>
            <p style="color:#858d93; font-size: 0.9rem">El sitio web puede contener enlaces a sitios de terceros. No controlamos ni asumimos responsabilidad por el contenido, políticas o prácticas de estos sitios. Te recomendamos revisar sus términos antes de interactuar con ellos.</p>

            <br><h4>7. Protección de datos</h4>
            <p style="color:#858d93; font-size: 0.9rem">El tratamiento de datos personales en nuestro sitio se rige por nuestra <a href="{{ route('politica-privacidad') }}">Política de Privacidad</a>. Consulta este documento para más información sobre cómo recopilamos, usamos y protegemos tus datos.</p>

            <br><h4>8. Modificaciones</h4>
            <p style="color:#858d93; font-size: 0.9rem">Barf&Co se reserva el derecho de modificar este Aviso Legal en cualquier momento. Los cambios se publicarán en esta página con la fecha de última actualización. La última actualización fue en mayo de 2025.</p>

            <br><h4>9. Legislación aplicable y jurisdicción</h4>
            <p style="color:#858d93; font-size: 0.9rem">Este Aviso Legal se rige por la legislación española. Cualquier disputa relacionada con el uso del sitio será sometida a los tribunales de Santander, Cantabria, salvo que la normativa aplicable disponga lo contrario.</p>

            <br><h4>10. Contacto</h4>
            <p style="color:#858d93; font-size: 0.9rem">Si tienes preguntas sobre este Aviso Legal, contáctanos en:</p>
            <p style="color:#858d93; font-size: 0.9rem">Barf&Co<br>Correo: <strong><a href="mailto:soporte@barfco.com">soporte@barfco.com</a></strong><br>Página: <a href="{{ route('home') }}#contacto">Contacto</a></p>
        </div>
    </div>
@endsection
