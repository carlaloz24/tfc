document.addEventListener('DOMContentLoaded', () => {
    console.log('info-gallery.js cargado'); // Depuración

    const gallery = document.querySelector('.info-gallery');
    const items = document.querySelectorAll('.info-item');

    // Verificar si la galería y los ítems existen
    if (!gallery || items.length === 0) {
        console.error('Galería o ítems no encontrados');
        return;
    }

    console.log(`Encontrados ${items.length} ítems`); // Depuración

    // Inicializar primeros 3 elementos visibles
    items.forEach((item, index) => {
        if (index < 3) {
            item.style.transform = `translateX(${index * 100}%)`;
            item.style.opacity = 1;
        } else {
            item.style.transform = `translateX(${(index * 100) + 300}%)`;
            item.style.opacity = 0;
        }
        item.style.transition = 'transform 0.5s ease, opacity 0.5s ease';
    });

    // Detectar scroll
    let lastScrollTop = 0;
    window.addEventListener('scroll', () => {
        const galleryRect = gallery.getBoundingClientRect();
        const windowHeight = window.innerHeight;
        const currentScrollTop = window.pageYOffset || document.documentElement.scrollTop;
        const scrollDirection = currentScrollTop > lastScrollTop ? 1 : -1;
        lastScrollTop = currentScrollTop;

        console.log('Scroll detectado', { galleryTop: galleryRect.top, windowHeight }); // Depuración

        // Animar cuando la galería está en el viewport
        if (galleryRect.top < windowHeight && galleryRect.bottom > 0) {
            console.log('Galería en viewport'); // Depuración
            items.forEach((item, index) => {
                const itemRect = item.getBoundingClientRect();
                let translateX = parseFloat(item.style.transform.replace('translateX(', '').replace('%)', '') || 0);

                console.log(`Ítem ${index}: left=${itemRect.left}, right=${itemRect.right}`); // Depuración

                if (scrollDirection === 1 && itemRect.left > window.innerWidth * 0.8) {
                    translateX -= 100;
                    item.style.transform = `translateX(${Math.max(0, translateX)}%)`;
                    item.style.opacity = 1;
                    console.log(`Moviendo ítem ${index} a la izquierda: translateX(${translateX}%)`); // Depuración
                } else if (scrollDirection === -1 && itemRect.right < window.innerWidth * 0.2) {
                    translateX += 100;
                    item.style.transform = `translateX(${translateX}%)`;
                    item.style.opacity = index >= 3 ? 0 : 1;
                    console.log(`Moviendo ítem ${index} a la derecha: translateX(${translateX}%)`); // Depuración
                }
            });
        }
    });
});
