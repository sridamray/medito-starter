<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Medito_Starter
 */

get_header();
?>

	<main id="primary" class="site-main">

		<div class="archive-page section-padding">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-xl-8">
						<?php if ( have_posts() ) : ?>

							<?php
							/* Start the Loop */
							while ( have_posts() ) :
								the_post();

								/*
								* Include the Post-Type-specific template for the content.
								* If you want to override this in a child theme, then include a file
								* called content-___.php (where ___ is the Post Type name) and that will be used instead.
								*/
								get_template_part( 'template-parts/content', get_post_type() );

							endwhile;

							the_posts_navigation();

						else :

							get_template_part( 'template-parts/content', 'none' );

						endif;
						?>
					</div>
					<div class="col-xl-4 col-lg-4">
						<div class="sidebar ml-40">
							<?php get_sidebar();?>
						</div>
					</div>
				</div>
			</div>
		</div>

	</main><!-- #main -->

<?php

get_footer();
