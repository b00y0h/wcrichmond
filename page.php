<?php get_header(); ?> 
<script type="text/javascript" charset="utf-8">
  jQuery(document).ready(function($){
      // $ is now safe within this function
      setTimeout(function(){
        side_h = $(".pageSidebar").height();
        col_h = $(".pageColumn").height();
      //  console.log("side: "+side_h+" col: "+col_h);
        if(parseFloat(col_h-80)<side_h){
          //console.log(parseFloat(side_h+80));
          $(".pageColumn").css('height',parseFloat(side_h+80)+"px");
        }
      }, 150);
      
      
  })
</script>

<div class="pageContentWrap">
  
  <div class="pageColumn">
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
      
      <div class="post page" id="post-<?php the_ID(); ?>">
        
        <div class="pageTitle"><h1><?php the_title();?></h1></div>
        
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

<?php if(in_array($_SERVER['REMOTE_ADDR'],array("74.110.159.100"))) : ?>
   <?php get_sidebar('footerbanner'); ?>
<?php endif; ?>

<?php get_footer(); ?>