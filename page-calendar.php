<?php /* Template Name:Calendar */ get_header(); ?>

<h1 class="blogHeading"><?php the_title();?></h1>
<div class="row">
            <!--BEGIN #primary .hfeed-->
            <div id="primary" class="hfeed">
                <div class="hero">
                    <div class="column1">
                          <img class="source-image" src="<?php echo get_bloginfo('template_url'); ?>/images/would-love-to-hear-from-you.png" alt="Would Love To Hear From You">
                          <p class="noshow">We would love to hear from you</p>
                    </div>
                    <div class="column2">
                        <p>Whether you are looking to Westminster Canterbury Richmond for a place to call home or just curious about all we have to offer, we are happy to help any way we can.</p>
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
        <div class="inner-wrapper">
            <div id='upcoming-events'><a href="/news/master-calendar/?ai1ec_cat_ids=7">Vew all upcoming Events</a></div>
            <div id='local-calendars' class="calendar-list">
                <a href="">Avalon Calendar</a>
                <a href="">Pavilion Calendar</a>
                <a href="">Monticello Calendar</a>
                <a href="">Gabels Calendar</a>
            </div> <!-- .other-local-calendars -->
            <div id="offsite-calendars" class="calendar-list">
                <a href="">Westminster Canterbury<br><span>Shenandoah Calendar</span></a>
                <a href="">Westminster Canterbury<br><span>Chesapeake Calendar</span></a>
                <a href="">Westminster Canterbury<br><span>Piedmont Calendar</span></a>
            </div>
        </div>
    </div>
<?php get_sidebar('calendar'); ?>

</div> <!-- .row -->
<?php  get_template_part( 'sidebar', 'footerbanner-lifestyle-lifecare' ); ?>


<IMG SRC="http://ad.adlegend.com/ping?spacedesc=1087894_1061349_1x1_1061349_1061349&amp;db_afcr=123&amp;group=WMC&amp;event=ContactUs" WIDTH=1 HEIGHT=1 ALT=" ">
<?php get_footer(); ?><!-- Closed Loop -->
