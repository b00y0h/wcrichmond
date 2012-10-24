<?php /* Template Name: Life Care */ get_header(); ?> 
  <div class="subpageWrapper" style="background:url(<?php bloginfo('template_directory');?>/images/backgrounds/LS_ResOpts.png) no-repeat;">

    <div class="subpagePageTitle">
      <?php the_title(); ?>
    </div>
    <div style="clear:both;"></div>

    <div class="subpageContentWrapper" style="width:1025px;">
      <div class="subpageCopy">    
        <div class="jsSubContent jsc_1 current_sub_content">
          
          
            <div class="jsSubContentFlex">
               <ul>
                 <li>Guaranteed access</li>
                 <li>No fee increase as care needs increase</li>
                 <li>Caring staff</li>
                 <li>Westminster Canterbury Fellowship Fund residency guarantee</li>
               </ul>
            </div>
          

          <div class="resPhotoViewer" style="float:left;">
            <img src="<?php bloginfo('template_directory');?>/images/lifecare_gallery/LC_Overview.jpg" width="363" height="424">
          </div>

          <div class="jsSubContentText" style="width:395px;padding-top:20px; height:404px; font-size:17px;">
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

              <div class="post" id="post-<?php the_ID(); ?>">
                <h2><?php the_title(); ?></h2>
         	      <div class="entry">
            		  <?php the_content(); ?>
              	</div>

              </div> <!-- .post -->

            <?php endwhile; endif; ?>
          </div>
          
        </div>

       

      </div><!-- .subpageCopy -->
    </div>

    <div style="clear:both;"></div>
  </div>



  
 
<?php get_sidebar('footerbanner2'); ?>

<?php get_footer(); ?>