

/* En Home, sección de texto grande. Al hacer scroll, se cambia el color de las letras
* una por una, efecto dominó */

document.addEventListener('DOMContentLoaded', () => {
    const scrollText = document.getElementById('scroll-text');

    const text = scrollText.textContent;
    scrollText.innerHTML = text.split('').map(l => l === ' ' ? `<span class="letter">&nbsp;</span>` : `<span class="letter">${l}</span>`).join('');

    const letters = scrollText.querySelectorAll('.letter');
    const scrollStep = 3; //cada 15px de scroll cambia 1 letra
    const maxActive = letters.length;

    function update() {
        const scrollTop = window.scrollY || window.pageYOffset;

        let activeCount = Math.floor(scrollTop / scrollStep);

        if (activeCount > maxActive) activeCount = maxActive;
        if (activeCount < 0) activeCount = 0;

        letters.forEach((letter, i) => {
            if (i < activeCount) letter.classList.add('active');
            else letter.classList.remove('active');
        });
    }

    window.addEventListener('scroll', update);
    update();
});
