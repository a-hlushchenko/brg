const header = document.querySelector(".header-wrapper");

wow = new WOW({
  boxClass: "wow", // default
  animateClass: "animated", // default
  offset: 0, // default
  mobile: true, // default
  live: true, // default
});
wow.init();

document.addEventListener("DOMContentLoaded", function () {
  $(".phoneInput").inputmask("mask", { mask: "+99 (999) 999-99-99" });
});

const openFeedbackList = document.querySelectorAll(".open-feedback");
const feedback = document.getElementById("feedback");
const feedbackContent = document.querySelector(".feedback");
const feedbackClose = document.querySelector(".feedback-close");

openFeedbackList.forEach((openFeedback) => {
  openFeedback.addEventListener("click", (e) => {
    e.preventDefault();
    feedback.classList.toggle("modal-wrapper-active", true);
    document.body.style.setProperty("overflow", "hidden");

    setTimeout(() => {
      window.addEventListener("click", feedbackListener);
    });
  });
});

function closeFeedback() {
  feedback.classList.toggle("modal-wrapper-active", false);
  document.body.style.removeProperty("overflow");
  window.removeEventListener("click", feedbackListener);
}

const feedbackListener = (e) => {
  if (!feedbackContent.contains(e.target)) {
    closeFeedback();
  }
};

feedbackClose.addEventListener("click", (e) => {
  e.preventDefault();
  closeFeedback();
});

const openRequestList = document.querySelectorAll(".open-request");
const request = document.getElementById("request");
const requestContent = document.querySelector(".request");
const requestClose = document.querySelector(".request-close");

openRequestList.forEach((openRequest) => {
  openRequest.addEventListener("click", (e) => {
    e.preventDefault();
    request.classList.toggle("modal-wrapper-active", true);
    document.body.style.setProperty("overflow", "hidden");

    setTimeout(() => {
      window.addEventListener("click", requestListener);
    });
  });
});

function closeRequest() {
  request.classList.toggle("modal-wrapper-active", false);
  document.body.style.removeProperty("overflow");
  window.removeEventListener("click", requestListener);
}

const requestListener = (e) => {
  if (!requestContent.contains(e.target)) {
    closeRequest();
  }
};

requestClose.addEventListener("click", (e) => {
  e.preventDefault();
  closeRequest();
});

const openPartner = document.querySelector(".open-partner");
const partner = document.getElementById("partner");
const partnerContent = document.querySelector(".partner");
const partnerClose = document.querySelector(".partner-close");

if (openPartner) {
  openPartner.addEventListener("click", (e) => {
    e.preventDefault();
    partner.classList.toggle("modal-wrapper-active", true);
    document.body.style.setProperty("overflow", "hidden");

    setTimeout(() => {
      window.addEventListener("click", partnerListener);
    });
  });
}

function closePartner() {
  partner.classList.toggle("modal-wrapper-active", false);
  document.body.style.removeProperty("overflow");
  window.removeEventListener("click", partnerListener);
}

const partnerListener = (e) => {
  if (!partnerContent.contains(e.target)) {
    closePartner();
  }
};

partnerClose.addEventListener("click", (e) => {
  e.preventDefault();
  closePartner();
});

window.addEventListener(
  "wpcf7mailsent",
  () => {
    closeRequest();
    closeFeedback();
    closePartner();
    alert("відправлено");
  },
  false
);

var currentURL = window.location.href;

// if (currentURL.includes("/en")) {
//   const feedbackButtonList = document.querySelectorAll(
//     ".action-button.open-feedback"
//   );
//   feedbackButtonList.forEach((feedbackButton) => {
//     feedbackButton.innerHTML = "Feedback";
//   });
// }

const menu = document.querySelectorAll(".menu");
const openMenu = document.querySelector(".header-menu-button");
let menuIsOpen = false;

openMenu.onclick = () => toggleMenu();

function toggleMenu() {
  if (menuIsOpen) {
    document.body.style.removeProperty("overflow");
    menu.forEach((menu) => menu.classList.toggle("menu-active", false));
    header.classList.toggle("header-menu-active", false);
    if (document.documentElement.scrollTop > 0 || document.body.scrollTop > 0) {
      headerLangList.classList.add("disabled");
      headerButton.classList.add("disabled");
    } else {
      headerLangList.classList.remove("disabled");
      headerButton.classList.remove("disabled");
    }
  } else {
    document.body.style.setProperty("overflow", "hidden");
    menu.forEach((menu) => menu.classList.toggle("menu-active", true));
    header.classList.toggle("header-menu-active", true);
    headerLangList.classList.remove("disabled");
    headerButton.classList.remove("disabled");
  }

  menuIsOpen = !menuIsOpen;
}

const langUa = document.querySelector(".header-lang-ua");
const langEn = document.querySelector(".header-lang-en");
const menuUa = document.querySelector(".menu");
const menuEn = document.querySelector(".menu-en");
const footerUa = document.querySelector(".footer");
const footerEn = document.querySelector(".footer-en");

const path = window.location.pathname;

if (path.startsWith("/en")) {
  langEn.classList.toggle("header-lang-active", true);
  langUa.classList.toggle("header-lang-active", false);

  menuEn.classList.toggle("menu-lang", true);
  menuUa.classList.toggle("menu-lang", false);

  footerEn.classList.toggle("footer-lang", true);
  footerUa.classList.toggle("footer-lang", false);
}

const headerLangList = document.querySelector(".header-lang-list");
const headerButton = document.querySelector(".header-contact-button");

document.addEventListener("scroll", (e) => {
  if (document.documentElement.scrollTop > 0 || document.body.scrollTop > 0) {
    headerLangList.classList.add("disabled");
    headerButton.classList.add("disabled");
  } else {
    headerLangList.classList.remove("disabled");
    headerButton.classList.remove("disabled");
  }
});

document.querySelectorAll(`.form-button`).forEach((el) => {
  el.addEventListener("click", () => {
    el.style.setProperty("pointer-events", "none");
    setTimeout(() => {
      el.style.setProperty("pointer-events", "auto");
    }, 2000);
  });
});

document.querySelector(".form-select option").disabled = true;

document.querySelectorAll(".input-file").forEach((item) => {
  item.addEventListener("click", () => {
    const input = item.querySelector(".input-file input");
    const label = item.querySelector(".input-file span");

    setTimeout(() => {
      input.classList.add("active");
      label.classList.add("disabled");
    });
  });
});
