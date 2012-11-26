<?php get_header(); ?>
<script>
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

<h1 class="blogHeading"><?php the_title();?></h1>
<div class="row">
            <!--BEGIN #primary .hfeed-->
            <div id="primary" class="hfeed">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <!--BEGIN .hentry -->
                <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                    <?php
                    get_template_part( 'content', 'page');
                    ?>
                <!--END .hentry-->
                </div>

                <?php endwhile; ?>
            <?php else : ?>

                <!--BEGIN #post-0-->
                <div id="post-0" <?php post_class(); ?>>

                    <h2 class="entry-title"><?php _e('Error 404 - Not Found', 'wcrichmond') ?></h2>

                    <!--BEGIN .entry-content-->
                    <div class="entry-content">
                        <p><?php _e("Sorry, but you are looking for something that isn't here.", "wcrichmond") ?></p>
                    <!--END .entry-content-->
                    </div>

                <!--END #post-0-->
                </div>

            <?php endif; ?>

    <!--END #primary .hfeed-->
    </div>
<?php get_sidebar(); ?>

</div> <!-- .row -->
<?php  get_template_part( 'sidebar', 'footerbanner-lifestyle-lifecare' ); ?>


<?php get_footer(); ?>