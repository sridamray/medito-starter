<?php

// Header Action Function
function medito_starter_check_header() {

    get_template_part( 'template-parts/header/header-default' );


}
add_action( 'medito_starter_header_style', 'medito_starter_check_header', 10 );
// Footer Action Function
function medito_starter_check_footer() {

    get_template_part( 'template-parts/footer/footer-default' );


}
add_action( 'medito_starter_footer_style', 'medito_starter_check_footer', 10 );


function medito_starter_header_menu() {
	wp_nav_menu(
		array(
			'theme_location' => 'menu-1',
			'menu_id'        => 'primary-menu',
		)
	);
}


// Start the session
function medito_starter_start_session() {
    if (!session_id()) {
        session_start();
    }
}
add_action('init', 'medito_starter_start_session');

// Get post view count
function medito_starter_get_post_view_count($post_id) {
    $count = get_post_meta($post_id, 'post_view_count', true);
    return empty($count) ? 0 : $count;
}

// Set post view count
function medito_starter_set_post_view_count($post_id) {
    $count = medito_starter_get_post_view_count($post_id);
    $count++;
    update_post_meta($post_id, 'post_view_count', $count);
}


