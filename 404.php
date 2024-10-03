<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Medito_Starter
 */

get_header();
?>

	<main id="primary" class="site-main">
<!-- error-area-start -->
      <div class="it-error-area pt-120 pb-120">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-12">
                  <div class="it-error-wrap text-center">
                     <div class="it-error-thumb mb-70">
                       
                     </div>
                     <div class="it-error-content">
                        <h5 class="it-error-title wow itfadeUp" data-wow-duration=".9s" data-wow-delay=".3s"><?php echo esc_html__('Sorry, Page Not Found!', 'medito-starter');?></h5>
                        <p class="mb-25 wow itfadeUp" data-wow-duration=".9s" data-wow-delay=".5s"><?php echo esc_html__('Page Not Found!', 'medito-starter');?></p>
                        <a class="it-btn-theme mr-30 wow itfadeUp" data-wow-duration=".9s" data-wow-delay=".7s" href="<?php echo esc_url(home_url());?>">
                           <span class="btn-wrap">
                              <span class="text-one">
                                 <?php echo esc_html__('Back To Home', 'medito-starter');?>
                              </span>
                              <span class="text-two">
                                 <?php echo esc_html__('Back To Home', 'medito-starter');?>
                              </span>
                           </span>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- error-area-end -->
 

	</main><!-- #main -->

<?php
get_footer();
