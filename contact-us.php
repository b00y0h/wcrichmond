<?php /* Template Name:Contact Us */ get_header(); ?> 

<div class="pageContentWrap">
  
  <div class="pageColumn">
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
      
      <div class="post page" id="post-<?php the_ID(); ?>">
        
 	      <div class="entry">
    		  <?php the_content(); ?>
      	</div>

      </div> <!-- .post -->

    <?php endwhile; endif; ?>
  </div>
  
  <div class="pageSidebar">
    <?php get_sidebar('page'); ?>
  </div>
  <div style="clear:both"></div>
</div>
<!-- Closed Loop -->
<IMG SRC="http://ad.adlegend.com/ping?spacedesc=1087894_1061349_1x1_1061349_1061349&amp;db_afcr=123&amp;group=WMC&amp;event=ContactUs" WIDTH=1 HEIGHT=1 ALT=" ">

<?php get_footer(); ?>