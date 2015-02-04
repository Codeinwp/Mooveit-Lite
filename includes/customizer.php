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

    /**
     * Header Customizer
     */
    /*
    $wp_customize->add_section( 'movatique_header' , array(
    	'title'       => __( 'Header', 'mooveit_lite' ),
    	'priority'    => 200,
	) );
	*/

		/* Header - Title */
		$wp_customize->add_setting( 'mooveit_lite_header_title', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( 'mooveit_lite_header_title', array(
		    'label'    => __( 'Contact Title:', 'mooveit_lite' ),
		    'section'  => 'header_image',
		    'settings' => 'mooveit_lite_header_title',
			'priority' => '20',
		) );

		/* Header - Subtitle */
		$wp_customize->add_setting( 'mooveit_lite_header_subtitle', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( 'mooveit_lite_header_subtitle', array(
		    'label'    => __( 'Contact telephone:', 'mooveit_lite' ),
		    'section'  => 'header_image',
		    'settings' => 'mooveit_lite_header_subtitle',
			'priority' => '21',
		) );

		/* Header - YouTube link */
		$wp_customize->add_setting( 'mooveit_lite_header_youtube', array( 'sanitize_callback' => 'esc_url_raw' ) );
		$wp_customize->add_control( 'mooveit_lite_header_youtube', array(
		    'label'    => __( 'YouTube link:', 'mooveit_lite' ),
		    'section'  => 'header_image',
		    'settings' => 'mooveit_lite_header_youtube',
			'priority' => '22',
		) );

		/* Header - Facebook link */
		$wp_customize->add_setting( 'mooveit_lite_header_facebook', array( 'sanitize_callback' => 'esc_url_raw' ) );
		$wp_customize->add_control( 'mooveit_lite_header_facebook', array(
		    'label'    => __( 'Facebook link:', 'mooveit_lite' ),
		    'section'  => 'header_image',
		    'settings' => 'mooveit_lite_header_facebook',
			'priority' => '23',
		) );

		/* Header - Google+ link */
		$wp_customize->add_setting( 'mooveit_lite_header_googleplus', array( 'sanitize_callback' => 'esc_url_raw' ) );
		$wp_customize->add_control( 'mooveit_lite_header_googleplus', array(
		    'label'    => __( 'Google+ link:', 'mooveit_lite' ),
		    'section'  => 'header_image',
		    'settings' => 'mooveit_lite_header_googleplus',
			'priority' => '24',
		) );

		/* Header - Google+ link */
		$wp_customize->add_setting( 'mooveit_lite_header_twitter', array( 'sanitize_callback' => 'esc_url_raw' ) );
		$wp_customize->add_control( 'mooveit_lite_header_twitter', array(
		    'label'    => __( 'Twitter link:', 'mooveit_lite' ),
		    'section'  => 'header_image',
		    'settings' => 'mooveit_lite_header_twitter',
			'priority' => '25',
		) );

		/* Header - Article Title */
		$wp_customize->add_setting( 'mooveit_lite_header_articletitle', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( 'mooveit_lite_header_articletitle', array(
		    'label'    => __( 'Article Title:', 'mooveit_lite' ),
		    'section'  => 'header_image',
		    'settings' => 'mooveit_lite_header_articletitle',
			'priority' => '26',
		) );

		/* Header - Article Entry */
		$wp_customize->add_setting( 'mooveit_lite_header_articleentry', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'mooveit_lite_header_articleentry', array(
		            'label' 	=> __( 'Article Entry:', 'mooveit_lite' ),
		            'section' 	=> 'header_image',
		            'settings' 	=> 'mooveit_lite_header_articleentry',
		            'priority' 	=> '27'
		        )
		    )
		);

		/* Header - Article Link */
		$wp_customize->add_setting( 'mooveit_lite_header_articlelink', array( 'sanitize_callback' => 'esc_url_raw' ) );
		$wp_customize->add_control( 'mooveit_lite_header_articlelink', array(
		    'label'    => __( 'Article Link:', 'mooveit_lite' ),
		    'section'  => 'header_image',
		    'settings' => 'mooveit_lite_header_articlelink',
			'priority' => '28',
		) );

    /**
     * Front Page Customizer
     */
    /*
    $wp_customize->add_section( 'movatique_frontpage' , array(
    	'title'       => __( 'Front Page', 'mooveit_lite' ),
    	'priority'    => 250,
	) );
	*/

		/* Front Page - Subheader Title */
		$wp_customize->add_setting( 'mooveit_lite_frontpage_subheader_title', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( 'mooveit_lite_frontpage_subheader_title', array(
		    'label'    => __( 'Features Title:', 'mooveit_lite' ),
		    'section'  => 'static_front_page',
		    'settings' => 'mooveit_lite_frontpage_subheader_title',
			'priority' => '20',
		) );

		/* Front Page - Firstly Box - Title */
		$wp_customize->add_setting( 'mooveit_lite_frontpage_firstlybox_title', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( 'mooveit_lite_frontpage_firstlybox_title', array(
		    'label'    => __( 'Features Box (first) - Title:', 'mooveit_lite' ),
		    'section'  => 'static_front_page',
		    'settings' => 'mooveit_lite_frontpage_firstlybox_title',
			'priority' => '21',
		) );

		/* Front Page - Firstly Box - Content */
		$wp_customize->add_setting( 'mooveit_lite_frontpage_firstlybox_content', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'mooveit_lite_frontpage_firstlybox_content', array(
		            'label' 	=> __( 'Features Box (one) - Content:', 'mooveit_lite' ),
		            'section' 	=> 'static_front_page',
		            'settings' 	=> 'mooveit_lite_frontpage_firstlybox_content',
		            'priority' 	=> '22'
		        )
		    )
		);

		/* Front Page - Secondly Box - Title */
		$wp_customize->add_setting( 'mooveit_lite_frontpage_secondlybox_title', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( 'mooveit_lite_frontpage_secondlybox_title', array(
		    'label'    => __( 'Features Box (two) - Title:', 'mooveit_lite' ),
		    'section'  => 'static_front_page',
		    'settings' => 'mooveit_lite_frontpage_secondlybox_title',
			'priority' => '23',
		) );

		/* Front Page - Secondly Box - Content */
		$wp_customize->add_setting( 'mooveit_lite_frontpage_secondlybox_content', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'mooveit_lite_frontpage_secondlybox_content', array(
		            'label' 	=> __( 'Features Box (two) - Content:', 'mooveit_lite' ),
		            'section' 	=> 'static_front_page',
		            'settings' 	=> 'mooveit_lite_frontpage_secondlybox_content',
		            'priority' 	=> '24'
		        )
		    )
		);


		/* Front Page - Thirdly Box - Title */
		$wp_customize->add_setting( 'mooveit_lite_frontpage_thirdlybox_title', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( 'mooveit_lite_frontpage_thirdlybox_title', array(
		    'label'    => __( 'Features Box (three) - Title:', 'mooveit_lite' ),
		    'section'  => 'static_front_page',
		    'settings' => 'mooveit_lite_frontpage_thirdlybox_title',
			'priority' => '25',
		) );

		/* Front Page - Thirdly Box - Content */
		$wp_customize->add_setting( 'mooveit_lite_frontpage_thirdlybox_content', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'mooveit_lite_frontpage_thirdlybox_content', array(
		            'label' 	=> __( 'Features Box (three) - Content:', 'mooveit_lite' ),
		            'section' 	=> 'static_front_page',
		            'settings' 	=> 'mooveit_lite_frontpage_thirdlybox_content',
		            'priority' 	=> '26'
		        )
		    )
		);

		/* Front Page - Article - Title */
		$wp_customize->add_setting( 'mooveit_lite_frontpage_article_title', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( 'mooveit_lite_frontpage_article_title', array(
		    'label'    => __( 'Article - Title:', 'mooveit_lite' ),
		    'section'  => 'static_front_page',
		    'settings' => 'mooveit_lite_frontpage_article_title',
			'priority' => '27',
		) );

		/* Front Page - Article - Content */
		$wp_customize->add_setting( 'mooveit_lite_frontpage_article_content', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'mooveit_lite_frontpage_article_content', array(
		            'label' 	=> __( 'Article - Content:', 'mooveit_lite' ),
		            'section' 	=> 'static_front_page',
		            'settings' 	=> 'mooveit_lite_frontpage_article_content',
		            'priority' 	=> '28'
		        )
		    )
		);

		/* Front Page - Article - Image */
		$wp_customize->add_setting( 'mooveit_lite_frontpage_article_image', array( 'sanitize_callback' => 'esc_url_raw' ) );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mooveit_lite_frontpage_article_image', array(
		            'label' 	=> __( 'Article - Image:', 'mooveit_lite' ),
		            'section' 	=> 'static_front_page',
		            'settings' 	=> 'mooveit_lite_frontpage_article_image',
		            'priority' 	=> '29'
		        )
		    )
		);

	/**
     * Contact Customizer
     */
    $wp_customize->add_section( 'mooveit_lite_contact' , array(
    	'title'       => __( 'Contact', 'mooveit_lite' ),
    	'priority'    => 350,
	) );

		/* Contact - Map */
		$wp_customize->add_setting( 'mooveit_lite_contact_sidebar_map', array( 'sanitize_callback' => 'esc_html' ) );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'mooveit_lite_contact_sidebar_map', array(
		            'label' 	=> __( 'Map (iframe):', 'mooveit_lite' ),
		            'section' 	=> 'mooveit_lite_contact',
		            'settings' 	=> 'mooveit_lite_contact_sidebar_map',
		            'priority' 	=> '1'
		        )
		    )
		);

		/* Contact - Title */
		$wp_customize->add_setting( 'mooveit_lite_contact_sidebar_title', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( 'mooveit_lite_contact_sidebar_title', array(
		    'label'    => __( 'Title:', 'mooveit_lite' ),
		    'section'  => 'mooveit_lite_contact',
		    'settings' => 'mooveit_lite_contact_sidebar_title',
			'priority' => '2'
		) );

		/* Contact - Address */
		$wp_customize->add_setting( 'mooveit_lite_contact_sidebar_address', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text', 'default' => __( '228 Park Ave S,<br />New York,</br>NY 10003-1502,<br />U.S.A.', 'mooveit_lite' ) ) );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'mooveit_lite_contact_sidebar_address', array(
		            'label' 	=> __( 'Address:', 'mooveit_lite' ),
		            'section' 	=> 'mooveit_lite_contact',
		            'settings' 	=> 'mooveit_lite_contact_sidebar_address',
		            'priority' 	=> '3'
		        )
		    )
		);

		/* Contact - Content */
		$wp_customize->add_setting( 'mooveit_lite_contact_sidebar_content', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'mooveit_lite_contact_sidebar_content', array(
		            'label' 	=> __( 'Content:', 'mooveit_lite' ),
		            'section' 	=> 'mooveit_lite_contact',
		            'settings' 	=> 'mooveit_lite_contact_sidebar_content',
		            'priority' 	=> '4'
		        )
		    )
		);

		/* Contact - Phone */
		$wp_customize->add_setting( 'mooveit_lite_contact_sidebar_phone', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( 'mooveit_lite_contact_sidebar_phone', array(
		    'label'    => __( 'Phone:', 'mooveit_lite' ),
		    'section'  => 'mooveit_lite_contact',
		    'settings' => 'mooveit_lite_contact_sidebar_phone',
			'priority' => '5'
		) );

		/* Contact - Email */
		$wp_customize->add_setting( 'mooveit_lite_contact_sidebar_email', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( 'mooveit_lite_contact_sidebar_email', array(
		    'label'    => __( 'Email:', 'mooveit_lite' ),
		    'section'  => 'mooveit_lite_contact',
		    'settings' => 'mooveit_lite_contact_sidebar_email',
			'priority' => '6'
		) );

	/**
     * 404 Customizer
     */
    $wp_customize->add_section( 'mooveit_lite_404' , array(
    	'title'       => __( '404 Page', 'mooveit_lite' ),
    	'priority'    => 400,
	) );

		/* 404 - Title */
		$wp_customize->add_setting( 'mooveit_lite_404_title', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( 'mooveit_lite_404_title', array(
		    'label'    => __( '404 - Title:', 'mooveit_lite' ),
		    'section'  => 'mooveit_lite_404',
		    'settings' => 'mooveit_lite_404_title',
			'priority' => '1',
		) );

		/* 404 - Title */
		$wp_customize->add_setting( 'mooveit_lite_404_subtitle', array( 'sanitize_callback' => 'mooveit_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( 'mooveit_lite_404_subtitle', array(
		    'label'    => __( '404 - Subtitle:', 'mooveit_lite' ),
		    'section'  => 'mooveit_lite_404',
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

/**
 *	Active Callback
 */
function active_callback( $active, $control ) {

	// Page Template: Contact
    if ( 'mooveit_lite_contact' === $control->section ) {
        $active = is_page_template( 'page-contact.php' );
    }

    // 404 Error
    if ( 'mooveit_lite_404' === $control->section ) {
        $active = is_404();
    }

    // Static Frontpage
    if ( 'static_front_page' === $control->section ) {
        $active = is_front_page();
    }

    return $active;

}
add_filter( 'customize_control_active', 'active_callback', 10, 2 );

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
	wp_localize_script( 'mooveit_lite_customizer_script', 'mooveit_lite_buttons', array(
		'doc'			=> __( 'Documentation', 'mooveit_lite' ),
		'pro'			=> __( 'View PRO Version', 'mooveit_lite' ),
		'testimonials'	=> '<span class="sidebar-content-title">'. __( 'Testimonials Section', 'mooveit_lite' ) .'</span><span class="sidebar-content-description">'. __( '(available in PRO version)', 'mooveit_lite' ) .'</span>',
		'plans'			=> '<span class="sidebar-content-title">'. __( 'Pricing Table', 'mooveit_lite' ) .'</span><span class="sidebar-content-description">'. __( '(available in PRO version)', 'mooveit_lite' ) .'</span>'
	) );
}
add_action( 'customize_controls_enqueue_scripts', 'mooveit_lite_registers' );

?>