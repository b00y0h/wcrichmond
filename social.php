<?php /* Template Name: Social */

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

      <?php $defaults = array(
    'menu'            => 'lifestyle-submenu',
    'container'       => 'div',
    'container_class' => 'lifestyle-submenu',
    'items_wrap'      => '%3$s',
    'depth'           => 0
);
?>

<?php wp_nav_menu( $defaults ) ?>

  <div class="subpagePageTitle">
    <?php the_title(); ?>
  </div>


  <div class="subpageNavigation">
    <ul>
      <li id="jsc_1" class="jsubNavItem current">
        EVENTS &amp;<br>SERIES
      </li>
      <li id="jsc_2" class="jsubNavItem">
        VOLUNTEER,<br>ANYONE?
      </li>
      <li id="jsc_3" class="jsubNavItem">
        EXCURSIONS &amp;<br>TRAVEL
      </li>
    </ul>
  </div>

  <div class="subpageContentWrapper">
    <div class="subpageCopy">
      <div class="jsSubContent jsc_1 current_sub_content">

        <div class="jsSubPhotoViewer">
          <img src="<?php bloginfo('template_directory');?>/images/social_gallery/LS_Social_Events.jpg" width="363" height="424">
        </div>


        <div class="jsSubContentText">
          <h3 class="jsSubContentTitle">Events &amp; Series</h3>
          <p>
            A typical week on the Westminster Canterbury campus presents a range of opportunities to enjoy events with friends (and friends-to-be). You might attend a lecture, play bridge, go to a book club meeting, or see a film. Do as much, or as little, as you like.
          </p>
        </div>

        <div class="jsSubContentFlex">
          Featuring:
          <ul>
             <li>Cultural Film Series</li>
             <li>Campus Events</li>
             <li>Lecture Series</li>
             <li>Bridge Clubs</li>
             <li>Book Clubs</li>
          </ul>
        </div>

      </div>

      <div class="jsSubContent jsc_2">
        <div class="jsSubPhotoViewer">
          <img src="<?php bloginfo('template_directory');?>/images/social_gallery/LS_Social_Volunteering.jpg" width="363" height="424">
        </div>


        <div class="jsSubContentText">
          <h3 class="jsSubContentTitle">Volunteer, Anyone?</h3>
          <p>
           Residents enrich our community by taking part in its day-to-day operation in meaningful ways. Volunteers raise funds for the Foundation, and run a number of campus shops. Many more serve on committees for everything from finance, flowers, and hosting tours to healthcare visitation, recreation and technology. A desire to help out has many outlets here.
         </p>
       </div>

        <div class="jsSubContentFlex">
           Featuring:
           <ul>
             <li>Resident Committees</li>
             <li>Gift Shop</li>
             <li>Echo Shop (clothing consignment)</li>
             <li>Furniture Room (buy or donate)</li>
             <li>Treasure Chest (china, silverware, lamps and knickknacks)</li>
             <li>Library</li>
             <li>Child Development Center (reading, helping on walks and art projects) </li>
           </ul>
        </div>

      </div>

      <div class="jsSubContent jsc_3">
        <div class="jsSubPhotoViewer">
          <img src="<?php bloginfo('template_directory');?>/images/social_gallery/LS_Social_Excursions.jpg" width="363" height="424">
        </div>

        <div class="jsSubContentText single">
          <h3 class="jsSubContentTitle">Excursions &amp; Travel</h3>
          <p>
           Our residents get up and go! There are short excursions to tour Richmond, picnics, museums, Maymont, concerts, festivals, malls and the state fair. Day trips go to Washington D.C. tours, to Kennedy Center performances, the National D-Day Memorial, Monticello and Poplar Forest. And longer trips may go anywhere.
         </p>
       </div>

      </div>
          <h3 class="hdr absolute bottom right calendar-link"><a href="/calendar">View Calendar</a></h3>

    </div><!-- .subpageCopy -->
  </div>


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