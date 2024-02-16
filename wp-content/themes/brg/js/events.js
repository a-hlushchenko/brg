const eventsList = document.querySelectorAll(".events-item-wrapper");

eventsList.forEach((item) => {
  const button = item.querySelector(".event-details-button");
  const content = item.querySelector(".event-details");
  const height = content.offsetHeight;
  item.classList.toggle("event-active", false);
  content.style.height = `0px`;

  console.log(item);

  button.addEventListener("click", () => {
    if (!item.classList.contains("event-active")) {
      eventsList.forEach((el) => {
        el.classList.toggle("event-active", false);
        el.querySelector(".event-details").style.height = `0px`;
      });

      item.classList.toggle("event-active");
      content.style.height = `${height + 2}px`;
    } else {
      eventsList.forEach((el) => {
        el.classList.toggle("event-active", false);
        el.querySelector(".event-details").style.height = `0px`;
      });
    }
  });
});
