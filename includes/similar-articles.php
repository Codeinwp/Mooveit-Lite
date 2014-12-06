<div class="similar-articles">
	<div class="single-subtitle">
		<h5><?php _e( 'Similar Articles', 'ti' ); ?></h5>
	</div><!--/.single-subtitlee-->
	<div class="list_carousel responsive cf">
		<div id="foo5">

			<?php
				$categories = get_the_category();
				$category_id = $categories[0]->cat_ID;

				$args = array(
					'post_type' => 'post',
					'orderby'	=> 'rand'
				);

				$random_posts = new WP_Query( $args );

				if ( $random_posts->have_posts() ) {
					while ( $random_posts->have_posts() ) {
						$random_posts->the_post();
						$featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

						<div class="similar-articles-box">
							<?php
								if ( $featured_image != NULL ) { ?>
									<div class="similar-articles-image">
										<img src="<?php echo $featured_image[0]; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
									</div><!--/.similar-articles-image-->
								<?php }
							?>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
							<time><?php echo the_time( get_option( 'date_format' ) ); ?></time>
							<p>
								<?php echo mooveit_lite_excerpt_limit_words('25'); ?>
							</p><!--/p-->
						</div><!--/.similar-articles-boxx-->

					<?php }
				} else { ?>
                	<?php _e( 'Not published any project.', 'ti' );
           		}
           		wp_reset_postdata();
           	?>
		</div><!--/#foo4-->
		<a href="" class="similar-articles-navigation-prev"></a>
		<a href="" class="similar-articles-navigation-next"></a>
		<div class="clearfix"></div>
	</div><!--/.list_carousel responsive-->
</div><!--/.similar-articles-->