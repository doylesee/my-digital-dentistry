$(document).foundation();
$(document).ready(function(){
	// Header Menu SlickNav function call
	$('#header__menu-js').slicknav();
	
	// Smooth scrolling to # links
	$(function() {
		$('#header__menu-js a[href*=#]:not([href=#])').click(function() {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			$('html,body').animate({
				scrollTop: target.offset().top-80
			}, 1000);
			return false;
		});
	});
	
	$(window).scroll(function() {
		// Header section sticky
		if ($(window).scrollTop() > $('#header-anchor-js').offset().top) {
			$('#header-js').addClass('sticky');
		} else {
			$('#header-js').removeClass('sticky');
		}
		
		// Detect section and add specific classes
		$('.effects').each(function(){
			if ($(window).scrollTop() > ($(this).offset().top-500)) {
				if ($(this).hasClass('effects--fade-in')) {
					$(this).addClass('fadeIn');
				}
				else if ($(this).hasClass('effects--fade-in-left')) {
					$(this).addClass('slideLeft');
				}
				else if ($(this).hasClass('effects--fade-in-right')) {
					$(this).addClass('slideRight');
				}
				else if ($(this).hasClass('effects--fade-in-up')) {
					$(this).addClass('slideUp');
				}
			}
		});
	});
});
$(window).load(function() {
	$('#pre-loaders').fadeOut();
	$('#page-content').fadeIn();
});