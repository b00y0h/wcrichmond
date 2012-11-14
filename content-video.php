<?php $is_featured = get_post_meta($post->ID, '_video_featured', true);
        if ($is_featured) { $is_featured = $is_featured[0]; } else { $is_featured = 0; }
        // echo $is_featured; ?>

<!--BEGIN .entry-content -->
<div class="entry-content">

    <?php
    if ( has_post_thumbnail() ) { ?>
    <a href="<?php echo get_post_meta($post->ID, '_video_link', true); ?>" class="thumbnail">
    <?php the_post_thumbnail();} ?>
    </a>
    <h2 class="entry-title"><?php the_title(); ?></h2>

    <?php the_content(); ?>

<!--END .entry-content -->
</div>