<?php
/**
 * 	The template for displaying Footer.
 *
 * 	@package ThemeIsle
 */
?>
<footer>
	<?php
	if ( is_active_sidebar( 'footer_sidebar' ) ) {

		echo '<div class="footer-one cf">';
		echo '<div class="footer-one-container cf">';
		dynamic_sidebar( 'footer_sidebar' );
		echo '</div><!--/.footer-one-container .cf-->';
		echo '</div><!--/.footer-one .cf-->';

	}
	?>
	</div><!--/.footer-one .cf-->
	<div class="footer-two cf">
		<div class="wrap">
			<p>
				<?php echo esc_textarea( get_theme_mod( 'mooveit_lite_general_subheader_copyright', 'Copyright' ) ); ?> &copy; <a href="<?php echo esc_url( home_url() ); ?>" title="<?php bloginfo( 'name' ); ?>"><?php bloginfo( 'name' ); ?></a> | Proudly powered by <a href="http://www.wordpress.org" title="WordPress" target="_blank">WordPress</a>.
		</div><!--/.wrap-->
	</div><!--/.footer-two-->
</footer><!--/footer-->

	<?php wp_footer(); ?>
	</body>
</html>