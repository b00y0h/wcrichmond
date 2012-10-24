<?php /* Template Name: Spiritual */

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
    background-color:#6E8C95;
  }
</style>

<div class="subpageWrapper" style="background:url(<?php bloginfo('template_directory');?>/images/backgrounds/LS_SpiritualLife.png) no-repeat;">
  
  <div class="subpagePageTitle">
    <?php the_title(); ?>
  </div>
  <div style="clear:both;"></div>
  
  <div class="subpageNavigation">
    <ul>
      <li id="jsc_1" class="jsubNavItem current">
        Spiritual<br>Life
      </li>
    </ul>
  </div>
  
  <div class="subpageContentWrapper">
    <div class="subpageCopy">    
      <div class="jsSubContent jsc_1 current_sub_content">
        
        <div class="jsSubPhotoViewer">
          <img src="<?php bloginfo('template_directory');?>/images/spiritual_gallery/SpiritualLife.jpg" width="363" height="424">
        </div>
        
        <div class="jsSubContentText single">
          <div class="jsSubContentTitle">Spiritual Life</div>
          <p>
            Exploring aspects of spiritual life and taking part in spiritual activities are a big part of our community. The Chaplain’s Lecture Series features guest speakers on a wide range of religious subjects. The weekly schedule includes nearly two dozen opportunities for prayer, study and discussion that is respectful of all faith traditions.
          </p>
        </div>
      </div>
      
    </div><!-- .subpageCopy -->
  </div>
  
  <div style="clear:both;"></div>
</div>



<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

<div class="post" id="post-<?php the_ID(); ?>">

	

	<div class="entry">
		<?php the_content(); ?>
	</div>

</div> <!-- .post -->

<?php endwhile; endif; ?>

	<?php get_sidebar('footerbanner'); ?>


<?php get_footer(); ?>