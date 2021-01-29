// Scroll to top button appear
$(document).on('scroll', function() {
    var scrollDistance = $(this).scrollTop();
    if (scrollDistance > 100) {
      $('.scroll-to-top').fadeIn();
    } else {
      $('.scroll-to-top').fadeOut();
    }
});


$('.page-scroll').on('click', function(e) {
	$('html, body').animate({
		scrollTop: $($(this).attr('href')).offset().top - 50
	}, 1200, 'easeInOutExpo');
	e.preventDefault();
});