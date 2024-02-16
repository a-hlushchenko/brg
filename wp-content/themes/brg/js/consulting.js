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

const accompanyList = document.querySelectorAll(".accompany-item");

accompanyList.forEach((item) => {
  if (window.innerWidth < 768) {
    const button = item.querySelector(".accompany-open-button");
    const content = item.querySelector(".accompany-item-list");
    const height = content.offsetHeight;
    item.classList.toggle("close", true);
    content.style.height = `0px`;
    button.addEventListener("click", () => {
      if (item.classList.contains("close")) {
        accompanyList.forEach((el) => {
          el.classList.toggle("close", true);
          el.querySelector(".accompany-item-list").style.height = `0px`;
        });

        item.classList.toggle("close");
        content.style.height = `${height}px`;
      } else {
        accompanyList.forEach((el) => {
          el.classList.toggle("close", true);
          el.querySelector(".accompany-item-list").style.height = `0px`;
        });
      }
    });
  }
});

document.addEventListener("DOMContentLoaded", function () {
  const slider = document.querySelector(".slider-offer");
  const cards = document.querySelectorAll(".slide-offer");

  document
    .querySelector(".slide-offer:nth-child(1)")
    .classList.add("active-slide");
  document
    .querySelector(".slide-offer:nth-child(2)")
    .classList.add("next-slide");
  document
    .querySelector(".slide-offer:nth-child(3)")
    .classList.add("nnext-slide");
  document
    .querySelector(".slide-offer:nth-child(4)")
    .classList.add("prev-slide");

  let startX;

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
          card.classList.add("nnext-slide");
        } else if (card.classList.contains("nnext-slide")) {
          card.classList.remove("nnext-slide");
          card.classList.add("prev-slide");
        }
      });
    }

    // Якщо свайп вліво
    if (deltaX < 0) {
      cards.forEach((card) => {
        if (card.classList.contains("prev-slide")) {
          card.classList.remove("prev-slide");
          card.classList.add("nnext-slide");
        } else if (card.classList.contains("active-slide")) {
          card.classList.remove("active-slide");
          card.classList.add("prev-slide");
        } else if (card.classList.contains("next-slide")) {
          card.classList.remove("next-slide");
          card.classList.add("active-slide");
        } else if (card.classList.contains("nnext-slide")) {
          card.classList.remove("nnext-slide");
          card.classList.add("next-slide");
        }
      });
    }
  });
});
