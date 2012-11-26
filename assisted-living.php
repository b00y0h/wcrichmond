<?php /* Template Name: Assisted Living */ get_header(); ?>

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

    <div class="subpagePageTitle">
      Assisted Living
    </div>

    <div class="subpageNavigation">
       <ul>
         <li id="jsc_1" class="jsubNavItem current">
           <br>Overview
         </li>
         <li id="jsc_2" class="jsubNavItem">
           Avalon<br>Design
         </li>
         <li id="jsc_3" class="jsubNavItem">
           Avalon<br>Residences
         </li>
         <li id="jsc_4" class="jsubNavItem">
           <br>Pavilion
         </li>
       </ul>
     </div>

    <div class="subpageContentWrapper" >
      <div class="subpageCopy">
        <div class="jsSubContent jsc_1 current_sub_content">

          <div class="resPhotoViewer">
            <img src="<?php bloginfo('template_directory');?>/images/lifecare_gallery/LC_AsstLivingOverview.jpg" width="363" height="424">
          </div>

          <div class="jsSubContentText">
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

              <div class="post" id="post-<?php the_ID(); ?>">
         	      <div class="entry">
            		  <?php the_content(); ?>
              	</div>

              </div> <!-- .post -->

            <?php endwhile; endif; ?>
          </div>

            <div class="jsSubContentFlex">
               <ul>
                 <li>24/7 access to RNs, LPNs and Certified Nursing Assistants</li>
                 <li>Assistance with daily living tasks</li>
                 <li>Indoor pool (with whirlpool), gardens and courtyards for recreation</li>
                 <li>Educational and intergenerational programs</li>
                 <li>Social and entertainment choices</li>
                 <li>Caring staff who encourage residents’ full potential</li>
                 <li>Social worker support for residents and family</li>
               </ul>
            </div>


        </div>

        <div class="jsSubContent jsc_2">




          <div class="resPhotoViewer">
            <img src="<?php bloginfo('template_directory');?>/images/lifecare_gallery/LC_AvalonDesign.jpg" width="363" height="424">
          </div>

          <div class="jsSubContentText">
            <h3 class="jsSubContentTitle">Avalon Design</h3>
            <p>The design of Avalon assisted living embraces two needs: that of the individual resident for minimal to moderate assistance; and that of the couple where only one person needs such help but they wish to keep living together. In either instance, Avalon’s caring staff provides help to the minimal extent needed, mindful of the resident’s need to maintain independence to the fullest extent possible. For couples, this frees the independent spouse from the burden of the caregiver role. For couples-floor eligibility, one spouse must be independent; and one, age 62.</p>
          </div>

            <div class="jsSubContentFlex">
               <ul>
                 <li>24/7 access to RNs, LPNs and Certified Nursing Assistants</li>
                  <li>Assistance with daily living tasks</li>
                  <li>Indoor pool (with whirlpool), gardens and courtyards for recreation</li>
                  <li>Educational and intergenerational programs</li>
                  <li>Social and entertainment choices</li>
                  <li>Caring staff who encourage residents’ full potential</li>
                  <li>Social worker support for residents and family</li>
               </ul>
            </div>
        </div>

        <div class="jsSubContent jsc_3">




          <div class="resPhotoViewer">

            <img class="jsubphoto_1 jsSubPhoto current_photo" src="<?php bloginfo('template_directory');?>/images/lifecare_gallery/LC_AvalonResidences.jpg" width="363" height="424">
          </div>

          <div class="jsSubContentText">
              <h3 class="jsSubContentTitle">Avalon Residences</h3>
              <p>Avalon apartments are ideal living spaces for residents who need minimal assistance. For an individual resident, the floor plan features a living-dining room, bedroom, kitchenette and bathroom. On Avalon’s couples floor, 15 two-bedroom, two-bath apartments enable couples to share life together while the dependent spouse receives assisted living help. Avalon residences have bay windows and crown molding, plus other distinctive appointments. Each Avalon floor has a central dining room, a resort-like spa, and comfortably furnished rooms for socializing with friends and family.</p>
          </div>

            <div class="jsSubContentFlex">
               <ul>
                 <li>24/7 access to RNs, LPNs and Certified Nursing Assistants</li>
                  <li>Assistance with daily living tasks</li>
                  <li>Indoor pool (with whirlpool), gardens and courtyards for recreation</li>
                  <li>Educational and intergenerational programs</li>
                  <li>Social and entertainment choices</li>
                  <li>Caring staff who encourage residents’ full potential</li>
                  <li>Social worker support for residents and family</li>
               </ul>
            </div>
        </div>

        <div class="jsSubContent jsc_4">

          <div class="resPhotoViewer">
            <div class="jsSubPhotoNav">
                <div id="jsubphoto_1" class="jsSubPhotoThumb current_photo_thumb">
                  <img src="<?php bloginfo('template_directory');?>/images/lifecare_gallery/Thumbs/_MG_5890_th.jpg">
                </div>
                <div id="jsubphoto_2" class="jsSubPhotoThumb">
                  <img src="<?php bloginfo('template_directory');?>/images/lifecare_gallery/Thumbs/_MG_5877_th.jpg">
                </div>
            </div>
            <img class="jsubphoto_1 jsSubPhoto current_photo" src="<?php bloginfo('template_directory');?>/images/lifecare_gallery/LC_AsstdLiving_Pavilion1.jpg" width="363" height="424">
            <img class="jsubphoto_2 jsSubPhoto" src="<?php bloginfo('template_directory');?>/images/lifecare_gallery/LC_AsstdLiving_Pavilion2.jpg" width="363" height="424">
          </div>

          <div class="jsSubContentText">
              <h3 class="jsSubContentTitle">Pavilion</h3>
             <p> For assisted-living residents who need a moderate level of help  daily, Westminster Canterbury Richmond has the ideal living spaces  in the Pavilion. In these studio apartments, residents can live as  independently as their abilities allow under the patient and attentive care of our skilled staff. Kinds of help include dressing and bathing, basic incontinence care, and taking medications on schedule. Pavilion  residents retain the freedom to enjoy their favorite activities, while  they and their families remain secure in the knowledge that their care  needs are being both well and expertly met.</p>
          </div>

            <div class="jsSubContentFlex">
               <ul>
                 <li>24/7 access to RNs, LPNs and Certified Nursing Assistants</li>
                  <li>Assistance with daily living tasks</li>
                  <li>Indoor pool (with whirlpool), gardens and courtyards for recreation</li>
                  <li>Educational and intergenerational programs</li>
                  <li>Social and entertainment choices</li>
                  <li>Caring staff who encourage residents’ full potential</li>
                  <li>Social worker support for residents and family</li>
               </ul>
            </div>


        </div>

      </div><!-- .subpageCopy -->
    </div>
  </div>





<?php get_sidebar('footerbanner2'); ?>

<?php get_footer(); ?>