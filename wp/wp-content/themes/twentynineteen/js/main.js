"use strict";

$(function () {
  var appTopHeight = $('.app-header .top').height();
  $('.app-header .bottom').height(window.innerHeight - appTopHeight);
  $(window).resize(function () {
    var targetHeight = window.innerHeight - appTopHeight;

    if (targetHeight < 614) {
      targetHeight = 614;
    }

    $('.app-header .bottom').height(targetHeight);
  });
  adjustTop();
  $(window).scroll(function () {
    adjustTop();
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
  var target = $('.app-header .top');
  var scrollPos = $(document).scrollTop();
  var appTopHeight = $('.app-header .top').innerHeight();

  if (scrollPos >= 50) {
    if (!target.hasClass('fixed-top')) {
      setTimeout(function () {
        target.addClass('fixed-top');
        target.addClass('fadeIn animated');
        $('body').css('padding-top', appTopHeight);
      }, 500);
    }
  } else {
    target.removeClass('fixed-top');
    target.removeClass('fadeIn animated');
    $('body').css('padding-top', 0);
  }
}