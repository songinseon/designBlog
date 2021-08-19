$('html').niceScroll();

var swiper = new Swiper(".mySwiper", {
  slidesPerView: 4,
  spaceBetween: 1,
  slidesPerGroup: 1,
  loop: true,
  loopFillGroupWithBlank: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});