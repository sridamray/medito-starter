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