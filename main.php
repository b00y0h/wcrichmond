<?php /* Template Name: Home Page */

get_header(); ?>
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

              <div class="post" id="homeBanner">
                      <?php the_content(); ?>
              </div> <!-- .post#homebanner-->

            <?php endwhile; endif; ?>

<?php get_sidebar('footerbanner'); ?>

<IMG class='hide' SRC="http://ad.adlegend.com/ping?spacedesc=1087894_1061349_1x1_1061349_1061349&amp;db_afcr=123&amp;group=WMC&amp;event=HomepageVT" WIDTH=1 HEIGHT=1 ALT=" ">

<?php get_footer(); ?>