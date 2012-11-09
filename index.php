<?php get_header(); ?>
                <h1 class="blogHeading">
                    Around the Community
                </h1>

<div class="row">
            <!--BEGIN #primary .hfeed-->
            <div id="primary" class="hfeed">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <!--BEGIN .hentry -->
                <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">

                    <?php
                    $format = get_post_format();
                    get_template_part( 'content', $format );
                    ?>

                    <?php wcrichmond_post_end(); ?>
                <!--END .hentry-->
                </div>

                <?php endwhile; ?>

                <!--BEGIN .navigation .page-navigation -->
                <div class="navigation page-navigation">
                    <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } else { ?>
                    <div class="nav-next"><?php next_posts_link(__('&larr; Older Entries', 'wcrichmond')) ?></div>
                    <div class="nav-previous"><?php previous_posts_link(__('Newer Entries &rarr;', 'wcrichmond')) ?></div>
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

<?php get_sidebar(); ?>

</div> <!-- .row -->

<?php get_footer(); ?>