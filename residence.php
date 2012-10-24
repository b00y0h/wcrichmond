<?php /* Template Name: Residence */

get_header(); ?>

<script type="text/javascript" charset="utf-8">
  jQuery(document).ready(function($){
      // $ is now safe within this function
      if(window.location.hash){
          hash = window.location.hash;
          xhash = hash.replace('#','');       
          tabid = $("#"+xhash).parent().attr('id');// "jsc_"+tabArray[xhash];
           //console.log(tabid)

            $(".jsubNavItem").removeClass("current");
            $("#"+tabid).addClass('current');

            $(".jsSubContent").removeClass("current_sub_content");
            $("."+tabid).addClass("current_sub_content");       
      }
      
      $("a").click(function(){
        if($(this).attr('href').indexOf("#") != -1){
            hash = $(this).attr('href');
            xhash = hash.replace('#','');       
            tabid = $("#"+xhash).parent().attr('id');// "jsc_"+tabArray[xhash];
             //console.log(tabid)

              $(".jsubNavItem").removeClass("current");
              $("#"+tabid).addClass('current');

              $(".jsSubContent").removeClass("current_sub_content");
              $("."+tabid).addClass("current_sub_content");       
              
              $(".jsSubPhoto").removeClass("current_photo");
              $(".current_sub_content .jsSubPhotoViewer .jsSubPhoto:first").addClass("current_photo");
        }
      })
      
      $(".jsubNavItem").click(function(){
        $(".jsubNavItem").removeClass("current");
        $(this).addClass('current');
        
        var block = $(this).attr('id');
        $(".jsSubContent").removeClass("current_sub_content");
        $("."+block).addClass("current_sub_content");
        
        $(".jsSubPhotoThumb").removeClass("current_photo_thumb")
        $(".current_sub_content .jsSubPhotoNav .jsSubPhotoThumb:first").addClass("current_photo_thumb");
        
        $(".jsSubPhoto").removeClass("current_photo");
        $(".current_sub_content .jsSubPhotoViewer .jsSubPhoto:first").addClass("current_photo");
         
         window.location.hash = $("a:first","#"+block).attr('id');
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

<style type="text/css" media="screen">
  .subpageWrapper{
    background-color:#ADD3CF;
  } 
</style>

<div class="subpageWrapper" style="background:url(<?php bloginfo('template_directory');?>/images/backgrounds/LS_ResOpts.png) no-repeat;">
  
  <div class="subpagePageTitle">
    <?php the_title(); ?>
  </div>
  <div style="clear:both;"></div>
  
  <div class="subpageNavigation">
    <ul>
      <li id="jsc_1" class="jsubNavItem current"><a id="overview"></a>
        <br>Overview
      </li>
      <li id="jsc_2" class="jsubNavItem"><a id="tower"></a>
        The<br>Tower
      </li>
      <li id="jsc_3" class="jsubNavItem"><a id="courtyard"></a>
        The<br>Courtyard
      </li>
      <li id="jsc_4" class="jsubNavItem"><a id="garden-apartments"></a>
        Garden Apartments
      </li>
      <li id="jsc_5" class="jsubNavItem"><a id="homes-on-the-green"></a>
        Homes On<br>The Green
      </li>
      <li id="jsc_6" class="jsubNavItem"><a id="glebe-homes"></a>
        The Glebe<br>Homes
      </li>
      <li id="jsc_8" class="jsubNavItem"><a id="campus-maps"></a>
        Campus<br>Map
      </li>
    </ul>
  </div>
  
  
  <div class="subpageContentWrapper">
    <div class="subpageCopy">    
      
      
      <div class="jsSubContent jsc_1 current_sub_content">
        <div class="jsSubPhotoViewer">
      
          <img class="jsubphoto_1 jsSubPhoto current_photo" src="<?php bloginfo('template_directory');?>/images/residence_gallery/Overview/LS_Overview.jpg" width="363" height="424">
         
          
        </div>
        
        <div class="jsSubContentText single">
          <div class="jsSubContentTitle">Overview</div>
          <p>
            Whether you choose a charming one-bedroom Tower residence, a spacious <a href="#garden-apartments">Garden</a> or <a href="#courtyard">Courtyard apartment</a> or a freestanding residence in <a href="#glebe-homes">The Glebe</a> or <a href="#homes-on-the-green">Homes on the Green</a>, you'll find a floor plan that suits your lifestyle and budget. All include individual climate controls, local phone service, basic cable TV, weekly housekeeping and linen service. Customize your residence to your taste and furnish it with your favorite pieces. You'll feel right at home.
         </p>
       </div>
       
      </div>
      
      
      <div class="jsSubContent jsc_2">
        <div class="jsSubPhotoViewer">
          
          <div class="jsSubPhotoNav" style="margin-top:360px;">
              <div id="jsubphoto_1" class="jsSubPhotoThumb current_photo_thumb">
                <img src="<?php bloginfo('template_directory');?>/images/residence_gallery/Thumbs/1_Tower_th.jpg">
              </div>       
              <div id="jsubphoto_2" class="jsSubPhotoThumb">
                <img src="<?php bloginfo('template_directory');?>/images/residence_gallery/Thumbs/3_Tower_th.jpg">
              </div>
              <div id="jsubphoto_3" class="jsSubPhotoThumb">
                <img src="<?php bloginfo('template_directory');?>/images/residence_gallery/Thumbs/4_Tower_th.jpg">
              </div>
              
          </div>
      
          <img class="jsubphoto_1 jsSubPhoto current_photo" src="<?php bloginfo('template_directory');?>/images/residence_gallery/1_The_Tower/1_Tower.jpg" width="363" height="424">    
          <img class="jsubphoto_2 jsSubPhoto" src="<?php bloginfo('template_directory');?>/images/residence_gallery/1_The_Tower/3_Tower.jpg" width="363" height="424">
          <img class="jsubphoto_3 jsSubPhoto " src="<?php bloginfo('template_directory');?>/images/residence_gallery/1_The_Tower/4_Tower.jpg" width="363" height="424">
          
  
          
          
        </div>
        
        <div class="jsSubContentFlex">
            Featuring:
           <ul>
             <li>One or two full baths; walk-in shower or tub with ceramic tile surround</li>
             <li>Floor plans with dressing rooms and walk-in closets</li>
             <li>Wood flooring in some apartments</li>
             <li>Crown moulding throughout</li>
             <li>Wire shelving in closets</li>
             <li>Floor plans with washers and dryers</li>
           </ul>
        </div>
        
        <div class="jsSubContentText">
          <div class="jsSubContentTitle">The Tower</div>
          <p>
           The Tower offers 15 appealing floor plans, from cozy studios to one- and two-bedroom residences with dining rooms and well equipped kitchens. All have large windows, plush carpet and ample closet space, with community amenities a short, enclosed walk away.
         </p>
         
         <p>
           <a href="http://www.wcrichmond.org/phpages/wp-content/uploads/2010/11/WCR_CondensedFeeSchedule2010.pdf"><img src="<?php bloginfo('template_directory');?>/images/pdf.png" width="30" align="left" style="margin-top:-10px;"> Fee Schedule</a>
           <div style="clear:both;height:2px;"></div>
           <a href="http://www.wcrichmond.org/phpages/wp-content/uploads/2010/11/tower_floor_plan.pdf"><img src="<?php bloginfo('template_directory');?>/images/pdf.png" width="30" align="left" style="margin-top:-10px;"> Floorplans</a>
         </p>
       </div>
       
      </div>
      
      <div class="jsSubContent jsc_3">
        <div class="jsSubPhotoViewer">
          <div class="jsSubPhotoNav">
              <div id="jsubphoto_1" class="jsSubPhotoThumb current_photo_thumb">
                <img src="<?php bloginfo('template_directory');?>/images/residence_gallery/Thumbs/1_Courtyard_th.jpg">
              </div>
              <div id="jsubphoto_2" class="jsSubPhotoThumb">
                <img src="<?php bloginfo('template_directory');?>/images/residence_gallery/Thumbs/2_Courtyard_th.jpg">
              </div>
              <div id="jsubphoto_3" class="jsSubPhotoThumb">
                <img src="<?php bloginfo('template_directory');?>/images/residence_gallery/Thumbs/3_Courtyard_th.jpg">
              </div>
              <div id="jsubphoto_4" class="jsSubPhotoThumb">
                <img src="<?php bloginfo('template_directory');?>/images/residence_gallery/Thumbs/4_Courtyard_th.jpg">
              </div>
              <div id="jsubphoto_5" class="jsSubPhotoThumb">
                <img src="<?php bloginfo('template_directory');?>/images/residence_gallery/Thumbs/5_Courtyard_th.jpg">
              </div>
              <div id="jsubphoto_6" class="jsSubPhotoThumb">
                <img src="<?php bloginfo('template_directory');?>/images/residence_gallery/Thumbs/6_Courtyard_th.jpg">
              </div>
              <div id="jsubphoto_7" class="jsSubPhotoThumb">
                <img src="<?php bloginfo('template_directory');?>/images/residence_gallery/Thumbs/7_Courtyard_th.jpg">
              </div>
              <div id="jsubphoto_8" class="jsSubPhotoThumb">
                <img src="<?php bloginfo('template_directory');?>/images/residence_gallery/Thumbs/8_Courtyard_th.jpg">
              </div>
              <div id="jsubphoto_9" class="jsSubPhotoThumb">
                <img src="<?php bloginfo('template_directory');?>/images/residence_gallery/Thumbs/9_Courtyard_th.jpg">
              </div>
          </div>
          
          <img class="jsubphoto_1 jsSubPhoto current_photo" src="<?php bloginfo('template_directory');?>/images/residence_gallery/2_The_Courtyard/1_Courtyard.jpg" width="363" height="424">
          <img class="jsubphoto_2 jsSubPhoto" src="<?php bloginfo('template_directory');?>/images/residence_gallery/2_The_Courtyard/2_Courtyard.jpg" width="363" height="424">
          <img class="jsubphoto_3 jsSubPhoto" src="<?php bloginfo('template_directory');?>/images/residence_gallery/2_The_Courtyard/3_Courtyard.jpg" width="363" height="424">
          <img class="jsubphoto_4 jsSubPhoto" src="<?php bloginfo('template_directory');?>/images/residence_gallery/2_The_Courtyard/4_Courtyard.jpg" width="363" height="424">
          <img class="jsubphoto_5 jsSubPhoto" src="<?php bloginfo('template_directory');?>/images/residence_gallery/2_The_Courtyard/5_Courtyard.jpg" width="363" height="424">
          <img class="jsubphoto_6 jsSubPhoto" src="<?php bloginfo('template_directory');?>/images/residence_gallery/2_The_Courtyard/6_Courtyard.jpg" width="363" height="424">
          <img class="jsubphoto_7 jsSubPhoto" src="<?php bloginfo('template_directory');?>/images/residence_gallery/2_The_Courtyard/7_Courtyard.jpg" width="363" height="424">
          <img class="jsubphoto_8 jsSubPhoto" src="<?php bloginfo('template_directory');?>/images/residence_gallery/2_The_Courtyard/8_Courtyard.jpg" width="363" height="424">
          <img class="jsubphoto_9 jsSubPhoto" src="<?php bloginfo('template_directory');?>/images/residence_gallery/2_The_Courtyard/9_Courtyard.jpg" width="363" height="424">
        </div>
        
        <div class="jsSubContentFlex" style="padding-bottom:15px;">
            Featuring:
           <ul>
             <li>Full bath with tile floor for each bedroom</li>
             <li>Wood foyer floor</li>
             <li>Crown moulding</li>
             <li>Blinds on all windows and patio doors</li>
             <li>Tray ceilings in top-floor apartments</li>
             <li>Storage space nearby on same floor</li>
             <li>All amenities an indoor walk away</li>
             <li>Parking garage</li>
           </ul>
        </div>
        
        <div class="jsSubContentText">
          <div class="jsSubContentTitle">The Courtyard</div>
          <p>       
            Tall windows flood our one-, two- and three-bedroom Courtyard residences with natural light. Each of the ten versatile floor plans – most with den or sunroom; all with balcony or patio – feature nine foot ceilings and can be decorated to personal tastes.
          </p>
          
          <p>
            <a href="http://www.wcrichmond.org/phpages/wp-content/uploads/2010/11/WCR_CondensedFeeSchedule2010.pdf"><img src="<?php bloginfo('template_directory');?>/images/pdf.png" width="30" align="left" style="margin-top:-10px;"> Fee Schedule</a>
            <div style="clear:both;height:2px;"></div>
            <a href="http://www.wcrichmond.org/phpages/wp-content/uploads/2010/11/courtyard_floor_plan.pdf"><img src="<?php bloginfo('template_directory');?>/images/pdf.png" width="30" align="left" style="margin-top:-10px;"> Floorplans</a>
          </p>
        </div>
        
      </div>
      
      <div class="jsSubContent jsc_4">
        <div class="jsSubPhotoViewer">
          <div class="jsSubPhotoNav" style="margin-top:360px;">
              <div id="jsubphoto_1" class="jsSubPhotoThumb current_photo_thumb">
                <img src="<?php bloginfo('template_directory');?>/images/residence_gallery/Thumbs/1_GardenApts_th.jpg">
              </div>
              <div id="jsubphoto_2" class="jsSubPhotoThumb">
                <img src="<?php bloginfo('template_directory');?>/images/residence_gallery/Thumbs/2_GardenApts_th.jpg">
              </div>
              <div id="jsubphoto_3" class="jsSubPhotoThumb">
                <img src="<?php bloginfo('template_directory');?>/images/residence_gallery/Thumbs/3_GardenApts_th.jpg">
              </div>
              <div id="jsubphoto_4" class="jsSubPhotoThumb">
                <img src="<?php bloginfo('template_directory');?>/images/residence_gallery/Thumbs/4_GardenApts_th.jpg">
              </div>
          </div>
          <img class="jsubphoto_1 jsSubPhoto current_photo"  src="<?php bloginfo('template_directory');?>/images/residence_gallery/3_Garden_Apartments/1_GardenApts.jpg" width="363" height="424">
          <img class="jsubphoto_2 jsSubPhoto"  src="<?php bloginfo('template_directory');?>/images/residence_gallery/3_Garden_Apartments/2_GardenApts.jpg" width="363" height="424">
          <img class="jsubphoto_3 jsSubPhoto"  src="<?php bloginfo('template_directory');?>/images/residence_gallery/3_Garden_Apartments/3_GardenApts.jpg" width="363" height="424">
          <img class="jsubphoto_4 jsSubPhoto"  src="<?php bloginfo('template_directory');?>/images/residence_gallery/3_Garden_Apartments/4_GardenApts.jpg" width="363" height="424">
        </div>
        
         <div class="jsSubContentFlex">
             Featuring:
             <ul>
               <li>Spacious, well-appointed kitchens</li>
               <li>One or two full baths, with ceramic tile</li>
               <li>Wood floor in den, dining and living rooms</li>
               <li>Crown moulding throughout</li>
               <li>Wood shelving in closets</li>
               <li>All amenities an indoor walk away</li>
             </ul>
          </div>
        
        <div class="jsSubContentText">
          <div class="jsSubContentTitle">Garden Apartments</div>
          <p>
            With parking just outside, the Garden Apartments offer the feel of seclusion with close proximity to all our community has to offer. Each of 11 floor plans features ceilings nine feet or higher, arched windows, and a balcony or terrace—some, even a second balcony or den or crafts-room space.
          </p>
          
          <p>
            <a href="http://www.wcrichmond.org/phpages/wp-content/uploads/2010/11/WCR_CondensedFeeSchedule2010.pdf"><img src="<?php bloginfo('template_directory');?>/images/pdf.png" width="30" align="left" style="margin-top:-10px;"> Fee Schedule</a>
            <div style="clear:both;height:2px;"></div>
            <a href="http://www.wcrichmond.org/phpages/wp-content/uploads/2010/11/garden_floor_plan.pdf"><img src="<?php bloginfo('template_directory');?>/images/pdf.png" width="30" align="left" style="margin-top:-10px;"> Floorplans</a>
          </p>
        
        </div>
        
      </div>
      
      <div class="jsSubContent jsc_5">
        <div class="jsSubPhotoViewer">
          <div class="jsSubPhotoNav">
              <div id="jsubphoto_1" class="jsSubPhotoThumb current_photo_thumb">
                <img src="<?php bloginfo('template_directory');?>/images/residence_gallery/Thumbs/1_HomesOnTheGreen_th.jpg">
              </div>
              <div id="jsubphoto_2" class="jsSubPhotoThumb">
                <img src="<?php bloginfo('template_directory');?>/images/residence_gallery/Thumbs/2_HomesOnTheGreen_th.jpg">
              </div>
              <div id="jsubphoto_3" class="jsSubPhotoThumb">
                <img src="<?php bloginfo('template_directory');?>/images/residence_gallery/Thumbs/3_HomesOnTheGreen_th.jpg">
              </div>
              <div id="jsubphoto_4" class="jsSubPhotoThumb">
                <img src="<?php bloginfo('template_directory');?>/images/residence_gallery/Thumbs/4_HomesOnTheGreen_th.jpg">
              </div>
              <div id="jsubphoto_5" class="jsSubPhotoThumb">
                <img src="<?php bloginfo('template_directory');?>/images/residence_gallery/Thumbs/5_HomesOnTheGreen_th.jpg">
              </div>
              <div id="jsubphoto_6" class="jsSubPhotoThumb">
                <img src="<?php bloginfo('template_directory');?>/images/residence_gallery/Thumbs/6_HomesOnTheGreen_th.jpg">
              </div>
              <div id="jsubphoto_7" class="jsSubPhotoThumb">
                <img src="<?php bloginfo('template_directory');?>/images/residence_gallery/Thumbs/7_HomesOnTheGreen_th.jpg">
              </div>
              <div id="jsubphoto_8" class="jsSubPhotoThumb">
                <img src="<?php bloginfo('template_directory');?>/images/residence_gallery/Thumbs/8_HomesOnTheGreen_th.jpg">
              </div>
          </div>    
          <img class="jsubphoto_1 jsSubPhoto current_photo" src="<?php bloginfo('template_directory');?>/images/residence_gallery/4_Homes_on_the_Green/1_HomesOnTheGreen.jpg" width="363" height="424">
          <img class="jsubphoto_2 jsSubPhoto" src="<?php bloginfo('template_directory');?>/images/residence_gallery/4_Homes_on_the_Green/2_HomesOnTheGreen.jpg" width="363" height="424">
          <img class="jsubphoto_3 jsSubPhoto" src="<?php bloginfo('template_directory');?>/images/residence_gallery/4_Homes_on_the_Green/3_HomesOnTheGreen.jpg" width="363" height="424">
          <img class="jsubphoto_4 jsSubPhoto" src="<?php bloginfo('template_directory');?>/images/residence_gallery/4_Homes_on_the_Green/4_HomesOnTheGreen.jpg" width="363" height="424">
          <img class="jsubphoto_5 jsSubPhoto" src="<?php bloginfo('template_directory');?>/images/residence_gallery/4_Homes_on_the_Green/5_HomesOnTheGreen.jpg" width="363" height="424">
          <img class="jsubphoto_6 jsSubPhoto" src="<?php bloginfo('template_directory');?>/images/residence_gallery/4_Homes_on_the_Green/6_HomesOnTheGreen.jpg" width="363" height="424">
          <img class="jsubphoto_7 jsSubPhoto" src="<?php bloginfo('template_directory');?>/images/residence_gallery/4_Homes_on_the_Green/7_HomesOnTheGreen.jpg" width="363" height="424">
          <img class="jsubphoto_8 jsSubPhoto" src="<?php bloginfo('template_directory');?>/images/residence_gallery/4_Homes_on_the_Green/8_HomesOnTheGreen.jpg" width="363" height="424">
        </div>
        
        <div class="jsSubContentFlex">
              Featuring:
             <ul>
               <li>Ceramic tile floors in all baths</li>
               <li>Wood foyer, dining and living room floors</li>
               <li>Crown moulding</li>
               <li>Blinds on all windows and patio doors</li>
               <li>Gas fireplace</li>
               <li>Second floor storage space (when not finished)</li>
               <li>Laundry room with washer and dryer </li>
             </ul>
        </div>
        
        <div class="jsSubContentText">
           <div class="jsSubContentTitle">Homes on the Green</div>
           <p>Relaxing front porches. Sunny backyard patios. Nine-foot ceilings. Large master bedrooms. Two-car garages. Our Homes on the Green have everything you like in a spacious floor plan – some with sunrooms or dens, others with finished second floors, adding two more bedrooms. </p>
           
            <p>
               <a href="http://www.wcrichmond.org/phpages/wp-content/uploads/2010/11/WCR_CondensedFeeSchedule2010.pdf"><img src="<?php bloginfo('template_directory');?>/images/pdf.png" width="30" align="left" style="margin-top:-10px;"> Fee Schedule</a>
               <div style="clear:both;height:2px;"></div>
               <a href="http://www.wcrichmond.org/phpages/wp-content/uploads/2010/11/homes-on-the-green-floor-plans-11-2010.pdf"><img src="<?php bloginfo('template_directory');?>/images/pdf.png" width="30" align="left" style="margin-top:-10px;"> Floorplans</a>
             </p>
        </div>
         
      </div>  
      
      <div class="jsSubContent jsc_6">
        <div class="jsSubPhotoViewer">
           <div class="jsSubPhotoNav" style="margin-top:360px;">
                <div id="jsubphoto_1" class="jsSubPhotoThumb current_photo_thumb">
                  <img src="<?php bloginfo('template_directory');?>/images/residence_gallery/Thumbs/1_Glebe_th.jpg">
                </div>
                <div id="jsubphoto_2" class="jsSubPhotoThumb">
                  <img src="<?php bloginfo('template_directory');?>/images/residence_gallery/Thumbs/2_Glebe_th.jpg">
                </div>
                <div id="jsubphoto_3" class="jsSubPhotoThumb">
                  <img src="<?php bloginfo('template_directory');?>/images/residence_gallery/Thumbs/3_Glebe_th.jpg">
                </div>
                <div id="jsubphoto_4" class="jsSubPhotoThumb">
                  <img src="<?php bloginfo('template_directory');?>/images/residence_gallery/Thumbs/4_Glebe_th.jpg">
                </div>
                <div id="jsubphoto_5" class="jsSubPhotoThumb">
                  <img src="<?php bloginfo('template_directory');?>/images/residence_gallery/Thumbs/5_Glebe_th.jpg">
                </div>
          </div>
           <img class="jsubphoto_1 jsSubPhoto current_photo" src="<?php bloginfo('template_directory');?>/images/residence_gallery/5_The_Glebe_Homes/1_Glebe.jpg" width="363" height="424">
           <img class="jsubphoto_2 jsSubPhoto" src="<?php bloginfo('template_directory');?>/images/residence_gallery/5_The_Glebe_Homes/2_Glebe.jpg" width="363" height="424">
           <img class="jsubphoto_3 jsSubPhoto" src="<?php bloginfo('template_directory');?>/images/residence_gallery/5_The_Glebe_Homes/3_Glebe.jpg" width="363" height="424">
           <img class="jsubphoto_4 jsSubPhoto" src="<?php bloginfo('template_directory');?>/images/residence_gallery/5_The_Glebe_Homes/4_Glebe.jpg" width="363" height="424">
           <img class="jsubphoto_5 jsSubPhoto" src="<?php bloginfo('template_directory');?>/images/residence_gallery/5_The_Glebe_Homes/5_Glebe.jpg" width="363" height="424">
        </div>
        
        <div class="jsSubContentFlex">
              Featuring:
             <ul>
               <li>Breakfast room</li>
               <li>Two or three full baths</li>
               <li>Laundry room with washer and dryer</li>
               <li>Wood flooring and nine-foot ceilings</li>
               <li>Large, walk-in storage off garage</li>
             </ul>
        </div>
        
        <div class="jsSubContentText">
          <div class="jsSubContentTitle">The Glebe Homes</div>
          <p>Red brick exteriors, private yards with brick terraces or wood decks, and attached two-car garages characterize The Glebe Homes, our most spacious two-, three- and four-bedroom residences. Sunrooms, country kitchens, and gas fireplaces are just some of the many upgrades.  </p>
          
          <p>
            <a href="http://www.wcrichmond.org/phpages/wp-content/uploads/2010/11/WCR_CondensedFeeSchedule2010.pdf"><img src="<?php bloginfo('template_directory');?>/images/pdf.png" width="30" align="left" style="margin-top:-10px;"> Fee Schedule</a>
            <div style="clear:both;height:2px;"></div>
            <a href="http://www.wcrichmond.org/phpages/wp-content/uploads/2010/11/glebe_floor_plan.pdf"><img src="<?php bloginfo('template_directory');?>/images/pdf.png" width="30" align="left" style="margin-top:-10px;"> Floorplans</a>
          </p>
        </div>
        
      </div>
      
      <div class="jsSubContent jsc_7">
        <div class="jsSubPhotoViewer">
          <img src"http://dummyimage.com/363x424">
          <img src="<?php bloginfo('template_directory');?>/images/residence_gallery/">
        </div>
        
        <div class="jsSubContentFlex">
                Featuring:
               <ul>
                 <li>Resident gardens</li>
                 <li>Cochran Pond</li>
                 <li>Putting Green</li>
                 <li>Dog Park </li>
               </ul>
        </div>
        <div class="jsSubContentText">
          <div class="jsSubContentTitle">Outdoor Amenities</div>
          
          <p>Our community’s exterior has its attractions, too. Stroll about our grounds and discover resident gardens to rival any our grounds staff tends. Sit a spell beside scenic Cochran Pond. Sharpen your short game on our putting green. Or visit our fenced-in dog park with your four-legged friend. </p>
        </div>
        
      </div>
      
      <div class="jsSubContent jsc_8" style="height:424px; background:url(<?php bloginfo('template_directory');?>/images/residence_gallery/CampusMap_Static.jpg) no-repeat;">
        
        
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