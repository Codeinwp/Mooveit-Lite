<?php
/**
 * 	The template for displaying Page Contact.
 *
 * 	@package ThemeIsle
 *
 *	Template Name: Contact
 */
get_header();
?>
<?php get_template_part( 'includes/subheader' ); ?>
		<div class="wrap">
			<?php

			if ( have_posts() ) {
					while ( have_posts() ) {
						the_post(); ?>

						<div class="content cf">
							<div class="contact-left">
								<div class="contact-title">
									<h1><?php the_title(); ?></h1>
								</div><!--/.contact-title-->
								<div class="contact-left-entry">
									<?php the_content(); ?>
								</div><!--/.contact-left-entry-->
							</div><!--/.contact-left-->
							<div class="contact-right">
								<div class="contact-widget">
										<?php
										if ( get_theme_mod( 'ti_contact_sidebar_title' ) ) {
											echo '<div class="contact-widget-title contact-map-title">'. get_theme_mod( 'ti_contact_sidebar_map_title' ) .'</div>';
										}

										if ( get_theme_mod( 'ti_contact_sidebar_map' ) != false ) {
											echo '<div class="contact-map">'. htmlspecialchars_decode( get_theme_mod( 'ti_contact_sidebar_map' ) ) .'</div>';
										}
										?>
								</div><!--/.contact-widget-->
								<div class="contact-widget">
									<div class="contact-widget-title">
										<?php
										if ( get_theme_mod( 'ti_contact_sidebar_title' ) != false ) {
											echo get_theme_mod( 'ti_contact_sidebar_title' );
										}
										?>
									</div><!--/.contact-widget-title-->
									<?php
									if ( get_theme_mod( 'ti_contact_sidebar_address', '228 Park Ave S,<br />New York,</br>NY 10003-1502,<br />U.S.A.' ) ) {
										echo '<p>';
										echo htmlspecialchars_decode( get_theme_mod( 'ti_contact_sidebar_address', '228 Park Ave S,<br />New York,</br>NY 10003-1502,<br />U.S.A.' ) );
										echo '</p>';
									}
									?>
									<p>
										<?php
										if ( get_theme_mod( 'ti_contact_sidebar_content' ) != false ) {
											echo get_theme_mod( 'ti_contact_sidebar_content' );
										}
										?>
									</p>
									<p>
										<?php
										if ( get_theme_mod( 'ti_contact_sidebar_phone' ) != false ) { ?>

											<span>
												<b>
													<?php _e( 'Phone: ', 'mooveit_lite' ); ?>
												</b>
												<?php
												if ( get_theme_mod( 'ti_contact_sidebar_phone' ) != false ) { ?>
													<a href="tel:<?php echo get_theme_mod( 'ti_contact_sidebar_phone' ); ?>" title="<?php echo get_theme_mod( 'ti_contact_sidebar_phone' ); ?>">
														<?php echo get_theme_mod( 'ti_contact_sidebar_phone' ); ?>
													</a>
												<?php } else { ?>
													<a href="tel:+1-888-587-8421" title="+1 888-587-8421">
														+1-888-587-8421
													</a>
												<?php }
												?>
											</span>

										<?php }
										?>

										<?php
										if ( get_theme_mod( 'ti_contact_sidebar_email' ) != false ) { ?>

											<span>
												<b>
													<?php _e( 'E-mail: ', 'mooveit_lite' ); ?>
												</b>
												<?php
												if ( get_theme_mod( 'ti_contact_sidebar_email' ) != false ) { ?>
													<a href="mailto:<?php echo get_theme_mod( 'ti_contact_sidebar_email' ); ?>" title="<?php echo get_theme_mod( 'ti_contact_sidebar_email' ); ?>">
														<?php echo get_theme_mod( 'ti_contact_sidebar_email' ); ?>
													</a>
												<?php } else { ?>
													<a href="mailto:info@movatique" title="info@movatique">
														info@movatique
													</a>
												<?php }
												?>
											</span>

										<?php }
										?>
									</p>
								</div><!--/.contact-widget-->
								<div class="contact-widget">
									<div class="contact-socials">
										<?php
										if ( get_theme_mod( 'ti_header_youtube' ) != false ) { ?>
											<a href="<?php echo get_theme_mod( 'ti_header_youtube' ); ?>" title="YouTube" target="_blank">
												<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="14" height="15" viewBox="0 0 32 32">
													<path d="M26 4h-20c-3.3 0-6 2.7-6 6v12c0 3.3 2.7 6 6 6h20c3.3 0 6-2.7 6-6v-12c0-3.3-2.7-6-6-6zM12 24v-16l10 8-10 8z" />
												</svg>
											</a>
										<?php }
										?>

										<?php
										if ( get_theme_mod( 'ti_header_facebook' ) != false ) { ?>
											<a href="<?php echo get_theme_mod( 'ti_header_facebook' ); ?>" title="Facebook" target="_blank">
												<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="14" height="15" viewBox="0 0 32 32">
													<path d="M17.996 32h-5.996v-16h-4v-5.514l4-0.002-0.007-3.248c0-4.498 1.22-7.236 6.519-7.236h4.412v5.515h-2.757c-2.064 0-2.163 0.771-2.163 2.209l-0.008 2.76h4.959l-0.584 5.514-4.37 0.002-0.004 16z" />
												</svg>
											</a>
										<?php }
										?>

										<?php
										if ( get_theme_mod( 'ti_header_googleplus' ) != false ) { ?>
											<a href="<?php echo get_theme_mod( 'ti_header_googleplus' ); ?>" title="Google+" target="_blank">
												<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="14" height="15" viewBox="0 0 32 32">
													<path d="M17.471 2c0 0-6.28 0-8.373 0-3.754 0-7.287 2.844-7.287 6.138 0 3.366 2.559 6.083 6.378 6.083 0.266 0 0.524-0.005 0.776-0.024-0.248 0.475-0.425 1.009-0.425 1.564 0 0.936 0.503 1.694 1.14 2.313-0.481 0-0.945 0.014-1.452 0.014-4.649-0-8.228 2.961-8.228 6.032 0 3.024 3.923 4.916 8.573 4.916 5.301 0 8.228-3.008 8.228-6.032 0-2.425-0.715-3.877-2.928-5.442-0.757-0.536-2.204-1.839-2.204-2.604 0-0.897 0.256-1.34 1.607-2.395 1.385-1.082 2.365-2.603 2.365-4.372 0-2.106-0.938-4.159-2.699-4.837h2.655l1.874-1.355zM14.546 22.483c0.066 0.28 0.103 0.569 0.103 0.863 0 2.444-1.575 4.353-6.093 4.353-3.214 0-5.535-2.035-5.535-4.478 0-2.395 2.879-4.389 6.093-4.354 0.75 0.008 1.449 0.129 2.083 0.334 1.745 1.213 2.996 1.899 3.349 3.281zM9.401 13.368c-2.157-0.065-4.207-2.413-4.58-5.246-0.372-2.833 1.074-5.001 3.231-4.937 2.157 0.065 4.207 2.338 4.58 5.171 0.372 2.833-1.075 5.077-3.231 5.012zM26 8v-6h-2v6h-6v2h6v6h2v-6h6v-2z" />
												</svg>
											</a>
										<?php }
										?>

										<?php
										if ( get_theme_mod( 'ti_header_twitter' ) != false ) { ?>
											<a href="<?php echo get_theme_mod( 'ti_header_twitter' ); ?>" title="Twitter" target="_blank">
												<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="13" height="15" viewBox="0 0 32 32">
													<path d="M32 6.076c-1.177 0.522-2.443 0.875-3.771 1.034 1.355-0.813 2.396-2.099 2.887-3.632-1.269 0.752-2.674 1.299-4.169 1.593-1.198-1.276-2.904-2.073-4.792-2.073-3.626 0-6.565 2.939-6.565 6.565 0 0.515 0.058 1.016 0.17 1.496-5.456-0.274-10.294-2.888-13.532-6.86-0.565 0.97-0.889 2.097-0.889 3.301 0 2.278 1.159 4.287 2.921 5.465-1.076-0.034-2.088-0.329-2.974-0.821-0.001 0.027-0.001 0.055-0.001 0.083 0 3.181 2.263 5.834 5.266 6.437-0.551 0.15-1.131 0.23-1.73 0.23-0.423 0-0.834-0.041-1.235-0.118 0.835 2.608 3.26 4.506 6.133 4.559-2.247 1.761-5.078 2.81-8.154 2.81-0.53 0-1.052-0.031-1.566-0.092 2.905 1.863 6.356 2.95 10.064 2.95 12.076 0 18.679-10.004 18.679-18.68 0-0.285-0.006-0.568-0.019-0.849 1.283-0.926 2.396-2.082 3.276-3.398z" />
												</svg>
											</a>
										<?php }
										?>
									</div><!--/.contact-socials-->
								</div><!--/.contact-widget-->
							</div><!--/.contact-right-->
						</div><!--/.content-->

					<?php }
			} else {
				echo '<p>No posts found.</p>';
			}

			?>
		</div><!--/.wrap-->
<?php get_footer(); ?>