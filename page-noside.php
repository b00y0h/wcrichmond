<?php /*Template Name: Page nosidebar */ get_header(); ?> 

<div class="pageContentWrap">
  
  <div class="pageColumn" style="border:none;">
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
      
      <div class="post page" id="post-<?php the_ID(); ?>">
        
        <div class="pageTitle"><h1><?php the_title();?></h1></div>
        
 	      <div class="entry">
    		  <?php the_content(); ?>
      	</div>

      </div> <!-- .post -->

    <?php endwhile; endif; ?>
  </div>

  <div style="clear:both"></div>
</div>


<?php get_footer(); ?>