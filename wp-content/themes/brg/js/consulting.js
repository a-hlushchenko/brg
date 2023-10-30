const offerSwiper = new Swiper("#offer", {
  slidesPerView: 1,
  spaceBetween: 20,
  speed: 500,
  allowTouchMove: true,

  navigation: {
    prevEl: ".swiper-button-prev-offer",
    nextEl: ".swiper-button-next-offer",
  },

  pagination: {
    el: ".swiper-pagination-offer",
  },

  breakpoints: {
    940: {
      slidesPerView: 4,
      spaceBetween: 20,
    },
  },
});

const accompanySwiper = new Swiper("#accompany", {
  slidesPerView: 1,
  spaceBetween: 20,
  speed: 500,
  allowTouchMove: true,

  navigation: {
    prevEl: ".swiper-button-prev-accompany",
    nextEl: ".swiper-button-next-accompany",
  },

  pagination: {
    el: ".swiper-pagination-accompany",
  },

  breakpoints: {
    1024: {
      slidesPerView: 3,
      spaceBetween: 40,
    },
  },
});
