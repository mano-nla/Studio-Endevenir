const projetsSwiper = new Swiper('.projets-swiper', {
      slidesPerView: 3,
      spaceBetween: 50,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    breakpoints: {
        // mobile
        0: {
            slidesPerView: 1,
        },
        // tablette
        768: {
            slidesPerView: 2,
        },
        // desktop
        1024: {
            slidesPerView: 3,
        },
    },
});