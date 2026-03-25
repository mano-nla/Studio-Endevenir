/*** effet de scroll sur le header ***/
document.addEventListener('DOMContentLoaded', () => {
    const header = document.querySelector('.header');
    if (!header) return;

    function handleScroll() {
        if (window.scrollY > 10) {
            header.classList.add('header--scrolled');
        } else {
            header.classList.remove('header--scrolled');
        }
    }
    handleScroll();
       window.addEventListener('scroll', handleScroll);
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

/*** ouverture de la modale de contact ***/
document.addEventListener('DOMContentLoaded', () => {

    const modal = document.getElementById('modal-contact');
    const openButtons = document.querySelectorAll('[data-open-modal]');
    const closeButtons = document.querySelectorAll('[data-close-modal]');

    if (!modal) return;

    const openModal = () => {
        modal.classList.add('is-active');
        document.body.style.overflow = 'hidden';

    };

    const closeModal = () => {
        modal.classList.remove('is-active');
        document.body.style.overflow = '';
    };

    openButtons.forEach(button => {
        button.addEventListener('click', (e) => {
            e.preventDefault();
            openModal();
        });
    });

    closeButtons.forEach(button => {
        button.addEventListener('click', closeModal);
    });

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            closeModal();
        }
    });

});

/*** Apparition des sections au scroll ***/
const observer = new IntersectionObserver((sections) => {
    sections.forEach(section => {
        if (section.isIntersecting) {
            section.target.classList.add('is-visible');
            observer.unobserve(section.target);
        }
    });
}, {
    threshold: 0.50
});

document.querySelectorAll('.reveal').forEach(el => observer.observe(el));