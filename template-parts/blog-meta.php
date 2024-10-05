<div class="postbox-meta mb-20">

    <span><i class="dashicons dashicons-admin-users"></i> <?php print get_the_author();?></span>
  
 
    <span><i class="dashicons dashicons-clock"></i><?php the_time( get_option('date_format') ); ?></span>

    <span><i class=" dashicons dashicons-admin-comments"></i><?php comments_number();?></span>
 
    
    <span><i class="dashicons dashicons-welcome-view-site"></i><?php echo medito_starter_get_post_view_count(get_the_ID()) . ' ' . esc_html__('Views', 'medito-starter'); ?>
</span>

</div>