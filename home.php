<?php
/**
 * 	The template for displaying Front Page.
 *
 * 	@package ThemeIsle
 */
get_header();

get_template_part( 'includes/subheader' );

if ( !get_theme_mod( 'ti_header_contactform7_shortcode' ) ) {
	$h3_class = 'class="h3-no-contact-form"';
} else {
	$h3_class = '';
}
?>
<section id="features-two">
	<div class="wrap">
		<h3 <?php echo $h3_class; ?>>
			<?php
			if ( get_theme_mod( 'mooveit_lite_frontpage_subheader_title' ) != false ) {
				echo esc_attr( get_theme_mod( 'mooveit_lite_frontpage_subheader_title' ) );
			} else {
				echo __( 'Why Choose Us?', 'mooveit_lite' );
			}
			?>
		</h3>
		<div class="features-two-container cf">
			<div class="features-box">
				<div class="features-box-icon">
				</div><!--/.features-box-icon-->
				<?php
				if ( get_theme_mod( 'mooveit_lite_frontpage_firstlybox_title' ) ) {
					echo '<h4>'. esc_attr( get_theme_mod( 'mooveit_lite_frontpage_firstlybox_title' ) ) .'</h4>';
				} else {
					echo '<h4>'. __( 'Title one', 'mooveit_lite' ) .'</h4>';
				}

				if ( get_theme_mod( 'mooveit_lite_frontpage_firstlybox_content' ) ) {
					echo '<div class="features-box-entry">'. get_theme_mod( 'mooveit_lite_frontpage_firstlybox_content' ) .'</div>';
				} else {
					echo '<div class="features-box-entry">'. __( 'Go to Appearance - Customize, to add content.', 'mooveit_lite' ) .'</div>';
				}
				?>
			</div><!--/.features-box-->
			<div class="features-box">
				<div class="features-box-icon">
				</div><!--/.features-box-icon-->
				<?php
				if ( get_theme_mod( 'mooveit_lite_frontpage_secondlybox_title' ) ) {
					echo '<h4>'. esc_attr( get_theme_mod( 'mooveit_lite_frontpage_secondlybox_title' ) ) .'</h4>';
				} else {
					echo '<h4>'. __( 'Title two', 'mooveit_lite' ) .'</h4>';
				}

				if ( get_theme_mod( 'mooveit_lite_frontpage_secondlybox_content' ) ) {
					echo '<div class="features-box-entry">'. get_theme_mod( 'mooveit_lite_frontpage_secondlybox_content' ) .'</div>';
				} else {
					echo '<div class="features-box-entry">'. __( 'Go to Appearance - Customize, to add content.', 'mooveit_lite' ) .'</div>';
				}
				?>
			</div><!--/.features-box-->
			<div class="features-box">
				<div class="features-box-icon">
				</div><!--/.features-box-icon-->
				<?php
				if ( get_theme_mod( 'mooveit_lite_frontpage_thirdlybox_title' ) ) {
					echo '<h4>'. esc_attr( get_theme_mod( 'mooveit_lite_frontpage_thirdlybox_title' ) ) .'</h4>';
				} else {
					echo '<h4>'. __( 'Title two', 'mooveit_lite' ) .'</h4>';
				}

				if ( get_theme_mod( 'mooveit_lite_frontpage_thirdlybox_content' ) ) {
					echo '<div class="features-box-entry">'. get_theme_mod( 'mooveit_lite_frontpage_thirdlybox_content' ) .'</div>';
				} else {
					echo '<div class="features-box-entry">'. __( 'Go to Appearance - Customize, to add content.', 'mooveit_lite' ) .'</div>';
				}
				?>
			</div><!--/.features-box-->
		</div><!--/.features-two-container.cf-->
	</div><!--/.wrap-->
</section><!--/#features-two-->
<div class="wrap">
	<article id="content-article" class="cf">
		<div class="content-article-image">
			<?php
			if ( get_theme_mod( 'mooveit_lite_frontpage_article_image' ) ) {
				echo '<img src="'. esc_url( get_theme_mod( 'mooveit_lite_frontpage_article_image' ) ) .'" alt="'. esc_attr( get_theme_mod( 'mooveit_lite_frontpage_article_title' ) ) .'" title="'. esc_attr( get_theme_mod( 'mooveit_lite_frontpage_article_title' ) ) .'" />';
			} else {
				echo '<img src="'. get_template_directory_uri() .'/images/index-article-image.png" alt="'. esc_attr( get_theme_mod( 'mooveit_lite_frontpage_article_title' ) ) .'" title="'. esc_attr( get_theme_mod( 'mooveit_lite_frontpage_article_title' ) ) .'" />';
			}
			?>
		</div><!--/.content-article-image-->
		<h2>
			<?php
			if ( get_theme_mod( 'mooveit_lite_frontpage_article_title' ) != false ) {
				echo esc_attr( get_theme_mod( 'mooveit_lite_frontpage_article_title' ) );
			} else {
				echo __( 'About our services', 'mooveit_lite' );
			}
			?>
		</h2>
		<p>
			<?php
			if ( get_theme_mod( 'mooveit_lite_frontpage_article_content' ) != false ) {
				echo get_theme_mod( 'mooveit_lite_frontpage_article_content' );
			} else {
				echo __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt.', 'mooveit_lite' );
			}
			?>
		</p>
	</article><!--/#content-article-->
</div><!--/.wrap-->
<div class="wrap">
	<div id="latest-posts">
		<div class="title-border">
			<h3><?php _e( 'Latest Posts', 'mooveit_lite' ); ?></h3>
		</div><!--/.title-border-->
		<div class="latest-posts cf">
			<?php
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post(); ?>

					<div id="post-<?php the_ID(); ?>" <?php post_class( 'latest-post' ); ?>>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="latest-post-title">
							<?php the_title(); ?>
						</a><!--/.latest-post-title-->
						<div class="latest-post-entry">
							<?php the_excerpt(); ?>
						</div><!--/.latest-post-entry-->
					</div><!--/.latest-post-->

				<?php }
			} else {
				echo __( 'No posts found.', 'mooveit_lite' );
			}
			?>
		</div><!--/.latest-posts.cf-->
	</div><!--/#latest-posts-->
</div><!--/.wrap-->
<div class="wrap">
	<section class="content">
		<div class="title-border">
			<h3>
				<?php
				if ( get_theme_mod( 'mooveit_lite_frontpage_ourclients_title' ) != false ) {
					echo esc_attr( get_theme_mod( 'mooveit_lite_frontpage_ourclients_title' ) );
				} else {
					echo __( 'Our Clients', 'mooveit_lite' );
				}
				?>
			</h3>
		</div><!--/.title-border-->
		<div class="our-clients">
			<?php
			if ( get_theme_mod( 'mooveit_lite_frontpage_ourclients_logo1' ) ) {

				if ( get_theme_mod( 'mooveit_lite_frontpage_ourclients_logo1' ) ) {
					echo '<img src="'. esc_url( get_theme_mod( 'mooveit_lite_frontpage_ourclients_logo1' ) ) .'" title="'. __( 'Logo 1', 'mooveit_lite' ) .'" alt="'. __( 'Logo 1', 'mooveit_lite' ) .'" />';
				}
				if ( get_theme_mod( 'mooveit_lite_frontpage_ourclients_logo2' ) ) {
					echo '<img src="'. esc_url( get_theme_mod( 'mooveit_lite_frontpage_ourclients_logo2' ) ) .'" title="'. __( 'Logo 2', 'mooveit_lite' ) .'" alt="'. __( 'Logo 2', 'mooveit_lite' ) .'" />';
				}
				if ( get_theme_mod( 'mooveit_lite_frontpage_ourclients_logo3' ) ) {
					echo '<img src="'. esc_url( get_theme_mod( 'mooveit_lite_frontpage_ourclients_logo3' ) ) .'" title="'. __( 'Logo 3', 'mooveit_lite' ) .'" alt="'. __( 'Logo 3', 'mooveit_lite' ) .'" />';
				}
				if ( get_theme_mod( 'mooveit_lite_frontpage_ourclients_logo4' ) ) {
					echo '<img src="'. esc_url( get_theme_mod( 'mooveit_lite_frontpage_ourclients_logo4' ) ) .'" title="'. __( 'Logo 4', 'mooveit_lite' ) .'" alt="'. __( 'Logo 4', 'mooveit_lite' ) .'" />';
				}
				if ( get_theme_mod( 'mooveit_lite_frontpage_ourclients_logo5' ) ) {
					echo '<img src="'. esc_url( get_theme_mod( 'mooveit_lite_frontpage_ourclients_logo5' ) ) .'" title="'. __( 'Logo 5', 'mooveit_lite' ) .'" alt="'. __( 'Logo 5', 'mooveit_lite' ) .'" />';
				}
				if ( get_theme_mod( 'mooveit_lite_frontpage_ourclients_logo6' ) ) {
					echo '<img src="'. esc_url( get_theme_mod( 'mooveit_lite_frontpage_ourclients_logo6' ) ) .'" title="'. __( 'Logo 6', 'mooveit_lite' ) .'" alt="'. __( 'Logo 6', 'mooveit_lite' ) .'" />';
				}

			} else {

				echo '<img src="'. get_template_directory_uri() .'/images/clients-default.png" title="'. __( 'Logo 1', 'mooveit_lite' ) .'" alt="'. __( 'Logo 1', 'mooveit_lite' ) .'" />';
				echo '<img src="'. get_template_directory_uri() .'/images/clients-default.png" title="'. __( 'Logo 2', 'mooveit_lite' ) .'" alt="'. __( 'Logo 2', 'mooveit_lite' ) .'" />';
				echo '<img src="'. get_template_directory_uri() .'/images/clients-default.png" title="'. __( 'Logo 3', 'mooveit_lite' ) .'" alt="'. __( 'Logo 3', 'mooveit_lite' ) .'" />';
				echo '<img src="'. get_template_directory_uri() .'/images/clients-default.png" title="'. __( 'Logo 4', 'mooveit_lite' ) .'" alt="'. __( 'Logo 4', 'mooveit_lite' ) .'" />';
				echo '<img src="'. get_template_directory_uri() .'/images/clients-default.png" title="'. __( 'Logo 5', 'mooveit_lite' ) .'" alt="'. __( 'Logo 5', 'mooveit_lite' ) .'" />';
				echo '<img src="'. get_template_directory_uri() .'/images/clients-default.png" title="'. __( 'Logo 6', 'mooveit_lite' ) .'" alt="'. __( 'Logo 6', 'mooveit_lite' ) .'" />';

			}
			?>
		</div><!--/.our-clients-->
	</section><!--/.content-->
</div><!--/.wrap-->
<?php get_footer(); ?>