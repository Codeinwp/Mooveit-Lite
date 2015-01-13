<?php
/**
 *	The template for displaying Subheader.
 *
 *	@package ThemeIsle
 */

if ( is_home() ) {
	if ( get_theme_mod( 'ti_header_articletitle' ) || get_theme_mod( 'ti_header_articleentry' ) || get_theme_mod( 'ti_header_articlelink' ) ) {
		$subheader_id = 'subheader';
	} else {
		$subheader_id = 'no-subheader';
	}
} else {
	$subheader_id = '';
}
?>
<section id="<?php echo $subheader_id; ?>" class="cf">
	<div class="subheader-wrap cf">
		<?php
		if ( is_home() ) {

			if ( get_theme_mod( 'ti_header_articletitle' ) || get_theme_mod( 'ti_header_articleentry' ) || get_theme_mod( 'ti_header_articlelink' ) ) {
				echo '<div class="subheader-background">';
				echo '</div>';
			}
		}
		?>
		<nav>
			<?php

			if ( ( get_theme_mod( 'ti_header_youtube' ) || get_theme_mod( 'ti_header_facebook' ) || get_theme_mod( 'ti_header_googleplus' ) || get_theme_mod( 'ti_header_twitter' ) ) == NULL ) { ?>

				<style>
					.navigation {
						width: 100% !important;
					}
				</style>

			<?php } ?>
			<div class="openresponsivemenu">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="32" viewBox="0 0 32 32">
					<path d="M0 12h22v4h-22v-4zM0 6h22v4h-22v-4zM0 18h22v4h-22v-4zM0 24h22v4h-22v-4zM24 18l4 6 4-6h-8zM32 16l-4-6-4 6h8z" fill="#fff" />
				</svg>
			</div><!--/.openresponsivemenu-->
			<?php
			wp_nav_menu( array(
					'theme_location'	=> 'header-menu',
					'menu_class'		=> 'navigation cf',
					'container'			=> '',
					'container_class'	=> ''
				)
			);

			if ( get_theme_mod( 'ti_header_youtube' ) || get_theme_mod( 'ti_header_facebook' ) || get_theme_mod( 'ti_header_googleplus' ) || get_theme_mod( 'ti_header_twitter' ) ) { ?>

				<div class="socials-box">
					<?php
					if ( get_theme_mod( 'ti_header_youtube' ) ) {
						echo '<a href="'. get_theme_mod( 'ti_header_youtube' ) .'" title="'. __( 'YouTube', 'mooveit_lite' ) .'" class="youtube-icon"></a>';
					}

					if ( get_theme_mod( 'ti_header_facebook' ) ) {
						echo '<a href="'. get_theme_mod( 'ti_header_facebook' ) .'" title="'. __( 'Facebook', 'mooveit_lite' ) .'" class="facebook-icon"></a>';
					}

					if ( get_theme_mod( 'ti_header_googleplus' ) ) {
						echo '<a href="'. get_theme_mod( 'ti_header_googleplus' ) .'" title="'. __( 'Google+', 'mooveit_lite' ) .'" class="googleplus-icon"></a>';
					}

					if ( get_theme_mod( 'ti_header_twitter' ) ) {
						echo '<a href="'. get_theme_mod( 'ti_header_twitter' ) .'" title="'. __( 'Twitter', 'mooveit_lite' ) .'" class="twitter-icon"></a>';
					}
					?>
				</div><!--/.socials-box-->

			<?php }
			?>
		</nav>
		<?php
		if ( is_home() ) {

			if ( get_theme_mod( 'ti_header_articletitle' ) || get_theme_mod( 'ti_header_articleentry' ) || get_theme_mod( 'ti_header_articlelink' ) ) {

				echo '<div class="subheader-wrap-content">';

				if ( get_theme_mod( 'ti_header_articletitle' ) ) {
					echo '<h3>'. get_theme_mod( 'ti_header_articletitle' ) .'</h3>';
				}

				if ( get_theme_mod( 'ti_header_articleentry' ) ) {
					echo '<p>'. get_theme_mod( 'ti_header_articleentry' ) .'</p>';
				}

				if ( get_theme_mod( 'ti_header_articlelink' ) ) {
					echo '<a href="'. get_theme_mod( 'ti_header_articlelink' ) .'" title="'. __( 'Read More', 'mooveit_lite' ) .'">'. __( 'Read more', 'mooveit_lite' ) .'</a>';
				}

				echo '</div><!--/.subheader-wrap-content-->';

			}

		}
		?>
	</div><!--/.wrap-->
</section><!--/#subheader-->