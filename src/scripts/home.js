import Swiper, { Pagination, EffectFade, Thumbs, Navigation } from "swiper";

const swiper = new Swiper(".intro-swiper", {
  modules: [Pagination, EffectFade],
  grabCursor: true,
  speed: 1000,
  pagination: {
    el: ".intro__pagination",
    clickable: true,
  },
  effect: "fade",
});

const swiperProjctsThumbs = new Swiper(".projects-swiper-thumbs", {
  modules: [Navigation],
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  spaceBetween: 20,
  slidesPerView: 3,
  freeMode: true,
  watchSlidesProgress: true,
});

const swiperProjctsMain = new Swiper(".projects-swiper-main", {
  modules: [Thumbs],
  spaceBetween: 20,
  thumbs: {
    swiper: swiperProjctsThumbs,
  },
});
