<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Medito_Starter
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
      <!-- preloader -->
      <div id="preloader">
         <div class="preloader">
            <span></span>
            <span></span>
         </div>
      </div>
      <!-- preloader end  -->


<!-- back-to-top-start  -->
      <button class="scroll-top scroll-to-target" data-target="html">
         <i class="far fa-angle-double-up"></i>
      </button>
      <!-- back-to-top-end  -->
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'medito-starter' ); ?></a>
		<?php do_action('medito_starter_header_style');?>
	 <!-- wrapper-box start -->
    <?php do_action( 'medito_starter_before_main_content' );?>
