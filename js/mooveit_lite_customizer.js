jQuery(document).ready(function() {

	jQuery( '.wp-full-overlay-sidebar-content' ).prepend( '<div style="width: 80%; margin: 20px auto; display: block; text-align: center;">'+ medica_lite_buttons.plans +'</div>' );
	jQuery( '.wp-full-overlay-sidebar-content' ).prepend( '<div style="width: 80%; margin: 20px auto; display: block; text-align: center;">'+ medica_lite_buttons.testimonials +'</div>' );
	jQuery( '.wp-full-overlay-sidebar-content' ).prepend( '<a style="width: 80%; margin: 5px auto; display: block; text-align: center;" href="https://themeisle.com/documentation-mooveit-lite" class="button" target="_blank">'+ medica_lite_buttons.doc +'</a>' );
	jQuery( '.wp-full-overlay-sidebar-content' ).prepend( '<a style="width: 80%; margin: 20px auto 5px auto; display: block; text-align: center;" href="https://themeisle.com/themes/mooveit/" class="button" target="_blank">'+ medica_lite_buttons.pro +'</a>' );

	jQuery( ".wp-full-overlay-sidebar-content .sidebar-content-title" ).css({
		"width"		: "100%",
		"display"	: "block",
		"font-size"	: "15px"
	});
	jQuery( ".wp-full-overlay-sidebar-content .sidebar-content-description" ).css({
		"width"			: "100%",
		"display"		: "block",
		"font-style"	: "italic"
	});

});