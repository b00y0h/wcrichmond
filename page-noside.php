<?php /*Template Name: Page nosidebar */ get_header(); ?>
<h1 class="blogHeading"><?php the_title();?></h1>
<div class="row full-calendar">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <!--BEGIN .hentry -->
    <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
        <?php
        get_template_part( 'content', 'page');
        ?>
    <!--END .hentry-->
    </div>

    <?php endwhile;  endif; ?>

</div>


<?php get_footer(); ?>