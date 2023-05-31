const mobileMenuButton = document.querySelectorAll(
    ".header-mobile-bar > .mobile-menu-button",
  );

mobileMenuButton.forEach((btn) => {
    btn.addEventListener("click", () => {
      document.querySelector(".header-mobile").classList.toggle("active");
    });
  });