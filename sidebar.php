<?php
/**
 * 	The template for displaying Sidebar.
 *
 * 	@package ThemeIsle
 */
?>
<div class="sidebar">
	<?php
		if ( is_active_sidebar( 'general_sidebar' ) ) {
			dynamic_sidebar( 'general_sidebar' );
		} else {
			echo __( 'The sidebar is not active.', 'mooveit_lite' );
		}
	?>
</div><!--/.sidebar-->