<?php

/**
 * Enqueue scripts and styles.
 */
function medito_starter_scripts() {
    wp_enqueue_style( 'medito-fonts', medito_starter_fonts_url(), array(), time() );
    wp_enqueue_style( 'medito-starter-bootstrap', get_template_directory_uri().'/assets/css/bootstrap.css', array() );
    wp_enqueue_style( 'medito-starter-main', get_template_directory_uri().'/assets/css/main.css', array() );
    wp_enqueue_style( 'medito-starter-custom', get_template_directory_uri().'/assets/css/theme-custom.css', array() );
	wp_enqueue_style( 'medito-starter-style', get_stylesheet_uri(), array(), );
	wp_style_add_data( 'medito-starter-style', 'rtl', 'replace' );


     wp_enqueue_style('dashicons');
    

	wp_enqueue_script( 'medito-starter-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js',[ 'jquery' ],  '', true );
	wp_enqueue_script( 'medito-starter-bootstrap-bundle', get_template_directory_uri() . '/assets/js/bootstrap-bundle.js',[ 'jquery' ],  '', true );
	wp_enqueue_script( 'medito-starter-main', get_template_directory_uri() . '/assets/js/main.js',[ 'jquery' ],  '', true );
	wp_enqueue_script( 'medito-starter-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '', true );

    
    wp_enqueue_script( 'medito-starter-ajax', get_template_directory_uri() . '/assets/js/custom-ajax.js', array( 'jquery' ), '', true );

    wp_localize_script( 'medito-starter-ajax', 'custom_ajax_init', array(
        'ajaxurl' => admin_url( 'admin-ajax.php' )
    ));

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'medito_starter_scripts' );


/*
Register Fonts
 */
function medito_starter_fonts_url() {
    $font_url = '';

    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'medito-starter' ) ) {
        $font_url = 'https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet';
    }
    return $font_url;
}