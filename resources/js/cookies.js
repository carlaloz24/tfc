import Cookies from 'js-cookie';

document.addEventListener('DOMContentLoaded', () => {
    if (!Cookies.get('cookie_consent')) {
        const banner = document.createElement('div');
        banner.className = 'cookie-consent-banner active';
        banner.innerHTML = ` <p>Usamos cookies para mejorar tu experiencia, personalizar el contenido y analizar cómo se utiliza nuestro sitio. Algunas son esenciales para su funcionamiento. Más información en nuestra <a href="/politica-cookies">Política de Cookies</a>.</p>
            <div class="cookie-banner-buttons">
                <button class="button_cookies">Aceptar</button>
                <button class="button_cookies">Rechazar</button>
            </div> `;
        document.body.appendChild(banner);

        banner.querySelector('.button_cookies:nth-child(1)').addEventListener('click', () => {
            Cookies.set('cookie_consent', 'accepted', { expires: 365, path: '/', sameSite: 'Strict' });
            banner.remove();
        });

        banner.querySelector('.button_cookies:nth-child(2)').addEventListener('click', () => {
            Cookies.set('cookie_consent', 'declined', { expires: 365, path: '/', sameSite: 'Strict' });
            banner.remove();
        });
    }
});
