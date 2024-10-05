<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Medito_Starter
 */

get_header();
?>

	<div class="search-page section-padding">
		<div class="container">
			<div class="row">
				<div class="col-xl-8 col-lg-8">
					<div class="single-post-area">
							<?php
								while ( have_posts() ) :
									the_post();

									get_template_part( 'template-parts/content', get_post_type() );

									the_post_navigation(
										array(
											'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'medito-starter' ) . '</span> <span class="nav-title">%title</span>',
											'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'medito-starter' ) . '</span> <span class="nav-title">%title</span>',
										)
									);

									// If comments are open or we have at least one comment, load up the comment template.
									if ( comments_open() || get_comments_number() ) :
										comments_template();
									endif;

								endwhile; // End of the loop.
							?>
										</div>
				</div>
				<div class="col-xl-4 col-lg-4">
					<div class="sidebar ml-40">
						<?php get_sidebar();?>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php
get_sidebar();
get_footer();
