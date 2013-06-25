<?php /* Template Name: About Pages */ get_header(); ?>


  <?php $defaults = array(
    'menu'            => 'volunteer-menu',
    'container'       => 'div',
    'container_class' => 'lifestyle-submenu tertiary-menu',
    'items_wrap'      => '%3$s',
    'depth'           => 0
);
?>

<?php wp_nav_menu( $defaults ) ?>

<h1 class="blogHeading"><?php the_title();?></h1>
<div class="row">
            <!--BEGIN #primary .hfeed-->
            <div id="primary" class="hfeed">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <!--BEGIN .hentry -->
                <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                    <?php
                    get_template_part( 'content', 'page');
                    ?>
                <!--END .hentry-->
                </div>

                <?php endwhile; ?>
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