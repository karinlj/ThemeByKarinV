jQuery(document).ready(function ($) {
  $(".getmoreinfo").click(function () {
    $(this).next().toggleClass("open");
    $(".course").toggleClass("active");
  });

  /*My mobile menu*/
  /*when click on veggoburger...add or remove class */

  $(".toggle").click(function () {
    $(".nav-mobile").toggleClass("nav-mobile-open");
  });

  /*when click on menu item...add or remove class */

  $(".nav-mobile ul li a").click(function () {
    $(".nav-mobile").toggleClass("nav-mobile-open");
  });
});
