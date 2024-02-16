const vacanciesList = document.querySelectorAll(".vacancies-item");

vacanciesList.forEach((item) => {
  const button = item.querySelector(".vacancies-details-button");
  const content = item.querySelector(".vacancies-details");
  const height = content.offsetHeight;
  item.classList.toggle("vacancies-active", false);
  content.style.height = `0px`;

  console.log(content);

  button.addEventListener("click", () => {
    if (!item.classList.contains("vacancies-active")) {
      vacanciesList.forEach((el) => {
        el.classList.toggle("vacancies-active", false);
        el.querySelector(".vacancies-details").style.height = `0px`;
      });

      item.classList.toggle("vacancies-active");
      content.style.height = `${height + 2}px`;
    } else {
      vacanciesList.forEach((el) => {
        el.classList.toggle("vacancies-active", false);
        el.querySelector(".vacancies-details").style.height = `0px`;
      });
    }
  });
});
