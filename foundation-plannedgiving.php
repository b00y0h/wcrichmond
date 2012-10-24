<?php /* Template Name: Foundation-plannedgiving */

get_header(); ?>

<script type="text/javascript" charset="utf-8">
  jQuery(document).ready(function($){
      // $ is now safe within this function
      $(".jsubNavItem").click(function(){
        $(".jsubNavItem").removeClass("current");
        $(this).addClass('current');
        
        var block = $(this).attr('id');
        $(".jsSubContent").removeClass("current_sub_content");
        $("."+block).addClass("current_sub_content");
        
      })
  })
</script>

<style type="text/css" media="screen">
  .subpageWrapper{
    background:url(<?php bloginfo('template_directory');?>/images/foundation_bg.png) no-repeat;
  }
  .resPhotoViewer{
    float:left;
  }
</style>

<div class="subpageWrapper">
  
  <div class="subpagePageTitle">
    <?php the_title(); ?>
  </div>
  <div style="clear:both;"></div>
  
  
  <div class="subpageContentWrapper" style="width:1025px;">
    <div class="subpageCopy">    
      <div class="jsSubContent jsc_1 current_sub_content">
        
        <div class="resPhotoViewer">
          <img src="<?php bloginfo('template_directory');?>/images/foundation_gallery/plannedgiving.jpg" width="363" height="424">
        </div>
        
        <div class="jsSubContentText single" style="width:500px;">
          <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

            <div class="post page" id="post-<?php the_ID(); ?>">

       	      <div class="entry">
          		  <?php the_content(); ?>
            	</div>

            </div> <!-- .post -->

          <?php endwhile; endif; ?>
          
        </div>
      </div>
      
      <div class="jsSubContent jsc_2">
        <div class="resPhotoViewer">
          <img src="<?php bloginfo('template_directory');?>/images/foundation_gallery/foundation.jpg" width="363" height="424">
        </div>
        
        <div class="jsSubContentText single">
         <p>
           
         </p>
       </div>
       
      </div>
      
      
 
    </div><!-- .subpageCopy -->
  </div>
  
  <div style="clear:both;"></div>
</div>
<?php get_sidebar('footerbanner'); ?>

<?php get_footer(); ?>