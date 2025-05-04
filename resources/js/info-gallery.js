document.addEventListener('DOMContentLoaded', () => {
    console.log('info-gallery.js cargado');

    const galleryContainer = document.querySelector('.info-container');
    const gallery = document.querySelector('.info-gallery');
    const items = document.querySelectorAll('.info-item');

    if (!galleryContainer || !gallery || items.length === 0) {
        console.error('Contenedor, galería o ítems no encontrados');
        return;
    }

    console.log(`Encontrados ${items.length} ítems`);

    // Calcular dimensiones
    const margin = 50; // Margen a la derecha
    const itemWidth = items[0].offsetWidth + parseInt(getComputedStyle(gallery).gap);
    const totalWidth = itemWidth * items.length + margin;
    const maxScroll = totalWidth - galleryContainer.offsetWidth;

    // Configurar galería
    gallery.style.width = `${totalWidth}px`;
    let currentScroll = 0;
    let delayActive = false;

    // Actualizar posición
    const updateGalleryPosition = () => {
        gallery.style.transform = `translateX(-${currentScroll}px)`;
        gallery.style.transition = 'transform 0.3s ease-out';
        items.forEach((item, index) => {
            const itemLeft = index * itemWidth - currentScroll;
            const itemRight = itemLeft + itemWidth;
            const opacity = itemLeft <= galleryContainer.offsetWidth && itemRight >= 0 ? 1 : 0.3;
            item.style.opacity = opacity;
            item.style.transition = 'transform 0.5s ease, opacity 0.5s ease';
        });
        console.log(`Galería movida: translateX(-${currentScroll}px)`);
    };

    // Detectar scroll
    let isInSection = false;
    let lastScrollY = window.pageYOffset;

    window.addEventListener('scroll', () => {
        const containerRect = galleryContainer.getBoundingClientRect();
        const windowHeight = window.innerHeight;
        const currentScrollY = window.pageYOffset;
        const scrollDirection = currentScrollY > lastScrollY ? 1 : -1;

        // Verificar si la galería está en el viewport (más estricta)
        if (containerRect.top <= windowHeight * 0.1 && containerRect.bottom >= windowHeight * 0.9) {
            if (!isInSection) {
                isInSection = true;
                delayActive = false;
                console.log('Entrando en sección de galería');
                // Restaurar posición si viene desde abajo
                if (scrollDirection === -1 && currentScroll === 0) {
                    currentScroll = maxScroll;
                    updateGalleryPosition();
                }
            }

            // Ajustar desplazamiento horizontal (más rápido)
            currentScroll += scrollDirection * 200; // Velocidad aumentada
            currentScroll = Math.max(0, Math.min(maxScroll, currentScroll));

            // Actualizar posición
            updateGalleryPosition();

            // Mantener scroll en la sección
            window.scrollTo(0, galleryContainer.offsetTop);

            // Reanudar scroll vertical con retraso
            if (currentScroll >= maxScroll && scrollDirection === 1 && !delayActive) {
                delayActive = true;
                setTimeout(() => {
                    isInSection = false;
                    delayActive = false;
                    console.log('Último ítem completamente visible, reanudando scroll vertical después de 1 segundo');
                }, 1000); // Retraso de 1 segundo
            } else if (currentScroll <= 0 && scrollDirection === -1) {
                isInSection = false;
                delayActive = false;
                console.log('Primer ítem visible con margen, reanudando scroll vertical hacia arriba');
            }
        } else {
            // Desactivar scroll horizontal fuera de la galería
            if (isInSection) {
                isInSection = false;
                delayActive = false;
                console.log('Saliendo de sección de galería');
            }
        }

        lastScrollY = currentScrollY;
    });

    // Ajustar en resize
    window.addEventListener('resize', () => {
        const newItemWidth = items[0].offsetWidth + parseInt(getComputedStyle(gallery).gap);
        const newTotalWidth = newItemWidth * items.length + margin;
        gallery.style.width = `${newTotalWidth}px`;
        currentScroll = Math.min(currentScroll, newTotalWidth - galleryContainer.offsetWidth);
        updateGalleryPosition();
    });

    // Inicializar
    updateGalleryPosition();
});
