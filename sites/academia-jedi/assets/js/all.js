$(document).ready(function(){

  // BTN Menu
  $('.menu-toggle').click(function(){
    $('.nav-bar').toggleClass('open');
    $('#btn-menu').toggleClass('open');
    $('#logo').toggleClass('color-logo');
  });

  $('.menu-dropdown a').click(function(){
    $('.dropdown').toggleClass('open');
  });


  // $('#slides').superslides({
  //     play: 5000,
  //     animation: 'fade',
  //     inherit_width_from: ".wrapper-video",
  //     inherit_height_from: ".wrapper-video"
  //   });
});

$(window).on("load", function() {
  "use strict";
  $('.preloader').fadeOut();
});