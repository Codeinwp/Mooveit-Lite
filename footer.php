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
				Copyright &copy; <a href="" title="Movatique">Movatique</a> is proudly powered by <a href="" title="WordPress">WordPress</a>. All rights reserved.
			</p>
		</div><!--/.wrap-->
	</div><!--/.footer-two-->
</footer><!--/footer-->

	<?php wp_footer(); ?>
	</body>
</html>