$(document).ready(function () {
  // Your code here

  $(".wrapper").slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    nextArrow: $(".next"),
    prevArrow: $(".prev"),
    pauseOnHover: true,
    pauseOnFocus: true,
  });
});
