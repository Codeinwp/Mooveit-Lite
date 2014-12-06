/**
 *	Testimonials
 */
jQuery(document).ready(function($) {
	$('#foo4').carouFredSel({
		responsive: true,
		width: '100%',
		scroll: 2,
		prev: '.testimonials-navigation-prev',
		next: '.testimonials-navigation-next',
		items: {
			width: 800,
			visible: {
				min: 1,
				max: 6
			}
		}
	});

	/**
	 *	Responsive Menu
	 */
	$('.openresponsivemenu').click(function() {
		$('ul').toggleClass("responsivemenu");
	});
});


/**
 *	Limit Menu
 */
var full_width = 0;

jQuery("nav ul:first > li").each(function( index ) {
	if((jQuery(this).width() + full_width) > 600) {
		jQuery(this).remove();
	}
	full_width = full_width + jQuery(this).width();
});