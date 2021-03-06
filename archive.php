<?php get_header(); ?>

<h1 class="blogHeading">

        <?php if(have_posts()) : ?>

        <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
        <?php /* If this is a category archive */
        if (is_category()) { ?>
            Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category
        <?php /* If this is a tag archive */
        } elseif( is_tag() ) { ?>
            Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;
        <?php /* If this is a daily archive */
        } elseif (is_day()) { ?>
            Archive for <?php the_time('F jS, Y'); ?>
        <?php /* If this is a monthly archive */
        } elseif (is_month()) { ?>
            Archive for <?php the_time('F, Y'); ?>
        <?php /* If this is a yearly archive */
        } elseif (is_year()) { ?>
            Archive for <?php the_time('Y'); ?>
        <?php /* If this is an author archive */
        } elseif (is_author()) { ?>
            Author Archive
        <?php /* If this is a paged archive */
        } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
        Blog Archives
        <?php } endif; ?>



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
<?php get_sidebar(); ?>

</div> <!-- .row -->
<?php  get_template_part( 'sidebar', 'footerbanner-lifestyle-lifecare' ); ?>


<?php get_footer(); ?>