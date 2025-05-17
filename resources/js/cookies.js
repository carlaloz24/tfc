import Cookies from 'js-cookie';

document.addEventListener('DOMContentLoaded', () => {
    if (!Cookies.get('cookie_consent')) {
        const banner = document.createElement('div');
        banner.className = 'cookie-consent-banner';
        banner.innerHTML = `
            <p>Usamos cookies para mejorar tu experiencia. <a href="/politica-cookies">Más información</a>.</p>
            <div class="cookie-banner-buttons">
                <button class="cookie-consent-button accept">Aceptar</button>
                <button class="cookie-consent-button decline">Rechazar</button>
            </div>
        `;
        document.body.appendChild(banner);

        banner.querySelector('.cookie-consent-button.accept').addEventListener('click', () => {
            Cookies.set('cookie_consent', 'accepted', { expires: 365, path: '/', sameSite: 'Strict' });
            banner.remove();
        });

        banner.querySelector('.cookie-consent-button.decline').addEventListener('click', () => {
            Cookies.set('cookie_consent', 'declined', { expires: 365, path: '/', sameSite: 'Strict' });
            banner.remove();
        });
    }
});
