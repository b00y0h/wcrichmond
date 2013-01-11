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
        <div class="inner-wrapper">
            <div id='upcoming-events'><a href="/news/master-calendar/?ai1ec_cat_ids=7">View all upcoming Events</a></div>
            <div id='local-calendars' class="calendar-list">
                <a href="http://www.wcrichmond.org/phpages/wp-content/uploads/2013/01/rec-calendar-master-avalon-2013-jan.pdf">Avalon Calendar</a>
                <a href="http://www.wcrichmond.org/phpages/wp-content/uploads/2013/01/rec-calendar-master-pav-2013-jan.pdf">Pavilion Calendar</a>
                <a href="http://www.wcrichmond.org/phpages/wp-content/uploads/2013/01/MONT-CAL-2013-jan.pdf">Monticello Calendar</a>
                <a href="http://www.wcrichmond.org/phpages/wp-content/uploads/2013/01/rec-calendar-master-GABLES-2013-jan.pdf">Gables Calendar</a>
            </div> <!-- .other-local-calendars -->
            <div id="offsite-calendars" class="calendar-list">
                <a href="http://www.wcrichmond.org/phpages/wp-content/uploads/2013/01/recreation-shenandoah-2013-jan.pdf">Westminster Canterbury<br><span>Shenandoah Calendar</span></a>
                <a href="http://www.wcrichmond.org/phpages/wp-content/uploads/2013/01/recreation-CHES-2013-jan.pdf">Westminster Canterbury<br><span>Chesapeake Calendar</span></a>
                <a href="http://www.wcrichmond.org/phpages/wp-content/uploads/2013/01/recreation-pied-2013-jan.pdf">Westminster Canterbury<br><span>Piedmont Calendar</span></a>
            </div>
        </div>
    </div>
<?php get_sidebar('calendar'); ?>

</div> <!-- .row -->
<?php  get_template_part( 'sidebar', 'footerbanner-lifestyle-lifecare' ); ?>


<IMG SRC="http://ad.adlegend.com/ping?spacedesc=1087894_1061349_1x1_1061349_1061349&amp;db_afcr=123&amp;group=WMC&amp;event=ContactUs" WIDTH=1 HEIGHT=1 ALT=" ">
<?php get_footer(); ?><!-- Closed Loop -->
