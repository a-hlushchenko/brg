const vacanciesList = document.querySelectorAll(".vacancies-item");

vacanciesList.forEach((vacancies) => {
  const button = vacancies.querySelector(".vacancies-details-button");

  button.onclick = () => {
    vacancies.classList.toggle("vacancies-active");
  };
});
