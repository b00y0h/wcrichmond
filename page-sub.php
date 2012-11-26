<?php /* Template Name: Sub Page */ get_header(); ?>
  <div class="subpageWrapper">

    <div class="subpagePageTitle">
      <?php the_title(); ?>
    </div>
    <div class="subpageContentWrapper">
      <div class="subpageCopy">
        <div class="jsSubContent jsc_1 current_sub_content">

           <?php if(!1): ?>
            <div class="jsSubContentFlex">
               <ul>
                 <li>1</li>
                 <li>2</li>
                 <li>3</li>
               </ul>
            </div>
            <?php endif; ?>

          <div class="resPhotoViewer">
            <img src="<?php bloginfo('template_directory');?>/images/residence_gallery/2_The_Courtyard/1_Courtyard.jpg" width="363" height="424">
          </div>

          <div class="jsSubContentText single">
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

              <div class="post" id="post-<?php the_ID(); ?>">
         	      <div class="entry">
            		  <?php the_content(); ?>
              	</div>

              </div> <!-- .post -->

            <?php endwhile; endif; ?>
          </div>

        </div>

        <div class="jsSubContent jsc_2">
          <div class="resPhotoViewer">
            <img src="<?php bloginfo('template_directory');?>/images/" width="363" height="424">
          </div>

          <div class="jsSubContentFlex">
             <ul>
               <li>1</li>
               <li>2</li>
               <li>3</li>
             </ul>
          </div>

          <div class="jsSubContentText">
            The Tower
            <p>
             The Tower offers 15 appealing floor plans, from cozy studios to one- and two-bedroom residences with dining rooms and eat-in kitchens. All have large windows, plush carpet and modern appliances, with community amenities a short, enclosed walkway away.
           </p>
         </div>

        </div>

      </div><!-- .subpageCopy -->
    </div>
  </div>





<?php get_sidebar('footerbanner3'); ?>

<?php get_footer(); ?>