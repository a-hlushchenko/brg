const companiesSwiper = new Swiper("#companies", {
  slidesPerView: "auto",
  spaceBetween: 40,
  speed: 5000,
  loop: true,
  allowTouchMove: false,
  autoplay: {
    delay: 0,
    disableOnInteraction: false,
  },

  breakpoints: {
    800: {
      spaceBetween: 60,
    },
  },
});

const teamSwiper = new Swiper("#team", {
  slidesPerView: 2,
  spaceBetween: 30,
  speed: 500,
  allowTouchMove: true,

  pagination: {
    el: ".swiper-pagination-team",
  },

  navigation: {
    nextEl: ".swiper-button-next-team2",
    prevEl: ".swiper-button-prev-team2",
  },

  breakpoints: {
    1100: {
      slidesPerView: 4,
      pagination: {
        el: "",
      },
      navigation: {
        nextEl: ".swiper-button-next-team1",
        prevEl: ".swiper-button-prev-team1",
      },
      spaceBetween: 50,
    },

    940: {
      slidesPerView: 3,
      pagination: {
        el: "",
      },
      navigation: {
        nextEl: ".swiper-button-next-team1",
        prevEl: ".swiper-button-prev-team1",
      },
    },
  },
});

const aboutSwiper = new Swiper("#about", {
  slidesPerView: 1,
  spaceBetween: 20,
  speed: 500,
  allowTouchMove: true,

  navigation: {
    prevEl: ".swiper-button-prev-about",
    nextEl: ".swiper-button-next-about",
  },

  pagination: {
    el: ".swiper-pagination-about",
  },

  breakpoints: {
    940: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
  },
});

const restaurantSwiper = new Swiper("#restaurant", {
  slidesPerView: 1,
  spaceBetween: 20,
  speed: 500,
  allowTouchMove: true,

  navigation: {
    prevEl: ".swiper-button-prev-restaurant",
    nextEl: ".swiper-button-next-restaurant",
  },

  pagination: {
    el: ".swiper-pagination-restaurant",
  },

  breakpoints: {
    940: {
      slidesPerView: 3,
      spaceBetween: 40,
    },
  },
});

const franchisingSwiper = new Swiper("#franchising", {
  slidesPerView: 1,
  spaceBetween: 20,
  speed: 500,
  allowTouchMove: true,

  navigation: {
    prevEl: ".swiper-button-prev-franchising",
    nextEl: ".swiper-button-next-franchising",
  },

  pagination: {
    el: ".swiper-pagination-franchising",
  },

  breakpoints: {
    940: {
      slidesPerView: 3,
      spaceBetween: 40,
    },
  },
});

const newsSwiper = new Swiper("#news-swiper", {
  slidesPerView: 1,
  spaceBetween: 20,
  speed: 500,
  allowTouchMove: true,

  navigation: {
    prevEl: ".swiper-button-prev-news",
    nextEl: ".swiper-button-next-news",
  },

  pagination: {
    el: ".swiper-pagination-news",
  },

  breakpoints: {
    940: {
      slidesPerView: 3,
      spaceBetween: 40,
    },
  },
});

const eventsSwiper = new Swiper("#events-swiper", {
  slidesPerView: 1,
  spaceBetween: 20,
  speed: 500,
  allowTouchMove: true,

  navigation: {
    prevEl: ".swiper-button-prev-events",
    nextEl: ".swiper-button-next-events",
  },

  pagination: {
    el: ".swiper-pagination-events",
  },

  breakpoints: {
    940: {
      slidesPerView: 3,
      spaceBetween: 40,
    },
  },
});

const advertsSwiper = new Swiper("#adverts-swiper", {
  slidesPerView: 1,
  spaceBetween: 20,
  speed: 500,
  allowTouchMove: true,

  navigation: {
    prevEl: ".swiper-button-prev-adverts",
    nextEl: ".swiper-button-next-adverts",
  },

  pagination: {
    el: ".swiper-pagination-adverts",
  },

  breakpoints: {
    940: {
      slidesPerView: 3,
      spaceBetween: 80,
    },
  },
});

const tabButtons = document.querySelectorAll(".else-tab");
const tabContents = document.querySelectorAll(".else-list");

tabButtons.forEach((button) => {
  button.addEventListener("click", () => {
    id = button.getAttribute("data-tab");

    tabButtons.forEach((tab) => {
      tab.classList.remove("else-tab-active");
    });

    button.classList.add("else-tab-active");

    tabContents.forEach((tab) => {
      tab.classList.remove("else-active");
    });

    document.getElementById(id).classList.add("else-active");
  });
});
