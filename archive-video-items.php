<?php get_header(); ?>

<h1 class="blogHeading">Live Life Well</h1>



<div class="row">
            <!--BEGIN #primary .hfeed-->
            <div id="primary" class="hfeed">

            <?php
                $featured_args = array(
                                  'post_type' => 'video-items', 
                                  'limit' => 1, 
                                  'orderby' => 'post_date', 
                                  'order'=>'DESC',
                                  'meta_key' => '_video_featured',
                                  'meta_value' => serialize(array('featured'))
                                  );
                // The Featured Video Loop
                query_posts($featured_args);
                while ( have_posts() ) : the_post();
                  global $post; 
                    $featured_video_id = $post->ID;
                  ?>
        
                    <?php get_template_part( 'content', 'video' ); ?>

                	<?php
                endwhile;
                // Reset Query
                wp_reset_query();

             ?>
            <?php query_posts(array(
                    'post_type' => 'video-items',
                    'orderby' => 'post_date', 
                    'order'=>'DESC',
                    'post__not_in' => array($featured_video_id) // exclude featured video
                  )); 
            ?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <!--BEGIN .hentry -->
                <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                    <?php
                    get_template_part( 'content', 'video' );
                    ?>
                <!--END .hentry-->
                </div>

                <?php endwhile; ?>

                <!--BEGIN .navigation .page-navigation -->
                <div class="navigation page-navigation">
                    <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } else { ?>
                    <div class="nav-next"><?php next_posts_link(__('&lt; See Older Entries', 'wcrichmond')) ?></div>
                    <div class="nav-previous"><?php previous_posts_link(__('See Newer Entries &gt;', 'wcrichmond')) ?></div>
                    <?php } ?>
                <!--END .navigation .page-navigation -->
                </div>

            <?php else : ?>

                <!--BEGIN #post-0-->
                <div id="post-0" <?php post_class(); ?>>

                    <h2 class="entry-title"><?php _e('Error 404 - Not Found', 'wcrichmond') ?></h2>

                    <!--BEGIN .entry-content-->
                    <div class="entry-content">
                        <p><?php _e("Sorry, but you are looking for something that isn't here.", "wcrichmond") ?></p>
                    <!--END .entry-content-->
                    </div>

                <!--END #post-0-->
                </div>

            <?php endif; ?>

    <!--END #primary .hfeed-->
    </div>
<?php get_sidebar('videos'); ?>

</div> <!-- .row -->
<?php  get_template_part( 'sidebar', 'footerbanner-lifestyle-lifecare' ); ?>


<?php get_footer(); ?>