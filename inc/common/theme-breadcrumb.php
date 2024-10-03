<?php
/**
 * Breadcrumbs for medito Starter theme.
 *
 * @package     medito
 * @author      Ordainit
 * @copyright   Copyright (c) 2024, Ordainit
 * @link        https://ordainit.com
 * @since       medito  starter 1.0.0
 */




function medito_starter_breadcrumb_func() {
 


  if ( is_front_page() && is_home() ) {
    // Case for the homepage when the front page is also the blog page
    $title =  __('Blog','medito-starter');
}
elseif ( is_front_page() ) {
    // Case for the homepage when it’s not the blog page
    $title =  __('Blog','medito-starter');
}
elseif ( is_home() ) {
    // Case for the blog page
    if ( get_option( 'page_for_posts' ) ) {
        $title = get_the_title( get_option( 'page_for_posts') );
    }
}
elseif ( is_single() && 'post' == get_post_type() ) {
    // Single blog post
    $title = get_the_title();
}
elseif ( is_single() && 'product' == get_post_type() ) {
    // Single product page
    $title = get_the_title(); // Get the product title dynamically
}
elseif ( is_single() && 'courses' == get_post_type() ) {
    // Single course page
    $title = esc_html__( 'Course Details', 'medito-starter' );
}
elseif ( is_post_type_archive( 'courses' ) ) {
    // Course archive page
    $title = esc_html__( 'Courses', 'medito-starter' );
}
elseif ( is_product_category() ) {
    // WooCommerce product category page
    $title = single_term_title( '', false ); // Get the category name
}
elseif ( is_product_tag() ) {
    // WooCommerce product tag page
    $title = single_term_title( '', false ); // Get the tag name
}
elseif ( is_search() ) {
    // Search results page
    $title = esc_html__( 'Search Results for : ', 'medito-starter' ) . get_search_query();
}
elseif ( is_404() ) {
    // 404 page
    $title = esc_html__( 'Page not Found', 'medito-starter' );
}
elseif ( function_exists( 'is_woocommerce' ) && is_woocommerce() ) {
    // WooCommerce specific pages
    if ( is_shop() ) {
        // WooCommerce shop page
        $title = get_theme_mod( 'breadcrumb_shop', __( 'Shop', 'medito-starter' ) );
    }
}
elseif ( is_archive() ) {
    // Generic archive page
    $title = get_the_archive_title();
} 
else {
    // Fallback for any other page
    $title = get_the_title();
}

 



   

   
      

       
        
        ?>

    
        <div class="it-breadcrumb-area fix it-breadcrumb-bg p-relative">
         <div class="container">
            <div class="row ">
               <div class="col-md-12">
                  <div class="it-breadcrumb-content z-index-3">
                     <div class="it-breadcrumb-title-box">
                        <h3 class="it-breadcrumb-title"><?php echo wp_kses($title, wp_kses_allowed_html('post')); ?></h3>
                     </div>
                     <div class="it-breadcrumb-list-wrap">
                        <div class="it-breadcrumb-list">
                           <span><a href="<?php echo esc_url( home_url());?>"><?php echo wp_kses('home', 'medito-starter');?></a></span> 
                           <span class="dvdr"><?php echo esc_html__('//', 'medito-starter' );?></span>
                           <i><?php echo wp_kses($title, wp_kses_allowed_html('post')); ?></i>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

   
        <?php
      
}

add_action( 'medito_starter_before_main_content', 'medito_starter_breadcrumb_func' );



