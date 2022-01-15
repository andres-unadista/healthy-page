$(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 150) {
      $('header nav').addClass("color-primary");
      $('header nav li a').addClass("color-text");
    } else {
      $("header nav").removeClass("color-primary");
      $('header nav li a').removeClass("color-text");
    }
  });
});