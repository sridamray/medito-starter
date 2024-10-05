<?php
/**
 * Medito Starter functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Medito_Starter
 */



/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function medito_starter_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Medito Starter, use a find and replace
		* to change 'medito-starter' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'medito-starter', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'medito-starter' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'medito_starter_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	add_theme_support( 'woocommerce' );
	  add_theme_support('responsive-embeds');
	  add_theme_support( "wp-block-styles" );
	   add_theme_support( "align-wide" );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'medito_starter_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function medito_starter_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'medito_starter_content_width', 640 );
}
add_action( 'after_setup_theme', 'medito_starter_content_width', 0 );



function medito_starter_styles() {
    add_editor_style('editor-style.css'); // Add a custom editor-style.css file to your theme.
}
add_action('admin_init', 'medito_starter_styles');



/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Theme Scripts.
 */
require get_template_directory() . '/inc/common/theme-scripts.php';

/**
 * Theme Functions
 */
require get_template_directory() . '/inc/common/theme/theme-functions.php';
//theme widgets
require get_template_directory() . '/inc/common/theme-widgets.php';
require get_template_directory() . '/inc/common/theme-breadcrumb.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}





function medito_starter_register_block_styles() {
    register_block_style(
        'core/paragraph',
        array(
            'name'  => 'fancy-paragraph',
            'label' => __('Fancy Paragraph', 'medito-starter'),
        )
    );
}
add_action('init', 'medito_starter_register_block_styles');

function medito_starter_block_patterns() {
    register_block_pattern(
        'mytheme/custom-pattern',
        array(
            'title' => __('My Custom Pattern', 'medito-starter'),
            'description' => _x('A custom block pattern for posts', 'Block pattern description', 'medito-starter'),
            'content' => '<!-- wp:paragraph --><p>' . __('This is a custom pattern', 'medito-starter') . '</p><!-- /wp:paragraph -->',
        )
    );
}
add_action('init', 'medito_starter_block_patterns');




