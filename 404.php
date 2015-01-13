<?php
/**
 * 	The template for displaying 404 page.
 *
 * 	@package ThemeIsle
 */
get_header();
?>
<div class="wrap cf">
	<div class="blog-title">
		<h3>
			<?php
			if ( get_theme_mod( 'mooveit_lite_404_title' ) ) {
				echo get_theme_mod( 'mooveit_lite_404_title' );
			} else {
				echo __( '404 Error', 'mooveit_lite' );
			}
			?>
		</h3>
	</div><!--/.blog-title-->
	<div class="error-subtitle">
		<?php
		if ( get_theme_mod( 'mooveit_lite_404_subtitle' ) ) {
			echo get_theme_mod( 'mooveit_lite_404_subtitle' );
		} else {
			echo __( 'The page does not exist', 'mooveit_lite' );
		}
		?>
	</div><!--/.404-subtitle-->
	<div class="error-entry">
		<?php
		if ( get_theme_mod( 'mooveit_lite_404_content' ) ) {
			echo get_theme_mod( 'mooveit_lite_404_content' );
		} else {
			echo __( 'Oops, I screwed up and you discovered my fatal flaw. Well, we\'re not all perfect, but we try.  Can you try this again or maybe visit our <a title="themeIsle" href="'. esc_url( home_url() ) .'">Home Page</a> to start fresh.  We\'ll do better next time.', 'mooveit_lite' );
		}
		?>
	</div><!--/.error-entry-->
	<div class="error-message">
		<?php _e( '404', 'mooveit_lite' ); ?>
	</div><!--/.error-message-->
</div><!--/.wrap .cf-->
<?php get_footer(); ?>