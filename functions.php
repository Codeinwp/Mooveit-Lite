<?php

/**
 *  Require Once
 */
require_once( 'includes/custom-functions.php' );
require_once( 'includes/customizer.php' );
require_once( 'includes/tgm-plugin-activation/tgm-plugin-activation.php' );

/**
 *  Content Width
 */
if ( ! isset( $content_width ) ) $content_width = 634;

/**
 *  WP Title
 */
function mooviet_lite_wp_title( $title, $sep ) {
    global $paged, $page;

    if ( is_feed() )
        return $title;

    // Add the site name.
    $title .= get_bloginfo( 'name' );

    // Add the site description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
        $title = "$title $sep $site_description";

    // Add a page number if necessary.
    if ( $paged >= 2 || $page >= 2 )
        $title = "$title $sep " . sprintf( __( 'Page %s', 'mooveit_lite' ), max( $paged, $page ) );

    return $title;
}
add_filter( 'wp_title', 'mooviet_lite_wp_title', 10, 2 );

/**
 *  Mooveit Lite Setup
 */
if ( !function_exists( 'mooveit_lite_setup' ) ) {

    function mooveit_lite_setup() {

        // Post Thumbnails
        add_theme_support( 'post-thumbnails' );

        // Automatic Feed Links
        add_theme_support( 'automatic-feed-links' );

        // Custom Header
        $args_custom_header = array(
            'width'         => '126',
            'height'        => '18',
            'flex-height'   => true,
            'header-text'   => true,
            'default-image' => get_template_directory_uri() . '/images/logo.png'
        );
        add_theme_support( "custom-header", $args_custom_header );

        // Custom Background
        $args_custom_background = array(
            'default-color'         => '#ffffff',
            'default-repeat'        => 'no-repeat',
            'default-attachment'    => 'fixed'
        );
        add_theme_support( "custom-background", $args_custom_background );

        // Title Tag
        add_theme_support( 'title-tag' );

        // The Post Thumbnail
        the_post_thumbnail();

        // Add Editor Style
        add_editor_style();

        // Header Menu
        $header_menu_args = array(
            'header-menu' => __( 'This menu will appear in header.', 'mooveit_lite' ),
        );
        register_nav_menus( $header_menu_args );

    }

}
add_action( 'after_setup_theme', 'mooveit_lite_setup' );

/**
 *  WP Enqueue Style
 */
function mooveit_lite_wp_enqueue_style_movatique() {
    wp_enqueue_style( 'style', get_stylesheet_uri(), array(), '1.5' );
    wp_enqueue_style( 'nivo-lightbox', get_template_directory_uri() . '/css/nivo-lightbox.css', array(), '1.2.0' );
    wp_enqueue_style( 'font-family-archivo-narrow', '//fonts.googleapis.com/css?family=Archivo+Narrow:400,400italic,700,700italic' );
    wp_enqueue_style( 'font-family-source-sans-pro', '//fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' );
    wp_enqueue_style( 'font-family-roboto', '//fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic,900,900italic,100italic,100' );
    if ( is_rtl() ) {
        wp_enqueue_style( 'rtl', get_template_directory_uri() . '/rtl.css', array(), '1.0' );
    }
}
add_action( 'wp_enqueue_scripts', 'mooveit_lite_wp_enqueue_style_movatique' );

/**
 *  WP Enqueue Script Movatique
 */
function mooveit_lite_wp_enqueue_script_movatique() {
    wp_enqueue_script( 'masonry' );
    wp_enqueue_script( 'nivo-lightbox.min', get_template_directory_uri() . '/js/nivo-lightbox.min.js', array( 'jquery' ), '1.2.0', false );
    wp_enqueue_script( 'html5shiv', get_template_directory_uri() . '/js/html5shiv.js', array( 'jquery' ), '3.7.2', false );
    wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array( 'jquery' ), '1.0', true );

    if ( is_singular() ) wp_enqueue_script( "comment-reply" );
}
add_action( 'wp_enqueue_scripts', 'mooveit_lite_wp_enqueue_script_movatique' );

/**
 * Load only in IE as of WP 4.1
 */
function mooveit_lite_html5shiv( $tag, $handle, $src ) {
    if ( 'html5shiv' === $handle ) {
        $tag = "<!--[if lt IE 9]>\n";
        $tag .= "<script type='text/javascript' src='$src'></script>\n";
        $tag .= "<![endif]-->\n";
    }
    return $tag;
}
add_filter( 'script_loader_tag', 'mooveit_lite_html5shiv', 10, 3 );

/**
 *  General Sidebar
 */
function mooveit_lite_general_sidebar() {

	$args = array(
		'id'            => 'general_sidebar',
		'name'          => __( 'General Sidebar', 'mooveit_lite' ),
		'description'   => __( 'This sidebar will appear in blog page.', 'mooveit_lite' ),
		'before_title'  => '<div class="widget-title">',
		'after_title'   => '</div>',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
	);
	register_sidebar( $args );

}
add_action( 'widgets_init', 'mooveit_lite_general_sidebar' );

/**
 *  General Sidebar
 */
function mooveit_lite_footer_sidebar() {

    $args = array(
        'id'            => 'footer_sidebar',
        'name'          => __( 'Footer Sidebar', 'mooveit_lite' ),
        'description'   => __( 'This sidebar will appear in footer.', 'mooveit_lite' ),
        'before_title'  => '<div class="widget-title">',
        'after_title'   => '</div>',
        'before_widget' => '<div id="%1$s" class="footer-one-widget %2$s">',
        'after_widget'  => '</div>',
    );
    register_sidebar( $args );

}
add_action( 'widgets_init', 'mooveit_lite_footer_sidebar' );

/**
 *  Post Gallery
 */
add_filter('post_gallery', 'mooveit_lite_post_gallery', 10, 2);
function mooveit_lite_post_gallery($output, $attr) {
    global $post;

    if (isset($attr['orderby'])) {
        $attr['orderby'] = sanitize_sql_orderby($attr['orderby']);
        if (!$attr['orderby'])
            unset($attr['orderby']);
    }

    extract(shortcode_atts(array(
        'order' => 'ASC',
        'orderby' => 'menu_order ID',
        'id' => $post->ID,
        'itemtag' => 'dl',
        'icontag' => 'dt',
        'captiontag' => 'dd',
        'columns' => 3,
        'size' => 'thumbnail',
        'include' => '',
        'exclude' => ''
    ), $attr));

    $id = intval($id);
    if ('RAND' == $order) $orderby = 'none';

    if (!empty($include)) {
        $include = preg_replace('/[^0-9,]+/', '', $include);
        $_attachments = get_posts(array('include' => $include, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby));

        $attachments = array();
        foreach ($_attachments as $key => $val) {
            $attachments[$val->ID] = $_attachments[$key];
        }
    }

    if (empty($attachments)) return '';
    // Here's your actual output, you may customize it to your need
    $output = "<div id='custom-gallery gallery-". $post->ID ."' class='gallery galleryid-". $post->ID ." gallery-columns-". $columns ."'>\n";

    // Now you loop through each attachment
    foreach ($attachments as $id => $attachment) {
        // Fetch the thumbnail (or full image, it's up to you)
//      $img = wp_get_attachment_image_src($id, 'medium');
//      $img = wp_get_attachment_image_src($id, 'my-custom-image-size');
        $img = wp_get_attachment_image_src($id, 'full');

        $output .= "<dl class='gallery-item gallery-columns-". $columns ."'>";
        $output .= "<a href=\"{$img[0]}\" rel='post-". $post->ID ."' class=\"nivo-lightbox\" data-lightbox-gallery='" . $post->ID . "' title='". $attachment->post_excerpt ."'>\n";
        $output .= "<div class='gallery-item-thumb'><img src=\"{$img[0]}\" alt='". $attachment->post_excerpt ."' /></div>\n";
        $output .= "<div class='wp-caption-text'>";
        $output .= $attachment->post_excerpt;
        $output .= "</div>";
        $output .= "</a>\n";
        $output .= "</dl>";
    }

    $output .= "</div>\n";

    return $output;
}