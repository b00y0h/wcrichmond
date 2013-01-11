<?php /* Template Name:Contact Us */ get_header(); ?>

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
                <div class="google-map">
                  <a href="http://goo.gl/maps/Yt5aC">
                    <img class="full" src="<?php echo get_bloginfo('template_url'); ?>/images/google-map.gif" alt="Map of Westminster Canterbury Richmond">
                  </a><br />
                  <small><a class="link-to-google" href="http://goo.gl/maps/Yt5aC">Click for directions in Google Maps &gt;</a></small>
                </div>
    <!--END #primary .hfeed-->
    </div>
<?php get_sidebar('contact'); ?>

</div> <!-- .row -->
<?php  get_template_part( 'sidebar', 'footerbanner-lifestyle-lifecare' ); ?>


<IMG SRC="http://ad.adlegend.com/ping?spacedesc=1087894_1061349_1x1_1061349_1061349&amp;db_afcr=123&amp;group=WMC&amp;event=ContactUs" WIDTH=1 HEIGHT=1 ALT=" ">
  
  <!-- Google Code for Contact Us Page Conversion Page -->
  <script type="text/javascript">
  /* <![CDATA[ */
  var google_conversion_id = 1042907235;
  var google_conversion_language = "en";
  var google_conversion_format = "2";
  var google_conversion_color = "ffffff";
  var google_conversion_label = "BFGrCPniqAUQ44Cm8QM";
  var google_conversion_value = 0;
  /* ]]> */
  </script>
  <script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js">
  </script>
  <noscript>
  <div style="display:inline;">
  <img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/1042907235/?value=0&amp;label=BFGrCPniqAUQ44Cm8QM&amp;guid=ON&amp;script=0"/>
  </div>
  </noscript>
  
<?php get_footer(); ?><!-- Closed Loop -->
