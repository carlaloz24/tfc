@extends('layouts.app')

@section('content')
    <div class="main-container">
        <div class="second-background"></div>
        <div class="container-fluid home-content" style="padding: 90px;">
            <h2 style="font-weight: bolder">Política de Privacidad</h2>
            <p style="color:#6c757d; font-size: 0.9rem">En Barf&Co respetamos y protegemos tu privacidad. Esta política describe cómo recopilamos, utilizamos y protegemos la información personal que nos proporcionas cuando visitas nuestro sitio web o utilizas nuestros servicios. Te recomendamos leerla con atención para entender cómo tratamos tus datos.</p>

            <br><h4>1. Información que recopilamos</h4>
            <p style="color:#858d93; font-size: 0.9rem">Recopilamos diferentes tipos de información para ofrecerte un servicio de calidad:</p>
            <ul>
                <li><strong>Información personal</strong>: Nombre, dirección, correo electrónico, número de teléfono, y otros datos que puedas proporcionarnos al registrarte o realizar una compra.</li>
                <li><strong>Información técnica</strong>: Dirección IP, tipo de navegador, sistema operativo, información del dispositivo, y datos de navegación como páginas visitadas, tiempo de permanencia y ruta de navegación.</li>
                <li><strong>Cookies y tecnologías similares</strong>: Utilizamos cookies para mejorar la experiencia del usuario, analizar el tráfico del sitio y personalizar contenido y publicidad.</li>
            </ul>

            <br><h4>2. Uso de la información</h4>
            <p style="color:#858d93; font-size: 0.9rem">La información que recopilamos se utiliza para los siguientes fines:</p>
            <ul>
                <li>Proveer y gestionar nuestros servicios.</li>
                <li>Procesar pedidos, pagos y envíos.</li>
                <li>Responder a tus preguntas, comentarios y solicitudes.</li>
                <li>Mejorar nuestro sitio web y adaptar el contenido a tus intereses.</li>
                <li>Enviar comunicaciones comerciales, solo si has dado tu consentimiento previo.</li>
                <li>Cumplir con obligaciones legales y regulatorias.</li>
            </ul>

            <br><h4>3. Base legal para el tratamiento de datos</h4>
            <p style="color:#858d93; font-size: 0.9rem">Tratamos tus datos personales basándonos en:</p>
            <ul>
                <li>Tu consentimiento explícito para ciertos tratamientos (como envío de boletines).</li>
                <li>La necesidad de cumplir un contrato o prestar un servicio solicitado por ti.</li>
                <li>El cumplimiento de obligaciones legales.</li>
                <li>Intereses legítimos para mejorar nuestros servicios, siempre que no prevalezcan tus derechos.</li>
            </ul>

            <br><h4>4. Compartir y transferir información</h4>
            <p style="color:#858d93; font-size: 0.9rem">No vendemos ni alquilamos tus datos a terceros. Podremos compartir información con:</p>
            <ul>
                <li>Proveedores y socios que colaboran con nosotros para prestar servicios (hosting, envíos, pagos).</li>
                <li>Autoridades competentes cuando la ley lo exija.</li>
            </ul>
            <p style="color:#858d93; font-size: 0.9rem">Siempre exigimos a estos terceros mantener la confidencialidad y proteger tus datos conforme a esta política.</p>

            <br><h4>5. Seguridad de los datos</h4>
            <p style="color:#858d93; font-size: 0.9rem">Implementamos medidas técnicas y organizativas adecuadas para proteger tus datos contra pérdida, acceso no autorizado, alteración o destrucción. Sin embargo, ningún método de transmisión o almacenamiento es 100% seguro, por lo que no podemos garantizar seguridad absoluta.</p>

            <br><h4>6. Retención de datos</h4>
            <p style="color:#858d93; font-size: 0.9rem">Conservamos tus datos solo mientras sea necesario para los fines indicados o mientras la ley nos obligue a hacerlo.</p>

            <br><h4>7. Tus derechos</h4>
            <p style="color:#858d93; font-size: 0.9rem">Puedes ejercer en cualquier momento los siguientes derechos:</p>
            <ul>
                <li><strong>Acceso</strong>: Conocer qué datos tenemos sobre ti.</li>
                <li><strong>Rectificación</strong>: Corregir datos inexactos o incompletos.</li>
                <li><strong>Supresión</strong>: Eliminar tus datos cuando ya no sean necesarios.</li>
                <li><strong>Limitación</strong>: Restringir el tratamiento de tus datos en ciertas circunstancias.</li>
                <li><strong>Portabilidad</strong>: Recibir tus datos en un formato estructurado y transferirlos a otro responsable.</li>
                <li><strong>Oposición</strong>: Oponerte al tratamiento por motivos legítimos o al envío de comunicaciones comerciales.</li>
                <li><strong>Retirar el consentimiento</strong>: Cancelar el consentimiento otorgado.</li>
            </ul>
            <p style="color:#858d93; font-size: 0.9rem">Para ejercer tus derechos, contáctanos en <strong>soporte@barfco.com</strong>.</p>

            <br><h4>8. Uso de cookies</h4>
            <p style="color:#858d93; font-size: 0.9rem">Usamos cookies propias y de terceros para mejorar el funcionamiento del sitio, analizar el tráfico y personalizar contenidos y anuncios. Puedes gestionar tus preferencias en cualquier momento. Consulta nuestra <a href="{{ route('cookies') }}">Política de Cookies</a> para más detalles.</p>

            <br><h4>9. Cambios en esta política</h4>
            <p style="color:#858d93; font-size: 0.9rem">Podemos actualizar esta política periódicamente. Publicaremos la versión actualizada en esta página con la fecha de última revisión. Te recomendamos revisarla regularmente. La última actualización fue en mayo de 2025.</p>

            <br><h4>10. Contacto</h4>
            <p style="color:#858d93; font-size: 0.9rem">Si tienes dudas o consultas sobre esta política o el tratamiento de tus datos, contáctanos en:</p>
            <p style="color:#858d93; font-size: 0.9rem">Barf&Co<br>Correo: <strong>soporte@barfco.com</strong><br>Página: <a href="{{ route('home') }}#contacto">Contacto</a></p>
        </div>
    </div>

@endsection
