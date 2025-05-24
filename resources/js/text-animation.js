document.addEventListener('DOMContentLoaded', () => {
    const scrollText = document.getElementById('scroll-text');

    // Envuelve cada letra en un <span>
    const text = scrollText.textContent;
    scrollText.innerHTML = text.split('').map(l => l === ' ' ? `<span class="letter">&nbsp;</span>` : `<span class="letter">${l}</span>`).join('');

    const letters = scrollText.querySelectorAll('.letter');
    const scrollStep = 3; // Cada 15px de scroll cambia 1 letra
    const maxActive = letters.length;

    function update() {
        const scrollTop = window.scrollY || window.pageYOffset;
        // Cuántas letras activar según scroll (sin decimales)
        let activeCount = Math.floor(scrollTop / scrollStep);

        if (activeCount > maxActive) activeCount = maxActive;
        if (activeCount < 0) activeCount = 0;

        // Activa solo las primeras activeCount letras
        letters.forEach((letter, i) => {
            if (i < activeCount) letter.classList.add('active');
            else letter.classList.remove('active');
        });
    }

    window.addEventListener('scroll', update);
    update();
});
