<?php 

	/**
	 * Template part for displaying header layout one
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package medito starter
	*/

	

?>


      <header>
      <div id="header-sticky" class="it-header-area it-header-ptb it-header-style-2 black-bg">
         <div class="container">  
            <div class="p-relative">
               <div class="row align-items-center">
                  <div class="col-xl-2 col-lg-6 col-6">
                     <div class="it-header-logo">
                        <?php 
                            if ( has_custom_logo() ) {
                                the_custom_logo();
                            } else { 
                                ?>
                                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                                <?php
                            }
                            ?>
                     </div>
                  </div>
                  <div class="col-xl-7 d-none d-xl-block align-item-center'">
                     <div class="it-header-main-menu it-main-menu">
                        <nav class="it-menu-content">
                           <?php medito_starter_header_menu();?>
                        </nav>
                     </div>
                  </div>
                 
                  <div class="col-xl-3 col-lg-6 col-6">
                     <div class="it-header-button d-flex align-items-center justify-content-end">
                        <?php if(function_exists('is_woocommerce')):?>
                        <div class="it-header-shop cart p-relative d-none d-md-block ml-30">
                           <button>
                              <span>
                                 <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.5 7.67V6.7C7.5 4.45 9.31 2.24 11.56 2.03C14.24 1.77 16.5 3.88 16.5 6.51V7.89" stroke="currentcolor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M9.00007 22H15.0001C19.0201 22 19.7401 20.39 19.9501 18.43L20.7001 12.43C20.9701 9.99 20.2701 8 16.0001 8H8.00007C3.73007 8 3.03007 9.99 3.30007 12.43L4.05007 18.43C4.26007 20.39 4.98007 22 9.00007 22Z" stroke="currentcolor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M15.4955 12H15.5045" stroke="currentcolor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M8.49451 12H8.50349" stroke="currentcolor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                 </svg>
                              </span>
                           </button>
                           <div class="minicart" id="dynamic_cart">
                              <?php
                              // Get cart items
                              $cart = WC()->cart->get_cart();
                              
                              if ($cart) {
                                 foreach ($cart as $cart_item_key => $cart_item) {
                                    $_product = $cart_item['data'];
                                    $product_name = $_product->get_name();
                                    $product_price = WC()->cart->get_product_price($_product);
                                    $product_url = esc_url(get_permalink($cart_item['product_id']));
                                    $product_img = esc_url(wp_get_attachment_image_src(get_post_thumbnail_id($cart_item['product_id']), 'thumbnail')[0]);
                                    $product_subtotal = WC()->cart->get_product_subtotal($_product, $cart_item['quantity']);
                                    $short_title = wp_trim_words($product_name, 3); // Shortened product name

                                    echo '<div class="cart-content-wrap d-flex align-items-center justify-content-between">';
                                    echo '<div class="cart-img-info d-flex align-items-center">';
                                    echo '<div class="cart-thumb"><a href="' . $product_url . '"><img src="' . $product_img . '" alt="' . esc_attr($product_name) . '"></a></div>';
                                    echo '<div class="cart-content">';
                                    echo '<h5 class="cart-title"><a href="' . $product_url . '">' . esc_html($short_title) . '</a></h5>';
                                    echo '<span>' . $product_price . ' <del>' . $product_subtotal . '</del></span>';
                                    echo '</div>';
                                    echo '</div>';
                                    echo '<div class="cart-del-icon"><span><i class="fa-light fa-trash-can" onclick="remove_cart_item(\'' . esc_js($cart_item_key) . '\')"></i></span></div>';
                                    echo '</div>';
                                 }

                                 // Display total
                                 echo '<div class="cart-total-price d-flex align-items-center justify-content-between">';
                                 echo '<span>' . esc_html__('Total:', 'medito-starter') . '</span>';
                                 echo '<span>' . WC()->cart->get_cart_total() . '</span>';
                                 echo '</div>';

                                 // Display buttons
                                 echo '<div class="cart-btn">';
                                 echo '<a class="it-btn-theme w-100 d-flex justify-content-center mb-10" href="' . wc_get_cart_url() . '">';
                                 echo '<span class="btn-wrap"><span class="text-one">' . esc_html__('Shopping Cart', 'medito-starter') . '</span><span class="text-two">' . esc_html__('Shopping Cart', 'medito-starter') . '</span></span>';
                                 echo '</a>';
                                 echo '<a class="it-btn-theme black-bg d-flex justify-content-center w-100" href="' . wc_get_checkout_url() . '">';
                                 echo '<span class="btn-wrap"><span class="text-one">' . esc_html__('Checkout', 'medito-starter') . '</span><span class="text-two">' . esc_html__('Checkout', 'medito-starter') . '</span></span>';
                                 echo '</a>';
                                 echo '</div>';
                              } else {
                                 echo '<p>' . esc_html__('Your cart is empty.', 'medito-starter') . '</p>';
                              }
                              ?>
                           </div>

                           
                        </div>
                     <?php endif;?>
                        <a class="it-btn-theme white-bg lg d-none d-lg-block" href="#">
                           <span class="btn-wrap">                           
                              <span class="text-one">
                                 <i>
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <g clip-path="url(#clip0_296_1301)">
                                         <path d="M13.5703 8.08594C13.9586 8.08594 14.2734 7.77114 14.2734 7.38281C14.2734 6.99449 13.9586 6.67969 13.5703 6.67969C13.182 6.67969 12.8672 6.99449 12.8672 7.38281C12.8672 7.77114 13.182 8.08594 13.5703 8.08594Z" fill="currentcolor" />
                                         <path d="M15.1875 1.40625H14.2734V0.703125C14.2734 0.314789 13.9586 0 13.5703 0C13.182 0 12.8672 0.314789 12.8672 0.703125V1.40625H9.66797V0.703125C9.66797 0.314789 9.35318 0 8.96484 0C8.57651 0 8.26172 0.314789 8.26172 0.703125V1.40625H5.09766V0.703125C5.09766 0.314789 4.78287 0 4.39453 0C4.0062 0 3.69141 0.314789 3.69141 0.703125V1.40625H2.8125C1.26169 1.40625 0 2.66794 0 4.21875V15.1875C0 16.7383 1.26169 18 2.8125 18H8.19141C8.57974 18 8.89453 17.6852 8.89453 17.2969C8.89453 16.9085 8.57974 16.5938 8.19141 16.5938H2.8125C2.03709 16.5938 1.40625 15.9629 1.40625 15.1875V4.21875C1.40625 3.44334 2.03709 2.8125 2.8125 2.8125H3.69141V3.51562C3.69141 3.90396 4.0062 4.21875 4.39453 4.21875C4.78287 4.21875 5.09766 3.90396 5.09766 3.51562V2.8125H8.26172V3.51562C8.26172 3.90396 8.57651 4.21875 8.96484 4.21875C9.35318 4.21875 9.66797 3.90396 9.66797 3.51562V2.8125H12.8672V3.51562C12.8672 3.90396 13.182 4.21875 13.5703 4.21875C13.9586 4.21875 14.2734 3.90396 14.2734 3.51562V2.8125H15.1875C15.9629 2.8125 16.5938 3.44334 16.5938 4.21875V8.22656C16.5938 8.6149 16.9085 8.92969 17.2969 8.92969C17.6852 8.92969 18 8.6149 18 8.22656V4.21875C18 2.66794 16.7383 1.40625 15.1875 1.40625Z" fill="currentcolor" />
                                         <path d="M13.7461 9.49219C11.4005 9.49219 9.49219 11.4005 9.49219 13.7461C9.49219 16.0917 11.4005 18 13.7461 18C16.0917 18 18 16.0917 18 13.7461C18 11.4005 16.0917 9.49219 13.7461 9.49219ZM13.7461 16.5938C12.1759 16.5938 10.8984 15.3163 10.8984 13.7461C10.8984 12.1759 12.1759 10.8984 13.7461 10.8984C15.3163 10.8984 16.5938 12.1759 16.5938 13.7461C16.5938 15.3163 15.3163 16.5938 13.7461 16.5938Z" fill="currentcolor" />
                                         <path d="M14.7656 13.043H14.4492V12.3047C14.4492 11.9164 14.1344 11.6016 13.7461 11.6016C13.3578 11.6016 13.043 11.9164 13.043 12.3047V13.7461C13.043 14.1344 13.3578 14.4492 13.7461 14.4492H14.7656C15.154 14.4492 15.4688 14.1344 15.4688 13.7461C15.4688 13.3578 15.154 13.043 14.7656 13.043Z" fill="currentcolor" />
                                         <path d="M10.5117 8.08594C10.9 8.08594 11.2148 7.77114 11.2148 7.38281C11.2148 6.99449 10.9 6.67969 10.5117 6.67969C10.1234 6.67969 9.80859 6.99449 9.80859 7.38281C9.80859 7.77114 10.1234 8.08594 10.5117 8.08594Z" fill="currentcolor" />
                                         <path d="M7.45312 11.1445C7.84145 11.1445 8.15625 10.8297 8.15625 10.4414C8.15625 10.0531 7.84145 9.73828 7.45312 9.73828C7.0648 9.73828 6.75 10.0531 6.75 10.4414C6.75 10.8297 7.0648 11.1445 7.45312 11.1445Z" fill="currentcolor" />
                                         <path d="M4.39453 8.08594C4.78286 8.08594 5.09766 7.77114 5.09766 7.38281C5.09766 6.99449 4.78286 6.67969 4.39453 6.67969C4.00621 6.67969 3.69141 6.99449 3.69141 7.38281C3.69141 7.77114 4.00621 8.08594 4.39453 8.08594Z" fill="currentcolor" />
                                         <path d="M4.39453 11.1445C4.78286 11.1445 5.09766 10.8297 5.09766 10.4414C5.09766 10.0531 4.78286 9.73828 4.39453 9.73828C4.00621 9.73828 3.69141 10.0531 3.69141 10.4414C3.69141 10.8297 4.00621 11.1445 4.39453 11.1445Z" fill="currentcolor" />
                                         <path d="M4.39453 14.2031C4.78286 14.2031 5.09766 13.8883 5.09766 13.5C5.09766 13.1117 4.78286 12.7969 4.39453 12.7969C4.00621 12.7969 3.69141 13.1117 3.69141 13.5C3.69141 13.8883 4.00621 14.2031 4.39453 14.2031Z" fill="currentcolor" />
                                         <path d="M7.45312 14.2031C7.84145 14.2031 8.15625 13.8883 8.15625 13.5C8.15625 13.1117 7.84145 12.7969 7.45312 12.7969C7.0648 12.7969 6.75 13.1117 6.75 13.5C6.75 13.8883 7.0648 14.2031 7.45312 14.2031Z" fill="currentcolor" />
                                         <path d="M7.45312 8.08594C7.84145 8.08594 8.15625 7.77114 8.15625 7.38281C8.15625 6.99449 7.84145 6.67969 7.45312 6.67969C7.0648 6.67969 6.75 6.99449 6.75 7.38281C6.75 7.77114 7.0648 8.08594 7.45312 8.08594Z" fill="currentcolor" />
                                       </g>
                                       <defs>
                                         <clipPath id="clip0_296_1301">
                                           <rect width="18" height="18" fill="currentcolor" />
                                         </clipPath>
                                       </defs>
                                     </svg>
                                 </i>
                               <?php echo esc_html__('Contact Us', 'medito-starter');?>
                              </span>                            
                              <span class="text-two">
                                 <i>
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <g clip-path="url(#clip0_296_1301)">
                                         <path d="M13.5703 8.08594C13.9586 8.08594 14.2734 7.77114 14.2734 7.38281C14.2734 6.99449 13.9586 6.67969 13.5703 6.67969C13.182 6.67969 12.8672 6.99449 12.8672 7.38281C12.8672 7.77114 13.182 8.08594 13.5703 8.08594Z" fill="currentcolor" />
                                         <path d="M15.1875 1.40625H14.2734V0.703125C14.2734 0.314789 13.9586 0 13.5703 0C13.182 0 12.8672 0.314789 12.8672 0.703125V1.40625H9.66797V0.703125C9.66797 0.314789 9.35318 0 8.96484 0C8.57651 0 8.26172 0.314789 8.26172 0.703125V1.40625H5.09766V0.703125C5.09766 0.314789 4.78287 0 4.39453 0C4.0062 0 3.69141 0.314789 3.69141 0.703125V1.40625H2.8125C1.26169 1.40625 0 2.66794 0 4.21875V15.1875C0 16.7383 1.26169 18 2.8125 18H8.19141C8.57974 18 8.89453 17.6852 8.89453 17.2969C8.89453 16.9085 8.57974 16.5938 8.19141 16.5938H2.8125C2.03709 16.5938 1.40625 15.9629 1.40625 15.1875V4.21875C1.40625 3.44334 2.03709 2.8125 2.8125 2.8125H3.69141V3.51562C3.69141 3.90396 4.0062 4.21875 4.39453 4.21875C4.78287 4.21875 5.09766 3.90396 5.09766 3.51562V2.8125H8.26172V3.51562C8.26172 3.90396 8.57651 4.21875 8.96484 4.21875C9.35318 4.21875 9.66797 3.90396 9.66797 3.51562V2.8125H12.8672V3.51562C12.8672 3.90396 13.182 4.21875 13.5703 4.21875C13.9586 4.21875 14.2734 3.90396 14.2734 3.51562V2.8125H15.1875C15.9629 2.8125 16.5938 3.44334 16.5938 4.21875V8.22656C16.5938 8.6149 16.9085 8.92969 17.2969 8.92969C17.6852 8.92969 18 8.6149 18 8.22656V4.21875C18 2.66794 16.7383 1.40625 15.1875 1.40625Z" fill="currentcolor" />
                                         <path d="M13.7461 9.49219C11.4005 9.49219 9.49219 11.4005 9.49219 13.7461C9.49219 16.0917 11.4005 18 13.7461 18C16.0917 18 18 16.0917 18 13.7461C18 11.4005 16.0917 9.49219 13.7461 9.49219ZM13.7461 16.5938C12.1759 16.5938 10.8984 15.3163 10.8984 13.7461C10.8984 12.1759 12.1759 10.8984 13.7461 10.8984C15.3163 10.8984 16.5938 12.1759 16.5938 13.7461C16.5938 15.3163 15.3163 16.5938 13.7461 16.5938Z" fill="currentcolor" />
                                         <path d="M14.7656 13.043H14.4492V12.3047C14.4492 11.9164 14.1344 11.6016 13.7461 11.6016C13.3578 11.6016 13.043 11.9164 13.043 12.3047V13.7461C13.043 14.1344 13.3578 14.4492 13.7461 14.4492H14.7656C15.154 14.4492 15.4688 14.1344 15.4688 13.7461C15.4688 13.3578 15.154 13.043 14.7656 13.043Z" fill="currentcolor" />
                                         <path d="M10.5117 8.08594C10.9 8.08594 11.2148 7.77114 11.2148 7.38281C11.2148 6.99449 10.9 6.67969 10.5117 6.67969C10.1234 6.67969 9.80859 6.99449 9.80859 7.38281C9.80859 7.77114 10.1234 8.08594 10.5117 8.08594Z" fill="currentcolor" />
                                         <path d="M7.45312 11.1445C7.84145 11.1445 8.15625 10.8297 8.15625 10.4414C8.15625 10.0531 7.84145 9.73828 7.45312 9.73828C7.0648 9.73828 6.75 10.0531 6.75 10.4414C6.75 10.8297 7.0648 11.1445 7.45312 11.1445Z" fill="currentcolor" />
                                         <path d="M4.39453 8.08594C4.78286 8.08594 5.09766 7.77114 5.09766 7.38281C5.09766 6.99449 4.78286 6.67969 4.39453 6.67969C4.00621 6.67969 3.69141 6.99449 3.69141 7.38281C3.69141 7.77114 4.00621 8.08594 4.39453 8.08594Z" fill="currentcolor" />
                                         <path d="M4.39453 11.1445C4.78286 11.1445 5.09766 10.8297 5.09766 10.4414C5.09766 10.0531 4.78286 9.73828 4.39453 9.73828C4.00621 9.73828 3.69141 10.0531 3.69141 10.4414C3.69141 10.8297 4.00621 11.1445 4.39453 11.1445Z" fill="currentcolor" />
                                         <path d="M4.39453 14.2031C4.78286 14.2031 5.09766 13.8883 5.09766 13.5C5.09766 13.1117 4.78286 12.7969 4.39453 12.7969C4.00621 12.7969 3.69141 13.1117 3.69141 13.5C3.69141 13.8883 4.00621 14.2031 4.39453 14.2031Z" fill="currentcolor" />
                                         <path d="M7.45312 14.2031C7.84145 14.2031 8.15625 13.8883 8.15625 13.5C8.15625 13.1117 7.84145 12.7969 7.45312 12.7969C7.0648 12.7969 6.75 13.1117 6.75 13.5C6.75 13.8883 7.0648 14.2031 7.45312 14.2031Z" fill="currentcolor" />
                                         <path d="M7.45312 8.08594C7.84145 8.08594 8.15625 7.77114 8.15625 7.38281C8.15625 6.99449 7.84145 6.67969 7.45312 6.67969C7.0648 6.67969 6.75 6.99449 6.75 7.38281C6.75 7.77114 7.0648 8.08594 7.45312 8.08594Z" fill="currentcolor" />
                                       </g>
                                       <defs>
                                         <clipPath id="clip0_296_13011">
                                           <rect width="18" height="18" fill="currentcolor" />
                                         </clipPath>
                                       </defs>
                                     </svg>
                                 </i>
                               <?php echo esc_html__('Contact Us', 'medito-starter');?>
                              </span>                            
                           </span>
                        </a>
                        <div class="it-header-bar d-xl-none">
                           <button class="it-menu-bar">
                              <span><i class=" dashicons dashicons-menu"></i></span>
                           </button>
                        </div>
                     </div>
                  </div>
               </div>   
            </div>
         </div>
      </div>      
   </header>


   
	<?php get_template_part( 'template-parts/header/offcanvas' ); ?>




