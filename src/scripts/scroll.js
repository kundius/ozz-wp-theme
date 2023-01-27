import { throttle } from "./throttle";

const onScroll = () => {
  const scrollPosition =
    document.documentElement.scrollTop || document.body.scrollTop;

  if (scrollPosition > 300) {
    document.body.classList.add('float-visible')
  } else {
    document.body.classList.remove('float-visible')
  }
};

window.addEventListener("scroll", throttle(onScroll, 100));

document.querySelector(".scroll-up").addEventListener("click", () => {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
});
