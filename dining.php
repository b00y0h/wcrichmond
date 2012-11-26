<?php /* Template Name: Dining */

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
        <br>Overview
      </li>
      <li id="jsc_2" class="jsubNavItem">
        <br>Kathleen's
      </li>
      <li id="jsc_3" class="jsubNavItem">
        Promenade<br>Room
      </li>
      <li id="jsc_4" class="jsubNavItem">
        Canterbury<br>Room
      </li>
      <li id="jsc_5" class="jsubNavItem">
        Sidewalk<br>Cafe
      </li>
    </ul>
  </div>

  <div class="subpageContentWrapper">
    <div class="subpageCopy">

      <div class="jsSubContent jsc_1  current_sub_content">
        <div class="jsSubPhotoViewer">

          <img class="jsubphoto_1 jsSubPhoto current_photo" src="<?php bloginfo('template_directory');?>/images/dining_gallery/Overview.jpg" width="363" height="424">

        </div>

        <div class="jsSubContentText single">
          <h3 class="jsSubContentTitle">Overview</h3>
          <p>
            Few things in life speak more to the spirit of living well than eating well. Our Promenade Room, Canterbury Room and Sidewalk Cafe offer a range of tempting menu selections, with seasonal changes, and our chefs are happy to accommodate special dietary needs. Dress up for dinner or go casual. Meet friends for a drink at Kathleen's, our cocktail lounge. Entertain in a private dining room or get take out. When cooking is a bother, why bother, with so many choices so close by?
         </p>
       </div>

      </div>

      <div class="jsSubContent jsc_2">

        <div class="jsSubPhotoViewer">
          <img src="<?php bloginfo('template_directory');?>/images/dining_gallery/Kathleens.jpg" width="363" height="424">
        </div>

        <div class="jsSubContentText single" >
          <h3 class="jsSubContentTitle">Kathleen's</h3>
          <p>
            Our inviting cocktail lounge, Kathleen’s, looks out on the landscaped courtyard and year-round all-weather putting green. It’s an ideal gathering spot before and after theater performances – or to meet friends for a drink at lunch or dinner time. Non-resident visitors may pay their own tab by credit card.
          </p>
        </div>
      </div>

      <div class="jsSubContent jsc_3">
        <div class="jsSubPhotoViewer">
          <img src="<?php bloginfo('template_directory');?>/images/dining_gallery/PromenadeRoom.jpg" width="363" height="424">
        </div>


        <div class="jsSubContentText single">
          <h3 class="jsSubContentTitle">Promenade Room</h3>
          <p>
           Looking out on The Ellipse from the first floor of The Tower, the Promenade Room offers a restaurant-like feel for breakfast, lunch and dinner buffets as well as fast seated service, both seven days a week. Residents may also call ahead for carryout service.
         </p>
       </div>

      </div>

      <div class="jsSubContent jsc_4">
        <div class="jsSubPhotoViewer">
          <img src="<?php bloginfo('template_directory');?>/images/dining_gallery/LS_Dining_CanterburyRm.jpg" width="363" height="424">
        </div>

        <div class="jsSubContentText single">
          <h3 class="jsSubContentTitle">Canterbury Room</h3>
          <p>
          Located in The Center for Creative Living at the heart of our community is the popular Canterbury Room. It offers seated or carryout service for lunch and dinner six days a week, as well as Sunday brunch. And it’s located next to our popular cocktail lounge, Kathleen’s.
          </p>
        </div>

      </div>

      <div class="jsSubContent jsc_5">
        <div class="jsSubPhotoViewer">
          <img src="<?php bloginfo('template_directory');?>/images/dining_gallery/LS_Dining_SidewalkCafe.jpg" width="363" height="424">
        </div>


        <div class="jsSubContentText single">
          <h3 class="jsSubContentTitle">Sidewalk Cafe</h3>
          <p>
           For a sandwich or wrap, salad or platter, our casual Sidewalk Café serves breakfast and lunch for a quick sit-down or carryout meal. The menu includes “A Taste of Health”  section. Come as you are, anytime from 7:00 a.m. to 3:30 p.m. daily.
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