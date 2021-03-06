<?php /* Template Name: Health */

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
      $(".jsSubPhotoThumb").click(function(){
        $(".jsSubPhotoThumb").removeClass("current_photo_thumb")
        $(this).addClass("current_photo_thumb")
        var photo = $(this).attr('id');
        $(".jsSubPhoto").removeClass("current_photo")
        $("."+photo).addClass("current_photo")
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
      <li id="jsc_4" class="jsubNavItem current">
        Health<br>Clinic
      </li>
      <li id="jsc_5" class="jsubNavItem">
        <br>
        Pharmacy
      </li>
      <li id="jsc_6" class="jsubNavItem">
        <br>
        Rehabilitation
      </li>
      <li id="jsc_1" class="jsubNavItem">
        Aquatic<br>Center
      </li>
      <li id="jsc_2" class="jsubNavItem">
        Fitness<br>Center
      </li>
      <li id="jsc_3" class="jsubNavItem">
        Brain<br>Fitness
      </li>
    </ul>
  </div>

  <div class="subpageContentWrapper">
    <div class="subpageCopy">

      <div class="jsSubContent jsc_4 current_sub_content">
        <div class="jsSubPhotoViewer">
          <img class="jsubphoto_1 jsSubPhoto current_photo" src="<?php bloginfo('template_directory');?>/images/health_gallery/HealthClinic1.jpg" width="363" height="424">
        </div>

        <div class="jsSubContentText">
          <h3 class="jsSubContentTitle">Health Clinic</h3>
          <p>
           Our Health Clinic is open daily and staffed with nurses to help you monitor your health and prevent illness. Residents may choose one of our primary care physicians to manage their medical needs. Specialists in podiatry, ophthalmology, psychiatry, audiology, dentistry and other fields also maintain scheduled office hours in the clinic for consultation. All physicians are seen by appointment.
         </p>

       </div>

        <div class="jsSubContentFlex">
          <h3 class="jsSubContentFlexTitle">Featuring:</h3>
           <ul>
             <li>RNs and LPN nurses on staff</li>
             <li>On-staff physician available by appointment Monday through Friday.</li>
             <li>Blood pressure, glucose levels, cholesterol and heart rate checks</li>
             <li>Hearing tests, eye exams, and other regular screenings</li>
           </ul>
        </div>

      </div>

      <div class="jsSubContent jsc_5">
        <div class="jsSubPhotoViewer">
          <img class="jsubphoto_1 jsSubPhoto current_photo" src="<?php bloginfo('template_directory');?>/images/health_gallery/HealthClinic2.jpg" width="363" height="424">
        </div>


        <div class="jsSubContentText">
          <h3 class="jsSubContentTitle">Pharmacy</h3>
          <p>
           Our pharmacy stocks everything from over-the-counter to special-order medications and is at your service daily, Monday through Friday. Customer records are carefully monitored to safeguard against drug interactions and prevent duplication. Pharmacists are always available for private medication counseling.
         </p>
       </div>

        <div class="jsSubContentFlex">
          <h3 class="jsSubContentFlexTitle">Featuring:</h3>
           <ul>
             <li>Private medication counseling</li>
             <li>Medication profile for physician or tax-filing reference</li>
             <li>Well-stocked over-the-counter medicines</li>
           </ul>
        </div>

      </div>


      <div class="jsSubContent jsc_1">

        <div class="jsSubPhotoViewer">
          <img src="<?php bloginfo('template_directory');?>/images/health_gallery/AquaticCenter.jpg" width="363" height="424">
        </div>


        <div class="jsSubContentText">
          <h3 class="jsSubContentTitle">Aquatic Center</h3>
          <p>
           The aquatics area of the Aquatic and Fitness Center offers a heated therapeutic pool for laps, aerobics or even playing with grandchildren. The weekly schedule of nearly 50 aquatics activities includes free and lap-swim times in the comfortable three-to-four foot depth.
         </p>
       </div>

        <div class="jsSubContentFlex">
          <h3 class="jsSubContentFlexTitle">Featuring:</h3>
           <ul>
              <li>"Back on Track" classes for back strengthening</li>
              <li>"Rusty Hinges" joint conditioning</li>
              <li>Water Walking</li>
              <li>Aquatic Balance</li>
              <li>Aquatics &amp; Beyond</li>
              <li>Locker rooms for men and women</li>
           </ul>
        </div>

      </div>

      <div class="jsSubContent jsc_2">
        <div class="jsSubPhotoViewer">
          <img src="<?php bloginfo('template_directory');?>/images/health_gallery/FitnessCenter.jpg" width="363" height="424">
        </div>


        <div class="jsSubContentText">
          <h3 class="jsSubContentTitle">Fitness Center</h3>
          <p>
           The fitness area of the Aquatic and Fitness Center offers machines and free weights, cardio equipment, a floor exercise room, a variety of group fitness classes weekly, and a certified trainer plus three full-time fitness specialists to demonstrate and assist with equipment.
         </p>
       </div>

        <div class="jsSubContentFlex">
          <h3 class="jsSubContentFlexTitle">Featuring:</h3>
           <ul>
             <li>High Intensity Strength Training</li>
             <li>Stretch, Tone, and Relax</li>
             <li>Preventicare</li>
             <li>Yoga and Intermediate Yoga</li>
             <li>Stretch and Strengthen</li>
             <li>Balance Exercise</li>
             <li>Tai Chi</li>
             <li>Locker rooms for men and women</li>
           </ul>
        </div>

      </div>

      <div class="jsSubContent jsc_3">
        <div class="jsSubPhotoViewer">
          <img src="<?php bloginfo('template_directory');?>/images/health_gallery/LS_Health_BrainFitness.jpg" width="363" height="424">
        </div>

        <div class="jsSubContentText single">
          <h3 class="jsSubContentTitle">Brain Fitness</h3>
          <p>
           Our computer-based brain fitness program may be accessed on public computers available around campus. Six areas of mental acuity exercise comprehension through the full range of mental activity using puzzles and other fun games. Reserved time slots ensure availability.
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