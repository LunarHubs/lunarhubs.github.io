const scrollToTopButton = document.querySelector(".scroll-to-top");

window.addEventListener("scroll", () => {
  if (window.pageYOffset > 10) {
    scrollToTopButton.classList.add("show");
  } else {
    scrollToTopButton.classList.remove("show");
  }
});

scrollToTopButton.addEventListener("click", () => {
  window.scrollTo({
    top: 0,
    behavior: "smooth"
  });
});
