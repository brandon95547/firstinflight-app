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

    if(window.innerWidth >= 992) {
        adjustTop();
    }

    $(window).scroll(function () {
        if(window.innerWidth >= 992) {
            adjustTop();
        }
    });

    $('[data-scroll]').on("click", function (e) {
        e.preventDefault();
        let target = $(this).attr('data-scroll');
        let offset = target != '#home' ? $(target).offset().top - appTopHeight : 0;
        $('html, body').animate({
            scrollTop: offset
        }, 1000);
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
                $('body').css('padding-top', appTopHeight)
            }, 500);
        }
    } else {
        // remember since the top uses a timeout, we must use the same timeout on the recall
        setTimeout(function () {
            target.removeClass('fixed-top');
            target.removeClass('fadeIn animated');
            $('body').css('padding-top', 0)
        }, 500);
    }
}