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
  slidesPerView: 1,
  spaceBetween: 15,
  speed: 500,
  allowTouchMove: true,

  navigation: {
    nextEl: ".swiper-button-next-team1",
    prevEl: ".swiper-button-prev-team1",
  },

  breakpoints: {
    1100: {
      slidesPerView: 4,
      navigation: {
        nextEl: ".swiper-button-next-team1",
        prevEl: ".swiper-button-prev-team1",
      },
      spaceBetween: 36,
    },

    768: {
      slidesPerView: 3,
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

  pagination: {
    el: ".swiper-pagination-about",
  },

  breakpoints: {
    1100: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 15,
    },
  },
});

const restaurantSwiper = new Swiper("#restaurant", {
  slidesPerView: 1,
  spaceBetween: 20,
  speed: 500,
  allowTouchMove: true,
  effect: "cards",

  navigation: {
    prevEl: ".swiper-button-prev-restaurant",
    nextEl: ".swiper-button-next-restaurant",
  },

  pagination: {
    el: ".swiper-pagination-restaurant",
  },

  breakpoints: {
    1100: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 15,
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
    768: {
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
    1024: {
      slidesPerView: 3,
      spaceBetween: 40,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 15,
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
    1024: {
      slidesPerView: 3,
      spaceBetween: 40,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 15,
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
    1024: {
      slidesPerView: 3,
      spaceBetween: 40,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 15,
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
document.addEventListener("DOMContentLoaded", function () {
  const slider = document.querySelector(".slider-about");
  const cards = document.querySelectorAll(".slide-about");

  let startX;

  if (slider) {
    slider.addEventListener("touchstart", function (e) {
      startX = e.touches[0].clientX;
    });

    slider.addEventListener("touchend", function (e) {
      const endX = e.changedTouches[0].clientX;
      const deltaX = endX - startX;

      // Якщо свайп вправо
      if (deltaX > 0) {
        cards.forEach((card) => {
          if (card.classList.contains("prev-slide")) {
            card.classList.remove("prev-slide");
            card.classList.add("active-slide");
          } else if (card.classList.contains("active-slide")) {
            card.classList.remove("active-slide");
            card.classList.add("next-slide");
          } else if (card.classList.contains("next-slide")) {
            card.classList.remove("next-slide");
            card.classList.add("prev-slide");
          }
        });
      }

      // Якщо свайп вліво
      if (deltaX < 0) {
        cards.forEach((card) => {
          if (card.classList.contains("prev-slide")) {
            card.classList.remove("prev-slide");
            card.classList.add("next-slide");
          } else if (card.classList.contains("active-slide")) {
            card.classList.remove("active-slide");
            card.classList.add("prev-slide");
          } else if (card.classList.contains("next-slide")) {
            card.classList.remove("next-slide");
            card.classList.add("active-slide");
          }
        });
      }
    });
  }
});

const franchisingList = document.querySelectorAll(".franchising-item");

if (franchisingList) {
  franchisingList.forEach((item) => {
    if (window.innerWidth < 768) {
      const button = item.querySelector(".franchising-open-button");
      const content = item.querySelector(".franchising-item-list");
      const height = content.offsetHeight;
      item.classList.toggle("close", true);
      content.style.height = `0px`;
      button.addEventListener("click", () => {
        if (item.classList.contains("close")) {
          franchisingList.forEach((el) => {
            el.classList.toggle("close", true);
            el.querySelector(".franchising-item-list").style.height = `0px`;
          });

          item.classList.toggle("close");
          content.style.height = `${height}px`;
        } else {
          franchisingList.forEach((el) => {
            el.classList.toggle("close", true);
            el.querySelector(".franchising-item-list").style.height = `0px`;
          });
        }
      });
    }
  });
}
