<?php

/**
 *	Sanitize Callback: Text
 */
function mooveit_lite_sanitize_callback_text( $input ) {
	return wp_kses_post( force_balance_tags( $input ) );
}

/**
 *	Customizer
 */
function mooveit_lite_customizer( $wp_customize ) {
    $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
    $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
    $wp_customize->get_setting( 'background_color' )->transport = 'postMessage';

    /*
    ** Header Customizer
    */
    $wp_customize->add_section( 'movatique_header' , array(
    	'title'       => __( 'Header', 'mooveit_lite' ),
    	'priority'    => 200,
	) );

		/* Header - Title */
		$wp_customize->add_setting( 'ti_header_title', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( 'ti_header_title', array(
		    'label'    => __( 'Contact Title:', 'mooveit_lite' ),
		    'section'  => 'movatique_header',
		    'settings' => 'ti_header_title',
			'priority' => '1',
		) );

		/* Header - Subtitle */
		$wp_customize->add_setting( 'ti_header_subtitle', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( 'ti_header_subtitle', array(
		    'label'    => __( 'Contact telephone:', 'mooveit_lite' ),
		    'section'  => 'movatique_header',
		    'settings' => 'ti_header_subtitle',
			'priority' => '2',
		) );

		/* Header - YouTube link */
		$wp_customize->add_setting( 'ti_header_youtube', array( 'sanitize_callback' => 'esc_url_raw' ) );
		$wp_customize->add_control( 'ti_header_youtube', array(
		    'label'    => __( 'YouTube link:', 'mooveit_lite' ),
		    'section'  => 'movatique_header',
		    'settings' => 'ti_header_youtube',
			'priority' => '3',
		) );

		/* Header - Facebook link */
		$wp_customize->add_setting( 'ti_header_facebook', array( 'sanitize_callback' => 'esc_url_raw' ) );
		$wp_customize->add_control( 'ti_header_facebook', array(
		    'label'    => __( 'Facebook link:', 'mooveit_lite' ),
		    'section'  => 'movatique_header',
		    'settings' => 'ti_header_facebook',
			'priority' => '4',
		) );

		/* Header - Google+ link */
		$wp_customize->add_setting( 'ti_header_googleplus', array( 'sanitize_callback' => 'esc_url_raw' ) );
		$wp_customize->add_control( 'ti_header_googleplus', array(
		    'label'    => __( 'Google+ link:', 'mooveit_lite' ),
		    'section'  => 'movatique_header',
		    'settings' => 'ti_header_googleplus',
			'priority' => '5',
		) );

		/* Header - Google+ link */
		$wp_customize->add_setting( 'ti_header_twitter', array( 'sanitize_callback' => 'esc_url_raw' ) );
		$wp_customize->add_control( 'ti_header_twitter', array(
		    'label'    => __( 'Twitter link:', 'mooveit_lite' ),
		    'section'  => 'movatique_header',
		    'settings' => 'ti_header_twitter',
			'priority' => '6',
		) );

		/* Header - Article Title */
		$wp_customize->add_setting( 'ti_header_articletitle', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( 'ti_header_articletitle', array(
		    'label'    => __( 'Article Title:', 'mooveit_lite' ),
		    'section'  => 'movatique_header',
		    'settings' => 'ti_header_articletitle',
			'priority' => '7',
		) );

		/* Header - Article Entry */
		$wp_customize->add_setting( 'ti_header_articleentry', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_header_articleentry', array(
		            'label' 	=> __( 'Article Entry:', 'mooveit_lite' ),
		            'section' 	=> 'movatique_header',
		            'settings' 	=> 'ti_header_articleentry',
		            'priority' 	=> '8'
		        )
		    )
		);

		/* Header - Article Link */
		$wp_customize->add_setting( 'ti_header_articlelink', array( 'sanitize_callback' => 'esc_url_raw' ) );
		$wp_customize->add_control( 'ti_header_articlelink', array(
		    'label'    => __( 'Article Link:', 'mooveit_lite' ),
		    'section'  => 'movatique_header',
		    'settings' => 'ti_header_articlelink',
			'priority' => '9',
		) );

    /*
    ** Front Page Customizer
    */
    $wp_customize->add_section( 'movatique_frontpage' , array(
    	'title'       => __( 'Front Page', 'mooveit_lite' ),
    	'priority'    => 250,
	) );

		/* Front Page - Subheader Title */
		$wp_customize->add_setting( 'ti_frontpage_subheader_title', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( 'ti_frontpage_subheader_title', array(
		    'label'    => __( 'Features Title:', 'mooveit_lite' ),
		    'section'  => 'movatique_frontpage',
		    'settings' => 'ti_frontpage_subheader_title',
			'priority' => '1',
		) );

		/* Front Page - Firstly Box - Title */
		$wp_customize->add_setting( 'ti_frontpage_firstlybox_title', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( 'ti_frontpage_firstlybox_title', array(
		    'label'    => __( 'Features Box (first) - Title:', 'mooveit_lite' ),
		    'section'  => 'movatique_frontpage',
		    'settings' => 'ti_frontpage_firstlybox_title',
			'priority' => '2',
		) );

		/* Front Page - Firstly Box - Content */
		$wp_customize->add_setting( 'ti_frontpage_firstlybox_content', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_frontpage_firstlybox_content', array(
		            'label' 	=> __( 'Features Box (one) - Content:', 'mooveit_lite' ),
		            'section' 	=> 'movatique_frontpage',
		            'settings' 	=> 'ti_frontpage_firstlybox_content',
		            'priority' 	=> '3'
		        )
		    )
		);

		/* Front Page - Secondly Box - Title */
		$wp_customize->add_setting( 'ti_frontpage_secondlybox_title', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( 'ti_frontpage_secondlybox_title', array(
		    'label'    => __( 'Features Box (two) - Title:', 'mooveit_lite' ),
		    'section'  => 'movatique_frontpage',
		    'settings' => 'ti_frontpage_secondlybox_title',
			'priority' => '4',
		) );

		/* Front Page - Secondly Box - Content */
		$wp_customize->add_setting( 'ti_frontpage_secondlybox_content', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_frontpage_secondlybox_content', array(
		            'label' 	=> __( 'Features Box (two) - Content:', 'mooveit_lite' ),
		            'section' 	=> 'movatique_frontpage',
		            'settings' 	=> 'ti_frontpage_secondlybox_content',
		            'priority' 	=> '5'
		        )
		    )
		);


		/* Front Page - Thirdly Box - Title */
		$wp_customize->add_setting( 'ti_frontpage_thirdlybox_title', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( 'ti_frontpage_thirdlybox_title', array(
		    'label'    => __( 'Features Box (three) - Title:', 'mooveit_lite' ),
		    'section'  => 'movatique_frontpage',
		    'settings' => 'ti_frontpage_thirdlybox_title',
			'priority' => '6',
		) );

		/* Front Page - Thirdly Box - Content */
		$wp_customize->add_setting( 'ti_frontpage_thirdlybox_content', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_frontpage_thirdlybox_content', array(
		            'label' 	=> __( 'Features Box (three) - Content:', 'mooveit_lite' ),
		            'section' 	=> 'movatique_frontpage',
		            'settings' 	=> 'ti_frontpage_thirdlybox_content',
		            'priority' 	=> '7'
		        )
		    )
		);

		/* Front Page - Article - Title */
		$wp_customize->add_setting( 'ti_frontpage_article_title', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( 'ti_frontpage_article_title', array(
		    'label'    => __( 'Article - Title:', 'mooveit_lite' ),
		    'section'  => 'movatique_frontpage',
		    'settings' => 'ti_frontpage_article_title',
			'priority' => '8',
		) );

		/* Front Page - Article - Content */
		$wp_customize->add_setting( 'ti_frontpage_article_content', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_frontpage_article_content', array(
		            'label' 	=> __( 'Article - Content:', 'mooveit_lite' ),
		            'section' 	=> 'movatique_frontpage',
		            'settings' 	=> 'ti_frontpage_article_content',
		            'priority' 	=> '9'
		        )
		    )
		);

		/* Front Page - Article - Image */
		$wp_customize->add_setting( 'ti_frontpage_article_image', array( 'sanitize_callback' => 'esc_url_raw' ) );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ti_frontpage_article_image', array(
		            'label' 	=> __( 'Article - Image:', 'mooveit_lite' ),
		            'section' 	=> 'movatique_frontpage',
		            'settings' 	=> 'ti_frontpage_article_image',
		            'priority' 	=> '10'
		        )
		    )
		);

		/* Front Page - Our Clients - Title */
		$wp_customize->add_setting( 'ti_frontpage_ourclients_title', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( 'ti_frontpage_ourclients_title', array(
		    'label'    => __( 'Our Clients - Title:', 'mooveit_lite' ),
		    'section'  => 'movatique_frontpage',
		    'settings' => 'ti_frontpage_ourclients_title',
			'priority' => '11',
		) );

		/* Front Page - Our Clients - Logo 1 */
		$wp_customize->add_setting( 'ti_frontpage_ourclients_logo1', array( 'sanitize_callback' => 'esc_url_raw' ) );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ti_frontpage_ourclients_logo1', array(
		    'label'    => __( 'Our Clients - Logo 1:', 'mooveit_lite' ),
		    'section'  => 'movatique_frontpage',
		    'settings' => 'ti_frontpage_ourclients_logo1',
		    'priority' => '12',
		) ) );

		/* Front Page - Our Clients - Logo 2 */
		$wp_customize->add_setting( 'ti_frontpage_ourclients_logo2', array( 'sanitize_callback' => 'esc_url_raw' ) );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ti_frontpage_ourclients_logo2', array(
		    'label'    => __( 'Our Clients - Logo 2:', 'mooveit_lite' ),
		    'section'  => 'movatique_frontpage',
		    'settings' => 'ti_frontpage_ourclients_logo2',
		    'priority' => '13',
		) ) );

		/* Front Page - Our Clients - Logo 3 */
		$wp_customize->add_setting( 'ti_frontpage_ourclients_logo3', array( 'sanitize_callback' => 'esc_url_raw' ) );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ti_frontpage_ourclients_logo3', array(
		    'label'    => __( 'Our Clients - Logo 3:', 'mooveit_lite' ),
		    'section'  => 'movatique_frontpage',
		    'settings' => 'ti_frontpage_ourclients_logo3',
		    'priority' => '14',
		) ) );

		/* Front Page - Our Clients - Logo 4 */
		$wp_customize->add_setting( 'ti_frontpage_ourclients_logo4', array( 'sanitize_callback' => 'esc_url_raw' ) );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ti_frontpage_ourclients_logo4', array(
		    'label'    => __( 'Our Clients - Logo 4:', 'mooveit_lite' ),
		    'section'  => 'movatique_frontpage',
		    'settings' => 'ti_frontpage_ourclients_logo4',
		    'priority' => '15',
		) ) );

		/* Front Page - Our Clients - Logo 5 */
		$wp_customize->add_setting( 'ti_frontpage_ourclients_logo5', array( 'sanitize_callback' => 'esc_url_raw' ) );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ti_frontpage_ourclients_logo5', array(
		    'label'    => __( 'Our Clients - Logo 5:', 'mooveit_lite' ),
		    'section'  => 'movatique_frontpage',
		    'settings' => 'ti_frontpage_ourclients_logo5',
		    'priority' => '16',
		) ) );

		/* Front Page - Our Clients - Logo 6 */
		$wp_customize->add_setting( 'ti_frontpage_ourclients_logo6', array( 'sanitize_callback' => 'esc_url_raw' ) );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ti_frontpage_ourclients_logo6', array(
		    'label'    => __( 'Our Clients - Logo 6:', 'mooveit_lite' ),
		    'section'  => 'movatique_frontpage',
		    'settings' => 'ti_frontpage_ourclients_logo6',
		    'priority' => '17',
		) ) );

	/*
    ** Contact Customizer
    */
    $wp_customize->add_section( 'movatique_contact' , array(
    	'title'       => __( 'Contact', 'mooveit_lite' ),
    	'priority'    => 350,
	) );

		/* Contact - Sidebar - Map Title */
		$wp_customize->add_setting( 'ti_contact_sidebar_map_title', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( 'ti_contact_sidebar_map_title', array(
		    'label'    => __( 'Sidebar - Map Title:', 'mooveit_lite' ),
		    'section'  => 'movatique_contact',
		    'settings' => 'ti_contact_sidebar_map_title',
			'priority' => '1'
		) );

		/* Contact - Sidebar - Map */
		$wp_customize->add_setting( 'ti_contact_sidebar_map', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_contact_sidebar_map', array(
		            'label' 	=> __( 'Sidebar - Map (iframe):', 'mooveit_lite' ),
		            'section' 	=> 'movatique_contact',
		            'settings' 	=> 'ti_contact_sidebar_map',
		            'priority' 	=> '2'
		        )
		    )
		);

		/* Contact - Sidebar - Title */
		$wp_customize->add_setting( 'ti_contact_sidebar_title', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( 'ti_contact_sidebar_title', array(
		    'label'    => __( 'Sidebar - Title:', 'mooveit_lite' ),
		    'section'  => 'movatique_contact',
		    'settings' => 'ti_contact_sidebar_title',
			'priority' => '3'
		) );

		/* Contact - Sidebar - Address 1 */
		$wp_customize->add_setting( 'ti_contact_sidebar_address1', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( 'ti_contact_sidebar_address1', array(
		    'label'    => __( 'Sidebar - Country Address:', 'mooveit_lite' ),
		    'section'  => 'movatique_contact',
		    'settings' => 'ti_contact_sidebar_address1',
			'priority' => '4'
		) );

		/* Contact - Sidebar - Address 2 */
		$wp_customize->add_setting( 'ti_contact_sidebar_address2', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( 'ti_contact_sidebar_address2', array(
		    'label'    => __( 'Sidebar - City Address:', 'mooveit_lite' ),
		    'section'  => 'movatique_contact',
		    'settings' => 'ti_contact_sidebar_address2',
			'priority' => '5'
		) );

		/* Contact - Sidebar - Address 3 */
		$wp_customize->add_setting( 'ti_contact_sidebar_address3', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( 'ti_contact_sidebar_address3', array(
		    'label'    => __( 'Sidebar - Street Address:', 'mooveit_lite' ),
		    'section'  => 'movatique_contact',
		    'settings' => 'ti_contact_sidebar_address3',
			'priority' => '6'
		) );

		/* Contact - Sidebar - Content */
		$wp_customize->add_setting( 'ti_contact_sidebar_content', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_contact_sidebar_content', array(
		            'label' 	=> __( 'Sidebar - Content:', 'mooveit_lite' ),
		            'section' 	=> 'movatique_contact',
		            'settings' 	=> 'ti_contact_sidebar_content',
		            'priority' 	=> '7'
		        )
		    )
		);

		/* Contact - Sidebar - Phone */
		$wp_customize->add_setting( 'ti_contact_sidebar_phone', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( 'ti_contact_sidebar_phone', array(
		    'label'    => __( 'Sidebar - Phone:', 'mooveit_lite' ),
		    'section'  => 'movatique_contact',
		    'settings' => 'ti_contact_sidebar_phone',
			'priority' => '9'
		) );

		/* Contact - Sidebar - Website */
		$wp_customize->add_setting( 'ti_contact_sidebar_website', array( 'sanitize_callback' => 'esc_url_raw' ) );
		$wp_customize->add_control( 'ti_contact_sidebar_website', array(
		    'label'    => __( 'Sidebar - Website:', 'mooveit_lite' ),
		    'section'  => 'movatique_contact',
		    'settings' => 'ti_contact_sidebar_website',
			'priority' => '11'
		) );

		/* Contact - Sidebar - Email */
		$wp_customize->add_setting( 'ti_contact_sidebar_email', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( 'ti_contact_sidebar_email', array(
		    'label'    => __( 'Sidebar - Email:', 'mooveit_lite' ),
		    'section'  => 'movatique_contact',
		    'settings' => 'ti_contact_sidebar_email',
			'priority' => '13'
		) );

		/* Contact - Sidebar - Socials Title */
		$wp_customize->add_setting( 'ti_contact_sidebar_socials_title', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( 'ti_contact_sidebar_socials_title', array(
		    'label'    => __( 'Sidebar - Socials Title:', 'mooveit_lite' ),
		    'section'  => 'movatique_contact',
		    'settings' => 'ti_contact_sidebar_socials_title',
			'priority' => '14'
		) );

	/*
    ** 404 Customizer
    */
    $wp_customize->add_section( 'constructzine_404' , array(
    	'title'       => __( '404 Page', 'mooveit_lite' ),
    	'priority'    => 400,
	) );

		/* 404 - Title */
		$wp_customize->add_setting( 'ti_404_title', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( 'ti_404_title', array(
		    'label'    => __( '404 - Title:', 'mooveit_lite' ),
		    'section'  => 'constructzine_404',
		    'settings' => 'ti_404_title',
			'priority' => '1',
		) );

		/* 404 - Title */
		$wp_customize->add_setting( 'ti_404_subtitle', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( 'ti_404_subtitle', array(
		    'label'    => __( '404 - Subtitle:', 'mooveit_lite' ),
		    'section'  => 'constructzine_404',
		    'settings' => 'ti_404_subtitle',
			'priority' => '2',
		) );

		/* 404 - Content */
		$wp_customize->add_setting( 'ti_404_content', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_404_content', array(
		            'label' 	=> __( '404 - Content', 'mooveit_lite' ),
		            'section' 	=> 'constructzine_404',
		            'settings' 	=> 'ti_404_content',
		            'priority' 	=> '3'
		        )
		    )
		);

	/*
    ** Testimonials Page
    */
    $wp_customize->add_section( 'testimonials_page' , array(
    	'title'       => __( 'Testimonials Page:', 'mooveit_lite' ),
    	'priority'    => 450,
	) );

		/* 404 - Title */
		$wp_customize->add_setting( 'ti_testimonials_numberofposts', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( 'ti_testimonials_numberofposts', array(
		    'label'    => __( 'Testimonials - Number of posts:', 'mooveit_lite' ),
		    'section'  => 'testimonials_page',
		    'settings' => 'ti_testimonials_numberofposts',
			'priority' => '1',
		) );

}
add_action( 'customize_register', 'mooveit_lite_customizer' );

if( class_exists( 'WP_Customize_Control' ) ):
	class Example_Customize_Textarea_Control extends WP_Customize_Control {
	    public $type = 'textarea';

	    public function render_content() { ?>

	        <label>
	        	<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
	        	<textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
	        </label>

	        <?php
	    }
	}
endif;

?>