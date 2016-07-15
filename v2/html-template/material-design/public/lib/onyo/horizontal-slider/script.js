(function() {
'use strict';

$(document).ready(function(){
	$('.onyo-slider-wrapper').addClass('remove-scroll-x');
	$('a[href^="#"]').on('click', function(event) {
		$('a.current').removeClass('current');

	    var target = $(this.getAttribute('href'));
	    if( target.length ) {
	        event.preventDefault();
	        $(this).addClass('current');
	        $('.onyo-slider-wrapper').stop().animate({
	            scrollLeft: target.offset().left
	        }, 1000);
	    }
	});
});

})();