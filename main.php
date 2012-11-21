<?php /* Template Name: Home Page */

get_header(); ?>
<div id="homeBanner">
      <?php echo do_shortcode('[SlideDeck2 id=1992 ress=1]'); ?>
      <?php echo do_shortcode('[SlideDeck2 id=2003 ress=1]'); ?>
</div>

<?php get_sidebar('footerbanner'); ?>

<IMG SRC="http://ad.adlegend.com/ping?spacedesc=1087894_1061349_1x1_1061349_1061349&amp;db_afcr=123&amp;group=WMC&amp;event=HomepageVT" WIDTH=1 HEIGHT=1 ALT=" ">

<?php get_footer(); ?>