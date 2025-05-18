@extends('layouts.app')

@section('content')
    <div class="main-container">
        <div class="second-background"></div>
        <div class="container-fluid home-content" style="padding: 90px;">
            <h2 style="font-weight: bolder">Política de Cookies</h2>
            <p style="color:#6c757d; font-size: 0.9rem">En Barf&Co utilizamos cookies y tecnologías similares para mejorar tu experiencia de usuario, personalizar el contenido, analizar el rendimiento de nuestro sitio web y ofrecer funcionalidades esenciales. Las cookies son pequeños archivos de texto que se almacenan en tu dispositivo cuando visitas nuestro sitio. A continuación, te explicamos en detalle cómo usamos las cookies, qué tipos empleamos, y cómo puedes gestionar tus preferencias.</p>

            <br><h4>¿Qué son las cookies?</h4>
            <p style="color:#858d93; font-size: 0.9rem">Las cookies son archivos que los sitios web guardan en tu navegador para recopilar información sobre tu interacción con el sitio. Estos datos nos ayudan a optimizar tu experiencia, recordar tus preferencias y analizar cómo utilizas nuestra plataforma. Algunas cookies son temporales (de sesión) y se eliminan al cerrar el navegador, mientras que otras (persistentes) permanecen por un tiempo definido.</p>

            <br><h4>Tipos de cookies que utilizamos</h4>
            <ul>
                <li><strong>Cookies esenciales</strong>: Son estrictamente necesarias para el funcionamiento básico del sitio. Permiten navegar por las páginas, acceder a áreas seguras y utilizar funciones como la autenticación de usuarios. Sin estas cookies, el sitio no funcionaría correctamente. Estas cookies no requieren tu consentimiento.</li>
                <li><strong>Cookies analíticas</strong>: Nos ayudan a entender cómo los usuarios interactúan con nuestro sitio, recopilando datos anónimos sobre las páginas visitadas, el tiempo de navegación y las acciones realizadas. Solo se activan si das tu consentimiento explícito.</li>
                <li><strong>Cookies de personalización</strong>: Permiten recordar tus preferencias, como el idioma o la configuración de tu perfil, para ofrecer una experiencia más adaptada. Estas cookies también requieren tu consentimiento.</li>
                <li><strong>Cookies publicitarias</strong>: Utilizamos estas cookies para mostrarte anuncios relevantes basados en tus intereses. También pueden ser usadas por terceros para medir la efectividad de campañas publicitarias. Se activan únicamente con tu consentimiento.</li>
            </ul>

            <br><h4>¿Cómo gestionamos las cookies?</h4>
            <p style="color:#6c757d">Cuando visitas nuestro sitio por primera vez, te mostramos un banner de cookies que te permite aceptar o rechazar las cookies no esenciales. Puedes cambiar tus preferencias en cualquier momento desde la sección de configuración de tu perfil. También puedes configurar tu navegador para bloquear o eliminar cookies, aunque esto podría afectar el funcionamiento de algunas partes del sitio.</p>

            <br><h4>¿Cómo puedes controlar las cookies?</h4>
            <p style="color:#6c757d">La mayoría de los navegadores permiten gestionar las cookies a través de sus ajustes. Puedes:</p>
            <ul>
                <li>Activar o desactivar las cookies.</li>
                <li>Borrar las cookies almacenadas.</li>
                <li>Bloquear cookies de terceros.</li>
            </ul>
            <p style="color:#6c757d">Ten en cuenta que desactivar las cookies esenciales puede limitar el acceso a ciertas funcionalidades del sitio. Para más información sobre cómo gestionar cookies en tu navegador, consulta su documentación oficial.</p>

            <br><h4>Actualizaciones de esta política</h4>
            <p style="color:#6c757d">Podemos actualizar esta Política de Cookies para reflejar cambios en nuestras prácticas o en la legislación aplicable. Te recomendamos revisar esta página periódicamente para estar informado. La última actualización fue en mayo de 2025.</p>

            <br><h4>Contacto</h4>
            <p style="color:#6c757d">Si tienes preguntas sobre nuestra Política de Cookies o el uso de cookies en Barf&Co, contáctanos a través de nuestra página de <a href="{{ route('home') }}#contacto"> contacto</a> o en <strong>soporte@barfco.com</strong>.</p>
        </div>
    </div>
    </div>

@endsection
