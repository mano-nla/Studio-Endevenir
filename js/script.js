/*** effet de scroll sur le header ***/
window.addEventListener('scroll', () => {
    const header = document.querySelector('.header');
    
    if (!header) return;

    if (window.scrollY > 10) {
        header.classList.add('header--scrolled');
    } else {
        header.classList.remove('header--scrolled');
    }
});