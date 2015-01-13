<?php
/**
 * 	The template for displaying Single.
 *
 * 	@package ThemeIsle
 */
get_header();
?>
<?php get_template_part( 'includes/subheader' ); ?>
<div class="wrap">
	<?php
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				$featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

				<article id="single">
					<h1><?php the_title(); ?></h1>
					<ul class="meta-post cf">
						<li class="author-icon">
							<?php the_author_posts_link(); ?>
						</li><!--/li .author-icon-->
						<li class="calendar-icon">
							<?php echo the_time( get_option( 'date_format' ) ); ?>
						</li><!--/li .calendar-icon-->
						<li class="comments-icon">
							<a href="<?php the_permalink(); ?>#comments" title="<?php comments_number( 'No Comments', 'One Comment', '% Comments' ); ?>">
								<?php comments_number( 'No Comments', 'One Comment', '% Comments' ); ?>
							</a><!--/a-->
						</li><!--/li .comments-icon-->
						<li class="category-icon">
							<?php the_category( ', ' ); ?>
						</li><!--/li .category-icon-->
					</ul><!--/ul .meta-post-->
					<?php
						if ( $featured_image != NULL ) { ?>
							<div class="single-featured-image">
								<img src="<?php echo $featured_image[0]; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
							</div><!--/.single-featured-image-->
						<?php }
					?>
					<div class="single-entry cf">
						<?php the_content(); ?>
					</div><!--/.single-entry-->
					<div class="single-tags">
						<?php the_tags( 'Tags: ' ); ?>
					</div><!--/.single-tags-->
					<?php
						wp_link_pages( array(
							'before'      => '<div class="post-links"><span class="post-links-title">' . __( 'Pages:', 'mooveit_lite' ) . '</span>',
							'after'       => '</div>',
							'link_before' => '<span>',
							'link_after'  => '</span>',
						) );
					?>
					<?php comments_template(); ?>
				</article><!--/#single-->

				<?php }
		} else {
				echo '<p>'. __( 'No posts found.', 'mooveit_lite' ) .'</p>';
		}
	?>
</div><!--/.wrap-->
<?php get_footer(); ?>