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
		$wp_customize->add_setting( 'mooveit_lite_header_title', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( 'mooveit_lite_header_title', array(
		    'label'    => __( 'Contact Title:', 'mooveit_lite' ),
		    'section'  => 'movatique_header',
		    'settings' => 'mooveit_lite_header_title',
			'priority' => '1',
		) );

		/* Header - Subtitle */
		$wp_customize->add_setting( 'mooveit_lite_header_subtitle', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( 'mooveit_lite_header_subtitle', array(
		    'label'    => __( 'Contact telephone:', 'mooveit_lite' ),
		    'section'  => 'movatique_header',
		    'settings' => 'mooveit_lite_header_subtitle',
			'priority' => '2',
		) );

		/* Header - YouTube link */
		$wp_customize->add_setting( 'mooveit_lite_header_youtube', array( 'sanitize_callback' => 'esc_url_raw' ) );
		$wp_customize->add_control( 'mooveit_lite_header_youtube', array(
		    'label'    => __( 'YouTube link:', 'mooveit_lite' ),
		    'section'  => 'movatique_header',
		    'settings' => 'mooveit_lite_header_youtube',
			'priority' => '3',
		) );

		/* Header - Facebook link */
		$wp_customize->add_setting( 'mooveit_lite_header_facebook', array( 'sanitize_callback' => 'esc_url_raw' ) );
		$wp_customize->add_control( 'mooveit_lite_header_facebook', array(
		    'label'    => __( 'Facebook link:', 'mooveit_lite' ),
		    'section'  => 'movatique_header',
		    'settings' => 'mooveit_lite_header_facebook',
			'priority' => '4',
		) );

		/* Header - Google+ link */
		$wp_customize->add_setting( 'mooveit_lite_header_googleplus', array( 'sanitize_callback' => 'esc_url_raw' ) );
		$wp_customize->add_control( 'mooveit_lite_header_googleplus', array(
		    'label'    => __( 'Google+ link:', 'mooveit_lite' ),
		    'section'  => 'movatique_header',
		    'settings' => 'mooveit_lite_header_googleplus',
			'priority' => '5',
		) );

		/* Header - Google+ link */
		$wp_customize->add_setting( 'mooveit_lite_header_twitter', array( 'sanitize_callback' => 'esc_url_raw' ) );
		$wp_customize->add_control( 'mooveit_lite_header_twitter', array(
		    'label'    => __( 'Twitter link:', 'mooveit_lite' ),
		    'section'  => 'movatique_header',
		    'settings' => 'mooveit_lite_header_twitter',
			'priority' => '6',
		) );

		/* Header - Article Title */
		$wp_customize->add_setting( 'mooveit_lite_header_articletitle', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( 'mooveit_lite_header_articletitle', array(
		    'label'    => __( 'Article Title:', 'mooveit_lite' ),
		    'section'  => 'movatique_header',
		    'settings' => 'mooveit_lite_header_articletitle',
			'priority' => '7',
		) );

		/* Header - Article Entry */
		$wp_customize->add_setting( 'mooveit_lite_header_articleentry', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'mooveit_lite_header_articleentry', array(
		            'label' 	=> __( 'Article Entry:', 'mooveit_lite' ),
		            'section' 	=> 'movatique_header',
		            'settings' 	=> 'mooveit_lite_header_articleentry',
		            'priority' 	=> '8'
		        )
		    )
		);

		/* Header - Article Link */
		$wp_customize->add_setting( 'mooveit_lite_header_articlelink', array( 'sanitize_callback' => 'esc_url_raw' ) );
		$wp_customize->add_control( 'mooveit_lite_header_articlelink', array(
		    'label'    => __( 'Article Link:', 'mooveit_lite' ),
		    'section'  => 'movatique_header',
		    'settings' => 'mooveit_lite_header_articlelink',
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
		$wp_customize->add_setting( 'mooveit_lite_frontpage_subheader_title', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( 'mooveit_lite_frontpage_subheader_title', array(
		    'label'    => __( 'Features Title:', 'mooveit_lite' ),
		    'section'  => 'movatique_frontpage',
		    'settings' => 'mooveit_lite_frontpage_subheader_title',
			'priority' => '1',
		) );

		/* Front Page - Firstly Box - Title */
		$wp_customize->add_setting( 'mooveit_lite_frontpage_firstlybox_title', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( 'mooveit_lite_frontpage_firstlybox_title', array(
		    'label'    => __( 'Features Box (first) - Title:', 'mooveit_lite' ),
		    'section'  => 'movatique_frontpage',
		    'settings' => 'mooveit_lite_frontpage_firstlybox_title',
			'priority' => '2',
		) );

		/* Front Page - Firstly Box - Content */
		$wp_customize->add_setting( 'mooveit_lite_frontpage_firstlybox_content', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'mooveit_lite_frontpage_firstlybox_content', array(
		            'label' 	=> __( 'Features Box (one) - Content:', 'mooveit_lite' ),
		            'section' 	=> 'movatique_frontpage',
		            'settings' 	=> 'mooveit_lite_frontpage_firstlybox_content',
		            'priority' 	=> '3'
		        )
		    )
		);

		/* Front Page - Secondly Box - Title */
		$wp_customize->add_setting( 'mooveit_lite_frontpage_secondlybox_title', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( 'mooveit_lite_frontpage_secondlybox_title', array(
		    'label'    => __( 'Features Box (two) - Title:', 'mooveit_lite' ),
		    'section'  => 'movatique_frontpage',
		    'settings' => 'mooveit_lite_frontpage_secondlybox_title',
			'priority' => '4',
		) );

		/* Front Page - Secondly Box - Content */
		$wp_customize->add_setting( 'mooveit_lite_frontpage_secondlybox_content', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'mooveit_lite_frontpage_secondlybox_content', array(
		            'label' 	=> __( 'Features Box (two) - Content:', 'mooveit_lite' ),
		            'section' 	=> 'movatique_frontpage',
		            'settings' 	=> 'mooveit_lite_frontpage_secondlybox_content',
		            'priority' 	=> '5'
		        )
		    )
		);


		/* Front Page - Thirdly Box - Title */
		$wp_customize->add_setting( 'mooveit_lite_frontpage_thirdlybox_title', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( 'mooveit_lite_frontpage_thirdlybox_title', array(
		    'label'    => __( 'Features Box (three) - Title:', 'mooveit_lite' ),
		    'section'  => 'movatique_frontpage',
		    'settings' => 'mooveit_lite_frontpage_thirdlybox_title',
			'priority' => '6',
		) );

		/* Front Page - Thirdly Box - Content */
		$wp_customize->add_setting( 'mooveit_lite_frontpage_thirdlybox_content', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'mooveit_lite_frontpage_thirdlybox_content', array(
		            'label' 	=> __( 'Features Box (three) - Content:', 'mooveit_lite' ),
		            'section' 	=> 'movatique_frontpage',
		            'settings' 	=> 'mooveit_lite_frontpage_thirdlybox_content',
		            'priority' 	=> '7'
		        )
		    )
		);

		/* Front Page - Article - Title */
		$wp_customize->add_setting( 'mooveit_lite_frontpage_article_title', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( 'mooveit_lite_frontpage_article_title', array(
		    'label'    => __( 'Article - Title:', 'mooveit_lite' ),
		    'section'  => 'movatique_frontpage',
		    'settings' => 'mooveit_lite_frontpage_article_title',
			'priority' => '8',
		) );

		/* Front Page - Article - Content */
		$wp_customize->add_setting( 'mooveit_lite_frontpage_article_content', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'mooveit_lite_frontpage_article_content', array(
		            'label' 	=> __( 'Article - Content:', 'mooveit_lite' ),
		            'section' 	=> 'movatique_frontpage',
		            'settings' 	=> 'mooveit_lite_frontpage_article_content',
		            'priority' 	=> '9'
		        )
		    )
		);

		/* Front Page - Article - Image */
		$wp_customize->add_setting( 'mooveit_lite_frontpage_article_image', array( 'sanitize_callback' => 'esc_url_raw' ) );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mooveit_lite_frontpage_article_image', array(
		            'label' 	=> __( 'Article - Image:', 'mooveit_lite' ),
		            'section' 	=> 'movatique_frontpage',
		            'settings' 	=> 'mooveit_lite_frontpage_article_image',
		            'priority' 	=> '10'
		        )
		    )
		);

		/* Front Page - Our Clients - Title */
		$wp_customize->add_setting( 'mooveit_lite_frontpage_ourclients_title', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( 'mooveit_lite_frontpage_ourclients_title', array(
		    'label'    => __( 'Our Clients - Title:', 'mooveit_lite' ),
		    'section'  => 'movatique_frontpage',
		    'settings' => 'mooveit_lite_frontpage_ourclients_title',
			'priority' => '11',
		) );

		/* Front Page - Our Clients - Logo 1 */
		$wp_customize->add_setting( 'mooveit_lite_frontpage_ourclients_logo1', array( 'sanitize_callback' => 'esc_url_raw' ) );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mooveit_lite_frontpage_ourclients_logo1', array(
		    'label'    => __( 'Our Clients - Logo 1:', 'mooveit_lite' ),
		    'section'  => 'movatique_frontpage',
		    'settings' => 'mooveit_lite_frontpage_ourclients_logo1',
		    'priority' => '12',
		) ) );

		/* Front Page - Our Clients - Logo 2 */
		$wp_customize->add_setting( 'mooveit_lite_frontpage_ourclients_logo2', array( 'sanitize_callback' => 'esc_url_raw' ) );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mooveit_lite_frontpage_ourclients_logo2', array(
		    'label'    => __( 'Our Clients - Logo 2:', 'mooveit_lite' ),
		    'section'  => 'movatique_frontpage',
		    'settings' => 'mooveit_lite_frontpage_ourclients_logo2',
		    'priority' => '13',
		) ) );

		/* Front Page - Our Clients - Logo 3 */
		$wp_customize->add_setting( 'mooveit_lite_frontpage_ourclients_logo3', array( 'sanitize_callback' => 'esc_url_raw' ) );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mooveit_lite_frontpage_ourclients_logo3', array(
		    'label'    => __( 'Our Clients - Logo 3:', 'mooveit_lite' ),
		    'section'  => 'movatique_frontpage',
		    'settings' => 'mooveit_lite_frontpage_ourclients_logo3',
		    'priority' => '14',
		) ) );

		/* Front Page - Our Clients - Logo 4 */
		$wp_customize->add_setting( 'mooveit_lite_frontpage_ourclients_logo4', array( 'sanitize_callback' => 'esc_url_raw' ) );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mooveit_lite_frontpage_ourclients_logo4', array(
		    'label'    => __( 'Our Clients - Logo 4:', 'mooveit_lite' ),
		    'section'  => 'movatique_frontpage',
		    'settings' => 'mooveit_lite_frontpage_ourclients_logo4',
		    'priority' => '15',
		) ) );

		/* Front Page - Our Clients - Logo 5 */
		$wp_customize->add_setting( 'mooveit_lite_frontpage_ourclients_logo5', array( 'sanitize_callback' => 'esc_url_raw' ) );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mooveit_lite_frontpage_ourclients_logo5', array(
		    'label'    => __( 'Our Clients - Logo 5:', 'mooveit_lite' ),
		    'section'  => 'movatique_frontpage',
		    'settings' => 'mooveit_lite_frontpage_ourclients_logo5',
		    'priority' => '16',
		) ) );

		/* Front Page - Our Clients - Logo 6 */
		$wp_customize->add_setting( 'mooveit_lite_frontpage_ourclients_logo6', array( 'sanitize_callback' => 'esc_url_raw' ) );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mooveit_lite_frontpage_ourclients_logo6', array(
		    'label'    => __( 'Our Clients - Logo 6:', 'mooveit_lite' ),
		    'section'  => 'movatique_frontpage',
		    'settings' => 'mooveit_lite_frontpage_ourclients_logo6',
		    'priority' => '17',
		) ) );

	/*
    ** Contact Customizer
    */
    $wp_customize->add_section( 'movatique_contact' , array(
    	'title'       => __( 'Contact', 'mooveit_lite' ),
    	'priority'    => 350,
	) );

		/* Contact - Map */
		$wp_customize->add_setting( 'mooveit_lite_contact_sidebar_map', array( 'sanitize_callback' => 'esc_html' ) );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'mooveit_lite_contact_sidebar_map', array(
		            'label' 	=> __( 'Map (iframe):', 'mooveit_lite' ),
		            'section' 	=> 'movatique_contact',
		            'settings' 	=> 'mooveit_lite_contact_sidebar_map',
		            'priority' 	=> '1'
		        )
		    )
		);

		/* Contact - Title */
		$wp_customize->add_setting( 'mooveit_lite_contact_sidebar_title', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( 'mooveit_lite_contact_sidebar_title', array(
		    'label'    => __( 'Title:', 'mooveit_lite' ),
		    'section'  => 'movatique_contact',
		    'settings' => 'mooveit_lite_contact_sidebar_title',
			'priority' => '2'
		) );

		/* Contact - Address */
		$wp_customize->add_setting( 'mooveit_lite_contact_sidebar_address', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text', 'default' => __( '228 Park Ave S,<br />New York,</br>NY 10003-1502,<br />U.S.A.', 'mooveit_lite' ) ) );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'mooveit_lite_contact_sidebar_address', array(
		            'label' 	=> __( 'Address:', 'mooveit_lite' ),
		            'section' 	=> 'movatique_contact',
		            'settings' 	=> 'mooveit_lite_contact_sidebar_address',
		            'priority' 	=> '3'
		        )
		    )
		);

		/* Contact - Content */
		$wp_customize->add_setting( 'mooveit_lite_contact_sidebar_content', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'mooveit_lite_contact_sidebar_content', array(
		            'label' 	=> __( 'Content:', 'mooveit_lite' ),
		            'section' 	=> 'movatique_contact',
		            'settings' 	=> 'mooveit_lite_contact_sidebar_content',
		            'priority' 	=> '4'
		        )
		    )
		);

		/* Contact - Phone */
		$wp_customize->add_setting( 'mooveit_lite_contact_sidebar_phone', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( 'mooveit_lite_contact_sidebar_phone', array(
		    'label'    => __( 'Phone:', 'mooveit_lite' ),
		    'section'  => 'movatique_contact',
		    'settings' => 'mooveit_lite_contact_sidebar_phone',
			'priority' => '5'
		) );

		/* Contact - Email */
		$wp_customize->add_setting( 'mooveit_lite_contact_sidebar_email', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( 'mooveit_lite_contact_sidebar_email', array(
		    'label'    => __( 'Email:', 'mooveit_lite' ),
		    'section'  => 'movatique_contact',
		    'settings' => 'mooveit_lite_contact_sidebar_email',
			'priority' => '6'
		) );

	/*
    ** 404 Customizer
    */
    $wp_customize->add_section( 'constructzine_404' , array(
    	'title'       => __( '404 Page', 'mooveit_lite' ),
    	'priority'    => 400,
	) );

		/* 404 - Title */
		$wp_customize->add_setting( 'mooveit_lite_404_title', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( 'mooveit_lite_404_title', array(
		    'label'    => __( '404 - Title:', 'mooveit_lite' ),
		    'section'  => 'constructzine_404',
		    'settings' => 'mooveit_lite_404_title',
			'priority' => '1',
		) );

		/* 404 - Title */
		$wp_customize->add_setting( 'mooveit_lite_404_subtitle', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( 'mooveit_lite_404_subtitle', array(
		    'label'    => __( '404 - Subtitle:', 'mooveit_lite' ),
		    'section'  => 'constructzine_404',
		    'settings' => 'mooveit_lite_404_subtitle',
			'priority' => '2',
		) );

		/* 404 - Content */
		$wp_customize->add_setting( 'mooveit_lite_404_content', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'mooveit_lite_404_content', array(
		            'label' 	=> __( '404 - Content', 'mooveit_lite' ),
		            'section' 	=> 'constructzine_404',
		            'settings' 	=> 'mooveit_lite_404_content',
		            'priority' 	=> '3'
		        )
		    )
		);

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

/**
 *	Registers
 */
function mooveit_lite_registers() {
	wp_register_script( 'mooveit_lite_customizer_script', get_template_directory_uri() . '/js/mooveit_lite_customizer.js', array("jquery"), '20120206', true  );
	wp_enqueue_script( 'mooveit_lite_customizer_script' );
	wp_localize_script( 'mooveit_lite_customizer_script', 'medica_lite_buttons', array(
		'doc'			=> __( 'Documentation', 'medica_lite' ),
		'pro'			=> __( 'View PRO Version', 'medica_lite' ),
		'testimonials'	=> '<span class="sidebar-content-title">'. __( 'Testimonials Section', 'mooveit_lite' ) .'</span><span class="sidebar-content-description">'. __( '(available in PRO version)', 'mooveit_lite' ) .'</span>',
		'plans'			=> '<span class="sidebar-content-title">'. __( 'Pricing Table', 'mooveit_lite' ) .'</span><span class="sidebar-content-description">'. __( '(available in PRO version)', 'mooveit_lite' ) .'</span>'
	) );
}
add_action( 'customize_controls_enqueue_scripts', 'mooveit_lite_registers' );

?>