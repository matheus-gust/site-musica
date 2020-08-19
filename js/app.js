var $target = $('.anime'),
    animationClass = 'anime-start';

function animeScroll() {
    var documentTop = $(document).scrollTop();
    offset = $(window).height() * 3 / 5;

    $target.each(function() {
        var itemTop = $(this).offset().top;
        if (documentTop > itemTop - offset) {
            $(this).addClass(animationClass);
        } else {
            $(this).removeClass(animationClass);
        }
    })
}

animeScroll();

$(document).scroll(function() {
    animeScroll();
})