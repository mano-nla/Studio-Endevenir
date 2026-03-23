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

/*** effet de menu déroulant dans la section à propos ***/
const dropdownItems = document.querySelectorAll('.dropdown-menu-item');

dropdownItems.forEach(item => {
    const title = item.querySelector('.dropdown-menu-item-title');
    
    title.addEventListener('click', () => {
        const isOpen = item.classList.contains('is-open');
        
        dropdownItems.forEach(i => i.classList.remove('is-open'));
        
        if (!isOpen) {
            item.classList.add('is-open');
        }
    });
});