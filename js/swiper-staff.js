const theWrapper = document.getElementById('swiperWrapper');
const mySwiper = new Swiper('.swiper-container', {
  freeMode: true,
  loop: true,
  loopedSlides: 8,
  slidesPerView: 2,
  spaceBetween: 10,
  breakpoints: {//breakpoints
    768: {
      slidesPerView: 4,
      spaceBetween: 20,
    },
  },
  speed: 10000,
  autoplay: {
    delay: 0,
  },
  on: {
    slideChangeTransitionStart: function () {
      theWrapper.style.transitionTimingFunction = 'linear';
    }
  },
});