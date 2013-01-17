<?php /* Template Name:Calendar */ get_header(); ?>

<h1 class="blogHeading"><?php the_title();?></h1>
<div class="row">
            <!--BEGIN #primary .hfeed-->
            <div id="primary" class="hfeed">
                <div class="hero">
                    <div class="column1">
                          <a href="/news/master-calendar">View Master Calendar</a>
                    </div>
                    <div class="column2">
                        <p>Westminster Canterbury offers a wide range of activities. Click on View Master Calendar for detailed descriptions by month or on the headings below for brief lists by area of interest.</p>
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
            <div id='upcoming-events'><a href="/news/master-calendar/?ai1ec_cat_ids=7">View all upcoming Events</a></div>
            <?php
               $settings = get_option('wcrichmond_theme_options');
               
            ?>
            <div id='local-calendars' class="calendar-list">
                <a href="<?php echo $settings['avalon_calendar_url']; ?>">Avalon Calendar</a>
                <a href="<?php echo $settings['pavilion_calendar_url']; ?>">Pavilion Calendar</a>
                <a href="<?php echo $settings['monticello_calendar_url']; ?>">Monticello Calendar</a>
                <a href="<?php echo $settings['gables_calendar_url']; ?>">Gables Calendar</a>
            </div> <!-- .other-local-calendars -->
            <div id="offsite-calendars" class="calendar-list">
                <a href="<?php echo $settings['shenandoah_calendar_url']; ?>">Westminster Canterbury<br><span>Shenandoah Calendar</span></a>
                <a href="<?php echo $settings['chesapeake_calendar_url']; ?>">Westminster Canterbury<br><span>Chesapeake Calendar</span></a>
                <a href="<?php echo $settings['piedmont_calendar_url']; ?>">Westminster Canterbury<br><span>Piedmont Calendar</span></a>
            </div>
        </div>
    </div>
<?php get_sidebar('calendar'); ?>

</div> <!-- .row -->
<?php  get_template_part( 'sidebar', 'footerbanner-lifestyle-lifecare' ); ?>


<IMG SRC="http://ad.adlegend.com/ping?spacedesc=1087894_1061349_1x1_1061349_1061349&amp;db_afcr=123&amp;group=WMC&amp;event=ContactUs" WIDTH=1 HEIGHT=1 ALT=" ">
<?php get_footer(); ?><!-- Closed Loop -->
