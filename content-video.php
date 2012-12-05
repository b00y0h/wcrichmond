<?php 
if(get_post_meta($post->ID, '_video_link', true)) :

$is_featured = get_post_meta($post->ID, '_video_featured', true);
        if ($is_featured) { $is_featured = $is_featured[0]; } else { $is_featured = 0; }
        // echo $is_featured; ?>

<!--BEGIN .entry-content -->
<div class="entry-content">
    <div class="thumbnail-wrap">
    <a href="<?php echo get_post_meta($post->ID, '_video_link', true); ?>" class="thumbnail button"><?if ( has_post_thumbnail() ) { the_post_thumbnail();} else{ the_title(); } ?></a>
    </div>
    <div class="entry-content-snippet">
    <h2 class="entry-title"><?php the_title(); ?></h2>
    <?php the_content(); ?>
    </div>

<!--END .entry-content -->
</div>
<?php endif; ?>