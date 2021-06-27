//スライダー

const swiper = new Swiper(".mv__swiper", {
  // Optional parameters
  // direction: 'vertical',

  speed: 5500,
  loop: true,
  autoplay: {
    delay: 300,
  },
  effect: "fade",
  fadeEffect: {
    crossFade: true,
  },
  // If we need pagination
  pagination: {
    el: ".swiper-pagination",
  },

  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

// ----ハンバーガーメニュー-----//

document.getElementById("hamburger").addEventListener("click", function () {
  this.classList.toggle("active");
  document.getElementById("drawer").classList.toggle("active");
  document.getElementById("curtain").classList.toggle("active");
});
document.getElementById("drawer").addEventListener("click", function () {
  document.getElementById("hamburger").classList.toggle("active");
  this.classList.toggle("active");
  document.getElementById("curtain").classList.toggle("active");
});

document.getElementById("curtain").addEventListener("click", function () {
  document.getElementById("hamburger").classList.toggle("active");
  document.getElementById("drawer").classList.toggle("active");
  this.classList.toggle("active");
});
