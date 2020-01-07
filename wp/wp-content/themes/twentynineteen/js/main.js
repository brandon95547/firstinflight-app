"use strict";

$(function () {
  var appTopHeight = $('.app-header .top').innerHeight();
  $('.app-header .bottom').height(window.innerHeight - appTopHeight);
  $(window).resize(function () {
    var targetHeight = window.innerHeight - appTopHeight;

    if (targetHeight < 614) {
      targetHeight = 614;
    }

    $('.app-header .bottom').height(targetHeight);
  });

  if (window.innerWidth >= 992) {
    adjustTop();
  }

  $(window).scroll(function () {
    if (window.innerWidth >= 992) {
      adjustTop();
    }
  });
  $('[data-scroll]').on("click", function (e) {
    e.preventDefault();
    var target = $(this).attr('data-scroll');
    var offset = target != '#home' ? $(target).offset().top - appTopHeight : 0;
    $('html, body').animate({
      scrollTop: offset
    }, 1000);
  });
});

function adjustTop() {
  var $ = jQuery;
  var target = $('.app-header .top');
  var scrollPos = $(document).scrollTop();
  var appTopHeight = $('.app-header .top').innerHeight();

  if (scrollPos >= 50) {
    if (!target.hasClass('fixed-top')) {
      target.addClass('fixed-top');
      target.addClass('fadeIn animated');
      $('body').css('padding-top', appTopHeight);
    }
  } else {
    target.removeClass('fixed-top');
    target.removeClass('fadeIn animated');
    $('body').css('padding-top', 0);
  }
}