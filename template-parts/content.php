<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Medito_Starter
 */

global $post;

if ( is_single() ) : ?>




<article id="post-<?php the_ID();?>" <?php post_class( 'postbox-item format-standard' );?>>
	<h3 class="postbox-title mb-15"><?php the_title();?></h3>
    <?php if ( has_post_thumbnail() ): ?>
        <div class="postbox-thumb radius mb-35">
           <?php the_post_thumbnail( 'full', ['class' => 'img-responsive'] );?>
        </div>
    <?php endif;?>
        <?php get_template_part( 'template-parts/blog-meta' ); ?>
    <div class="postbox-content mb-30">
       <?php the_content();?>
       <?php
            wp_link_pages( [
                'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'medito-starter' ),
                'after'       => '</div>',
                'link_before' => '<span class="page-number">',
                'link_after'  => '</span>',
            ] );
        ?>
    </div>
    
   
   
 </article>

<?php else: ?>

   
    <article  id="post-<?php the_ID();?>" <?php post_class( 'postbox-thumb-box mb-80 format-standard' );?>>
        <?php if ( has_post_thumbnail() ): ?>
            <div class="postbox-main-thumb mb-35">
               <a href="<?php the_permalink();?>">
                    <?php the_post_thumbnail( 'full', ['class' => 'img-responsive'] );?>
                </a>
            </div>
        <?php endif;?>

        <div class="postbox-content-box">
            <?php get_template_part( 'template-parts/blog-meta' ); ?>
           <h4 class="postbox-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
            <p class="mt-15 mb-30">
                <?php echo wp_trim_words( get_the_content(), 30, '...'); ?>
            </p>

        
            <a class="it-btn-theme mr-30" href="<?php the_permalink();?>">
                <span class="btn-wrap">
                    <span class="text-one">
                    <?php echo esc_html__('Read More', 'medito-starter');?>
                    </span>
                    <span class="text-two">
                     <?php echo esc_html__('Read More', 'medito-starter');?>
                    </span>
                </span>
            </a>
         
        </div>
    </article>


<?php endif;?>