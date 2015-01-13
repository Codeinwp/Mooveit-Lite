<?php
/**
 * 	The template for displaying Footer.
 *
 * 	@package ThemeIsle
 */
?>
<footer>
	<div class="footer-one cf">
		<div class="footer-one-container cf">
			<?php
				if ( is_active_sidebar( 'footer_sidebar' ) ) {
					dynamic_sidebar( 'footer_sidebar' );
				} else {
					echo '<span class="widget-not-active">'. __( 'The sidebar is not active.', 'mooveit_lite' ) .'</span>';
				}
			?>
		</div><!--/.footer-one-container .cf-->
	</div><!--/.footer-one .cf-->
	<div class="footer-two cf">
		<div class="wrap">
			<p>
				<?php _e( 'Copyright &copy;', 'mooveit_lite' ); ?> <a href="<?php echo home_url(); ?>" title="<?php _e( 'Mooveit Lite', 'mooveit_lite' ); ?>"><?php _e( 'Mooveit Lite', 'mooveit_lite' ); ?></a> <?php _e( 'is proudly powered by', 'mooveit_lite' ); ?> <a href="http://www.wordpress.org" title="<?php _e( 'WordPress', 'mooveit_lite' ); ?>" target="_blank"><?php _e( 'WordPress', 'mooveit_lite' ); ?></a><?php _e( '.', 'mooveit_lite' ); ?>
			</p>
		</div><!--/.wrap-->
	</div><!--/.footer-two-->
</footer><!--/footer-->

	<?php wp_footer(); ?>
	</body>
</html>