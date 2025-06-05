document.addEventListener('DOMContentLoaded', () => {
    const scrollText = document.getElementById('scroll-text');
    let text = scrollText.textContent;

    // Limpiar saltos de línea y espacios extras
    text = text.replace(/\s+/g, ' ').trim();

    const words = text.split(' ').map(word => {
        return `<span class="word">${[...word].map(l => `<span class="letter">${l}</span>`).join('')}</span>`;
    });

    scrollText.innerHTML = words.join('<span class="space">&nbsp;</span>');

    const letters = scrollText.querySelectorAll('.letter');
    const scrollStep = 3; //esto hace que cada 3px de scroll cambie una letra

    function update() {
        const scrollTop = window.scrollY || window.pageYOffset;
        let activeCount = Math.floor(scrollTop / scrollStep);
        if (activeCount > letters.length) activeCount = letters.length;

        letters.forEach((letter, i) => {
            letter.classList.toggle('active', i < activeCount);
        });
    }

    window.addEventListener('scroll', update);
    update();
});
