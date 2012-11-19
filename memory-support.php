<?php /* Template Name: Memory Support */ get_header(); ?>

<script type="text/javascript" charset="utf-8">
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
      Memory Support
    </div>

    <div class="subpageNavigation">
       <ul>
         <li id="jsc_1" class="jsubNavItem current">
           The Gables<br>Overview
         </li>
         <li id="jsc_2" class="jsubNavItem">
          The Gables<br>Residences
         </li>
         <li id="jsc_3" class="jsubNavItem">
           The Gables<br>Therapy
         </li>
         <li id="jsc_4" class="jsubNavItem">
           <br>Monticello
         </li>
       </ul>
     </div>

    <div class="subpageContentWrapper" >
      <div class="subpageCopy">
        <div class="jsSubContent jsc_1 current_sub_content">




          <div class="resPhotoViewer">

                        <img src="<?php bloginfo('template_directory');?>/images/lifecare_gallery/LC_GablesTherapy.jpg" width="363" height="424">
          </div>

          <div class="jsSubContentText">
            <h3 class="jsSubContentTitle">Overview</h3>
            <p>Each of The Gables household areas has a distinct look to help residents identify their home. A central kitchen serves as a care station, which affords easy monitoring and encourages interaction. Around it are an open sitting area with fireplace, inviting family rooms, an intimate dining room, and short hallways to residences. Each residence welcomes personal touches of cherished pieces of furniture or other personal items. Big windows and large bathrooms with walk- in showers add a spacious feel. Secured patios and terraces allow access to the safely enclosed Mary Morton Parsons Garden.</p>
          </div>
            <div class="jsSubContentFlex">
               <ul>
                  <li>24-hour access to RNs, LPNs and CNAs</li>
                  <li>On-site medical director</li>
                  <li>Access to community amenities in the company of staff or family</li>
                  <li>Family support that includes written materials and education</li>
                  <li>Caring staff who encourage residents’ full potential</li>
               </ul>
            </div>

        </div>

        <div class="jsSubContent jsc_2">


          <div class="resPhotoViewer">
            <img src="<?php bloginfo('template_directory');?>/images/lifecare_gallery/LC_GablesResidences.jpg" width="363" height="424">
          </div>

          <div class="jsSubContentText">
            <h3 class="jsSubContentTitle">Residences</h3>

            <p>Each of The Gables household areas has a distinct look to help residents identify their home. Around the central care station, which affords easy monitoring and encourages interaction, are an open sitting area with fireplace, inviting family rooms, an intimate dining room, and short hallways to residences. Residences come fully furnished but invite personal touches of cherished pieces of furniture or other personal items. Big windows and large bathrooms with walk- in showers add a spacious feel. Secured patios and terraces allow access to the safely enclosed Mary Morton Parsons Garden.</p>
          </div>
          <div class="jsSubContentFlex">
             <ul>
               <li>Assisted living for pronounced physical and cognitive needs</li>
               <li>Private, studio residences with large bathrooms and walk-in showers</li>
               <li>Resort-like spa on each floor</li>
               <li>Secured patios and terraces</li>
               <li>Transportation services</li>
               <li>On-site beauty shop, barber and beautician</li>
             </ul>
          </div>

        </div>

        <div class="jsSubContent jsc_3">


          <div class="resPhotoViewer">
            <img class="jsubphoto_1 jsSubPhoto current_photo" src="<?php bloginfo('template_directory');?>/images/lifecare_gallery/LC_GablesOverview.jpg" width="363" height="424">
          </div>

          <div class="jsSubContentText">
             <h3 class="jsSubContentTitle">Dominion Therapy Programs</h3>

            <p>Made possible by a grant from Dominion Resources to Westminster Canterbury <a href="/foundation/">Foundation</a>, the Dominion Therapy Programs help residents of The Gables maintain focus, have a sense of control, and be socially engaged. Art Therapy allows residents to be creative through drawing, painting, printmaking, fiber and clay; and includes museum trips, books, DVDs, and games for art appreciation. Horticultural Therapy uses arranging flowers, planting seeds and bulbs and harvesting vegetables for cognitive and sensory stimulation and to fulfill the natural human need to nurture. Music Therapy uses familiar chords and lyrics of song and instruments to spark memories, improve communication and promote physical and social wellness.</p>

          </div>
          <div class="jsSubContentFlex">
             <ul>
               <li>24/7 access to RNs, LPNs and Certified Nursing Assistants</li>
               <li>Assistance with minor daily living tasks</li>
               <li>Indoor pool (with whirlpool), gardens and courtyards for recreation</li>
               <li>Educational and intergenerational programs</li>
               <li>Social worker support for residents and family</li>
               <li>Art, music and horticulture therapies</li>
             </ul>
          </div>

        </div>

        <div class="jsSubContent jsc_4">

          <div class="resPhotoViewer">
            <img src="<?php bloginfo('template_directory');?>/images/lifecare_gallery/LC_Overview.jpg" width="363" height="424">
          </div>

          <div class="jsSubContentText single">
            <h3 class="jsSubContentTitle">Monticello</h3>

             <p>Monticello assisted-living residents have mild memory-support needs but no physical ones—and when their needs are met they thrive and lead largely independent, active and social lives. They go anywhere on campus they please, simply signing in and out, but benefit from having staff provide them with nutritious meals and help manage their medications. We have two Monticello households of twelve studio apartments each.</p>
          </div>

        </div>



      </div><!-- .subpageCopy -->
    </div>

  </div>





<?php get_sidebar('footerbanner2'); ?>

<?php get_footer(); ?>