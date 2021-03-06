<?php /* Template Name: Spiritual */

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
        <br>Spiritual Life
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
          <h3 class="jsSubContentTitle">Spiritual Life</h3>
          <p>
            Exploring aspects of spiritual life and taking part in spiritual activities are a big part of our community. The weekly schedule includes more than  two dozen opportunities for prayer, study and discussion that is respectful of all faith traditions. Highlights of our programming includes our popular guest lecture series, among them, The Chaplain’s Lecture Series, Theological Thursdays and Seminary Mondays.
          </p>
        </div>
      </div>

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