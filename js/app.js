"use strict";

$(document).ready(function() {
  $(".slider__wrapper").slick({
    dots: true,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: "linear",
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    prevArrow:
      '<button class="slider__control slider__control_left" type="button"></button>',
    nextArrow:
      '<button class="slider__control slider__control_right slider__control_show" type="button"></button>'
  });
});

