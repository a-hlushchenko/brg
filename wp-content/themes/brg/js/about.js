const companiesSwiper = new Swiper("#logos", {
  slidesPerView: "auto",
  spaceBetween: 20,
  speed: 5000,
  loop: true,
  allowTouchMove: true,
  autoplay: {
    delay: 0,
    disableOnInteraction: true,
  },

  breakpoints: {
    1024: {
      spaceBetween: 47,
    },
  },
});
