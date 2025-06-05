document.addEventListener('DOMContentLoaded', () => {
    const toggler = document.querySelector('.custom-toggler');
    const collapse = document.querySelector('.navbar-collapse');
    if (toggler && collapse) {
        toggler.addEventListener('click', () => {
            collapse.classList.toggle('active');
        });
    } else {
        console.log('Toggler o Collapse no encontrados');
    }
});
