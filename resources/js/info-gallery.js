import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

const horizontalSections = gsap.utils.toArray(".info-gallery-horizontal .info-item");

gsap.to(horizontalSections, {
    xPercent: -100 * (horizontalSections.length - 1),
    ease: "none",
    scrollTrigger: {
        trigger: ".info-gallery-horizontal",
        pin: true,
        scrub: 1,
        start: "top top",
        end: () => "+=" + document.querySelector(".info-gallery-horizontal").offsetWidth,
        anticipatePin: 1
    }
});
