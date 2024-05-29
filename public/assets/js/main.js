$(document).ready(function () {
  $(".hamburger").click(function () {
    $(".top-menu").css("right", "0");
  });
  $(".close").click(function () {
    $(".top-menu").css("right", "-100vw");
  });

  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

});