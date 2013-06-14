<?php /* Template Name:Calendar */ get_header(); ?>

<h1 class="blogHeading"><?php the_title();?></h1>
<div class="row">
            <!--BEGIN #primary .hfeed-->
            <div id="primary" class="hfeed">
                <div class="hero">
                    <p>Westminster Canterbury offers a wide range of activities. Click on View Master Calendar for detailed descriptions by month or on the headings below for brief lists by area of interest.</p>
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
            <div id='upcoming-events'><a href="/news/master-calendar/">View all upcoming Events &gt;</a></div>
            <?php
               $settings = get_option('wcrichmond_theme_options');

            ?>
            <div id='local-calendars' class="calendar-list">
                <a class="red-bg" href="<?php echo $settings['avalon_calendar_url']; ?>">Avalon Calendar</a>
                <a class="red-bg" href="<?php echo $settings['pavilion_calendar_url']; ?>">Pavilion Calendar</a>
                <a class="red-bg" href="<?php echo $settings['monticello_calendar_url']; ?>">Monticello Calendar</a>
                <a class="red-bg" href="<?php echo $settings['gables_calendar_url']; ?>">Gables<br/>Calendar</a>
            </div> <!-- .other-local-calendars -->
            <div id="offsite-calendars" class="calendar-list">
                <a class="red-bg" href="<?php echo $settings['chesapeake_calendar_url']; ?>">Parsons Health Center<br><span>Chesapeake Calendar</span></a>
                <a class="red-bg" href="<?php echo $settings['piedmont_calendar_url']; ?>">Parsons Health Center<br><span>Piedmont Calendar</span></a>
                <a class="red-bg" href="<?php echo $settings['shenandoah_calendar_url']; ?>">Parsons Health Center<br><span>Shenandoah Calendar</span></a>
            </div>
        </div>
    </div>
<?php get_sidebar('calendar'); ?>

</div> <!-- .row -->
<?php  get_template_part( 'sidebar', 'footerbanner-lifestyle-lifecare' ); ?>


<IMG SRC="http://ad.adlegend.com/ping?spacedesc=1087894_1061349_1x1_1061349_1061349&amp;db_afcr=123&amp;group=WMC&amp;event=ContactUs" WIDTH=1 HEIGHT=1 ALT=" ">
<?php get_footer(); ?><!-- Closed Loop -->
