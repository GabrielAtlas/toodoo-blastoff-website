const apprenticeshipButtons = document.querySelectorAll(
  ".apprenticeship-list > .apprenticeship-button",
);
apprenticeshipButtons.forEach((button) => {
  button.addEventListener("click", () => {
    const currentItem = document.querySelector(
      ".apprenticeship-list > .apprenticeship-list-item.active",
    );
    const nextItem = button.classList.contains("previous") ? -1 : 1;
    updateApprenticeshipCarousel(currentItem, nextItem);
  });
});

function updateApprenticeshipCarousel(currentItem, nextItem) {
  const valueCurrentItem = currentItem.getAttribute("data-list-item");
  const valueNextItem = () => {
    if (+valueCurrentItem + nextItem > 3) {
      return 0;
    }
    if (+valueCurrentItem + nextItem < 0) {
      return 3;
    }
    return +valueCurrentItem + nextItem;
  };
  const newCurrentItem = document.querySelector(
    `.apprenticeship-list [data-list-item="${valueNextItem()}"]`,
  );
  const currentTipItem = document.querySelector(
    ".apprenticeship-tip-list > .apprenticeship-tip-item.active",
  );
  const newCurrentTipItem = document.querySelector(
    `.apprenticeship-tip-list [data-list-item="${valueNextItem()}"]`,
  );

  currentItem.classList.remove("active");
  currentTipItem.classList.remove("active");
  newCurrentItem.classList.add("active");
  newCurrentTipItem.classList.add("active");
}

const destinyScrollDown = document.querySelector(".section-information").offsetTop;
const scrollDownButton = document.querySelector(".page-blastoff .scroll-down-button");
const headerHeight = document.querySelector('.header > section').offsetHeight;
scrollDownButton.addEventListener("click", () => {
  window.scroll(0, destinyScrollDown - headerHeight);
});
