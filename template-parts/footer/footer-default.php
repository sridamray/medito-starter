	<footer class="site-footer">
        <div class="footer-widgets-area">
            <div class="container">
                <?php dynamic_sidebar('footer-widgets');?>
            </div>
        </div>
		<div class="copywrite_write_area">
            <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 text-center">
                    <div class="site-info">
                        <span>&copy; <?php echo esc_html( date('Y') ); ?></span>
                        <a href="<?php echo esc_url( home_url(), 'medito-starter' ); ?>">
                            <?php echo esc_html( get_bloginfo('name') ); ?> 
                        </a>
                        <span> | </span>
                        <span><?php esc_html__('All rights reserved.', 'medito-starter'); ?></span>
                        <span class="sep"> | </span>
                            <?php
                            echo esc_html__('Theme Developed By', 'medito-starter');
                            ?>
                            <a target="_blank" href="<?php echo esc_url( __( 'https://ordainit.com/', 'medito-starter' ) ); ?>"><?php echo esc_html__('Ordainit', 'medito-starter');?></a>
                    </div><!-- .site-info -->
                </div>
            </div>
        </div>
        </div>
	</footer><!-- #colophon -->