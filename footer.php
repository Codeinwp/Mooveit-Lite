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
				<?php _e( 'Copyright &copy;', 'mooveit_lite' ); ?> <a href="<?php echo esc_url( home_url() ); ?>" title="<?php _e( 'Mooveit Lite', 'mooveit_lite' ); ?>"><?php _e( 'Mooveit Lite', 'mooveit_lite' ); ?></a> <?php _e( 'is proudly powered by', 'mooveit_lite' ); ?> <a href="http://www.wordpress.org" title="<?php _e( 'WordPress', 'mooveit_lite' ); ?>" target="_blank"><?php _e( 'WordPress', 'mooveit_lite' ); ?></a><?php _e( '.', 'mooveit_lite' ); ?>
			</p>
		</div><!--/.wrap-->
	</div><!--/.footer-two-->
</footer><!--/footer-->

	<?php wp_footer(); ?>
	</body>
</html>