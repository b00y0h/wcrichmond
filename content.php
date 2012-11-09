
<?php if( is_single() ) { ?>

    <h1 class="entry-title"><?php the_title(); ?></h1>
    <div class="datestamp">
        <?php the_date(); ?>
    </div>


<?php } else { ?>

    <h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'wcrichmond'), get_the_title()); ?>"> <?php the_title(); ?>
        <?php get_template_part( 'content' , 'meta-header' ); ?>
    </a>
    </h2>


        <?php /* if the post has a WP 2.9+ Thumbnail */
        if ( (function_exists('has_post_thumbnail')) && (has_post_thumbnail()) ) { ?>
        <div class="post-thumb">

            <?php if( !is_single() ) { ?><a title="<?php printf(__('Permanent Link to %s', 'wcrichmond'), get_the_title()); ?>" href="<?php the_permalink(); ?>"><?php } ?>
                <?php the_post_thumbnail('blog-index'); /* post thumbnail settings configured in functions.php */ ?>
            <?php if( !is_single() ) { ?></a><?php } ?>

        </div>
        <?php } ?>
<?php } ?>


<!--BEGIN .entry-content -->
<div class="entry-content">

    <?php
    the_content( __('(more...)', 'wcrichmond') );
    wp_link_pages(array('before' => '<p class="post-paging"><strong>'.__('Pages:', 'wcrichmond').'</strong> ', 'after' => '</p>', 'next_or_number' => 'number'));
    ?>

<!--END .entry-content -->
</div>

<?php if( is_single() ) {

    get_template_part( 'content', 'meta-footer' );

} ?>