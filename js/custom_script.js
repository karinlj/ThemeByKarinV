jQuery(document).ready(function ($) {
  //toggle course info
  $(".getmoreinfo").click(function () {
    $(this).next().toggleClass("open");
    //console.log(event.target);
    $(this).children(".course").toggleClass("active");
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
