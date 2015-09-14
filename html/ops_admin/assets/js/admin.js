$('.left_menu li.active').addClass('open');
$('.left_menu > li > a').bind('click', function () {
    if ($(this).parent().children('ul').hasClass('sub-menu') && (!$('body').hasClass('navigation-small') || !$(this).parent().parent().hasClass('left_menu'))) {
        if (!$(this).parent().hasClass('open')) {
            $(this).parent().addClass('open');
            $(this).parent().parent().children('li.open').not($(this).parent()).not($('.left_menu > li.active')).removeClass('open').children('ul').slideUp(500);
            $(this).parent().children('ul').slideDown(500, function () { });
        } else {
            if (!$(this).parent().hasClass('active')) {
                $(this).parent().parent().children('li.open').not($('.left_menu > li.active')).removeClass('open').children('ul').slideUp(500, function () { });
            } else {
                $(this).parent().parent().children('li.open').removeClass('open').children('ul').slideUp(500, function () { });
            }
        }
    }
});
    