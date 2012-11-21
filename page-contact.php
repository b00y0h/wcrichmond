<?php /* Template Name:Contact Us */ get_header(); ?>

<h1 class="blogHeading"><?php the_title();?></h1>
<div class="row">
            <!--BEGIN #primary .hfeed-->
            <div id="primary" class="hfeed">
                <div class="hero">
                    <div class="column1">
                          <p>View Master Calendar</p>
                    </div>
                    <div class="column2">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error voluptate maiores atque debitis nihil voluptatibus suscipit blanditiis fuga iusto quo temporibus repellendus exercitationem eaque tenetur ipsum nulla qui saepe nam.</p>
                    </div>

                </div>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <!--BEGIN .hentry -->
                <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                    <?php
                    get_template_part( 'content', 'page');
                    ?>
                <!--END .hentry-->
                </div>

                <?php endwhile;  endif; ?>
    <!--END #primary .hfeed-->
    </div>
<?php get_sidebar('contact'); ?>

</div> <!-- .row -->
<?php  get_template_part( 'sidebar', 'footerbanner-lifestyle-lifecare' ); ?>


<IMG SRC="http://ad.adlegend.com/ping?spacedesc=1087894_1061349_1x1_1061349_1061349&amp;db_afcr=123&amp;group=WMC&amp;event=ContactUs" WIDTH=1 HEIGHT=1 ALT=" ">
<?php get_footer(); ?><!-- Closed Loop -->
