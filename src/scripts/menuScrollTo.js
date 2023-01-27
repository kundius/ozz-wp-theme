const links = document.querySelectorAll('a[href*="#"]') || [];
const header = document.querySelector(".header");

links.forEach((link) => {
  link.addEventListener("click", (e) => {
    e.preventDefault();

    const target = document.querySelector(link.hash);
    const offset =
      target.getBoundingClientRect().top +
      window.pageYOffset -
      header.clientHeight;

    if (target) {
      window.scrollTo({
        top: offset,
        behavior: "smooth",
      });
    }
  });
});
