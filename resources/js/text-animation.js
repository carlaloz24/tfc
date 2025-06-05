

/* En Home, sección de texto grande. Al hacer scroll, se cambia el color de las letras
* una por una, efecto dominó */

document.addEventListener('DOMContentLoaded', () => {
    const scrollText = document.getElementById('scroll-text');
    const text = scrollText.textContent;

    const words = text.split(' ').map(word => {
        const letters = word.split('').map(l => `<span class="letter">${l}</span>`).join('');
        return `<span class="word">${letters}&nbsp;</span>`;
    });

    scrollText.innerHTML = words.join('');

    const letters = scrollText.querySelectorAll('.letter');
    const scrollStep = 5; // cada 5px de scroll activa una letra
    const maxActive = letters.length;

    function update() {
        const scrollTop = window.scrollY || window.pageYOffset;
        let activeCount = Math.floor(scrollTop / scrollStep);
        if (activeCount > maxActive) activeCount = maxActive;
        if (activeCount < 0) activeCount = 0;

        letters.forEach((letter, i) => {
            if (i < activeCount) {
                letter.classList.add('active');
            } else {
                letter.classList.remove('active');
            }
        });
    }

    window.addEventListener('scroll', update);
    update();
});
