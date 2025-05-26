/*
* GSAP es una librería de JavaScript para crear animaciones,
* fácil de usar y compatible con todos los navegadores.
*
* En Home, en los 4 cards de dietas, cambia el scroll vertical a horizontal en esa sección
* */

import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

const horizontalSections = gsap.utils.toArray(".info-gallery-horizontal .info-item");

gsap.to(horizontalSections, {
    x: () => -(document.querySelector(".info-gallery-horizontal").scrollWidth - window.innerWidth),
    ease: "none",
    scrollTrigger: {
        trigger: ".info-gallery-horizontal",
        pin: true,
        scrub: 1,
        start: "top top",
        end: () => "+=" + (document.querySelector(".info-gallery-horizontal").scrollWidth - window.innerWidth + 100),
        anticipatePin: 1,
        invalidateOnRefresh: true
    }
});
