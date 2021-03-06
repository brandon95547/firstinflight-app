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
    let target = $(this).attr('data-scroll');
    let offset = target != '#home' ? $(target).offset().top - appTopHeight : 0;
    $('html, body').animate({
      scrollTop: offset
    }, 1000);
  });
  const form = document.getElementById('contact');
  const xhttp = new XMLHttpRequest();

  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      console.log(this.responseText);
    }
  };

  form.addEventListener('submit', function (e) {
    e.preventDefault();
    xhttp.open("POST", "contact.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("fname=Henry&lname=Ford");
  });
});

function adjustTop() {
  let target = $('.app-header .top');
  let scrollPos = $(document).scrollTop();
  let appTopHeight = $('.app-header .top').innerHeight();

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