<?php /* Template Name: subpage default */

get_header(); ?>

<script>
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

<div class="subpageWrapper">

  <div class="subpagePageTitle">
    <?php the_title(); ?>
  </div>
  <div style="clear:both;"></div>

  <div class="subpageNavigation">
    <ul>
      <li id="jsc_1" class="jsubNavItem current">
        <br>Kathleen's
      </li>
      <li id="jsc_2" class="jsubNavItem">
        Promenade<br>Room
      </li>
      <li id="jsc_3" class="jsubNavItem">
        Canterbury<br>Room
      </li>
      <li id="jsc_4" class="jsubNavItem">
        Sidewalk<br>Cafe
      </li>
    </ul>
  </div>

  <div class="subpageContentWrapper">
    <div class="subpageCopy">
      <div class="jsSubContent jsc_1 current_sub_content">

        <div class="resPhotoViewer">
          <img src="<?php bloginfo('template_directory');?>/images/" width="363" height="424">
        </div>

        <div class="jsSubContentText single">
          <h3 class="jsSubContentTitle">Overview</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
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

  <div style="clear:both;"></div>
</div>



<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

<div class="post" id="post-<?php the_ID(); ?>">



	<div class="entry">
		<?php the_content(); ?>
	</div>

</div> <!-- .post -->

<?php endwhile; endif; ?>




<?php get_footer(); ?>