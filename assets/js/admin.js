$('.left_menu li.active').addClass('open');
$('.left_menu > li > a').bind('click', function () {
    if ($(this).parent().children('ul').hasClass('sub-menu') && (!$('body').hasClass('navigation-small') || !$(this).parent().parent().hasClass('left_menu'))) {
	if (!$(this).parent().hasClass('open')) {
	    $(this).parent().addClass('open');
	    $(this).parent().parent().children('li.open').not($(this).parent()).not($('.left_menu > li.active')).removeClass('open').children('ul').slideUp(500);
	    $(this).parent().children('ul').slideDown(500, function () {
	    });
	} else {
	    if (!$(this).parent().hasClass('active')) {
		$(this).parent().parent().children('li.open').not($('.left_menu > li.active')).removeClass('open').children('ul').slideUp(500, function () {
		});
	    } else {
		$(this).parent().parent().children('li.open').removeClass('open').children('ul').slideUp(500, function () {
		});
	    }
	}
    }
});

$('.left_toggler').bind('click', function () {
    if ($('.left_toggler').hasClass('hide_left')) {
		$('.aside').show(700,function(){
			$('.pageContent').addClass('extended');
			$('.left_toggler').html('<i class="fa fa-times"></i>').removeClass('hide_left');	
		});
    } else {
		$('.aside').hide(700, function() { 
			$('.pageContent').removeClass('extended');
			$('.left_toggler').html('<i class="fa fa-outdent"></i>').addClass('hide_left');
		});


		
    }
});