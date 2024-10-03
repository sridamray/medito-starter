<?php

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function medito_starter_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'medito-starter' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'medito-starter' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Widgets', 'medito-starter' ),
			'id'            => 'footer-widgets',
			'description'   => esc_html__( 'Add widgets here.', 'medito-starter' ),
			'before_widget' => '<div id="%1$s" class="it-footer-widget  widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="it-footer-widget-title widget-title">',
			'after_title'   => '</h4>',
		)
	);
}
add_action( 'widgets_init', 'medito_starter_widgets_init' );