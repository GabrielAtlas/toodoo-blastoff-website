const apprenticeshipButtons = document.querySelectorAll(
  ".apprenticeship-list > .apprenticeship-button",
);
const destinyScrollDown = document.querySelector(
  ".section-information",
).offsetTop;
const scrollDownButton = document.querySelector(
  ".page-blastoff .scroll-down-button",
);
const headerDesktopHeight = document.querySelector(
  ".header > .header-desktop",
).offsetHeight;
const headerMobileHeight = document.querySelector(
  ".header > .header-mobile",
).offsetHeight;

const depositionsCards = document.querySelectorAll(
  ".students-list .students-list-item",
);

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

apprenticeshipButtons.forEach((button) => {
  button.addEventListener("click", () => {
    const currentItem = document.querySelector(
      ".apprenticeship-list > .apprenticeship-list-item.active",
    );
    const nextItem = button.classList.contains("previous") ? -1 : 1;
    updateApprenticeshipCarousel(currentItem, nextItem);
  });
});

scrollDownButton.addEventListener("click", () => {
  if (window.innerWidth >= 1200) {
    window.scroll(0, destinyScrollDown - headerDesktopHeight);
    console.log("desktop");
  } else {
    console.log("mobile");
    window.scroll(0, destinyScrollDown);
  }
});

depositionsCards.forEach((card) => {
  card.addEventListener("click", () => {
    const cardIndex = card.getAttribute("data-list-item");
    const currentActive = document.querySelector(
      ".students-tip-list > .students-tip-item.active",
    );
    const nextActive = document.querySelector(
      `.students-tip-list > .students-tip-item[data-list-item="${cardIndex}"]`,
    );
    currentActive.classList.remove("active");
    nextActive.classList.add("active");

    const data = card.querySelector(".depositions-container");
    const studentInfo = {
      profileImage: data.querySelector(".the-image").textContent,
      name: data.querySelector(".the-name").textContent,
      deposition: data.querySelector(".the-depositions").textContent,
    };

    const positionDisplay = document.querySelector(
      ".section-depositions .students-depositions",
    );
    positionDisplay.querySelector(".student-information-container h3").textContent = studentInfo.name;
    positionDisplay.querySelector(".student-information-container .student-text").textContent = studentInfo.deposition;
    positionDisplay.querySelector(".student-image img").setAttribute("src", studentInfo.profileImage);
  });
});
