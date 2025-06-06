// Client Logo Swiper - Shows 5 logos
var swiper = new Swiper(".brand-slider", {
    spaceBetween: 20,
    loop: true,
    autoplay: {
        delay: 2000,
        disableOnInteraction: false,
    },
    slidesPerView: 5, // Show 5 logos by default
    breakpoints: {
        0: {
            slidesPerView: 1, // Small screens
        },
        576: {
            slidesPerView: 3,
        },
        768: {
            slidesPerView: 4,
        },
        992: {
            slidesPerView: 5, // Medium and up
        }
    }
});
