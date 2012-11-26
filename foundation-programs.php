<?php /* Template Name: Foundation-Programs */

get_header(); ?>

<script>

  jQuery(document).ready(function($){
      // $ is now safe within this function

      if(window.location.hash){
        //console.log('we have a hash')
          hash = window.location.hash;
          xhash = hash.replace('#','');
          //console.log(xhash)

          tabid = $("#_"+xhash).parent().attr('id');// "jsc_"+tabArray[xhash];
          //console.log(tabid)

            $(".jsubNavItem").removeClass("current");
            $("#"+tabid).addClass('current');

            $(".jsSubContent").removeClass("current_sub_content");
            $("."+tabid).addClass("current_sub_content");

      }

      $(".jsubNavItem").click(function(e){
        $(".jsubNavItem").removeClass("current");
        $(this).addClass('current');

        var block = $(this).attr('id');
        $(".jsSubContent").removeClass("current_sub_content");
        $("."+block).addClass("current_sub_content");

        window.location.hash = $("a:first","#"+block).attr('id').replace("_","");

      })

  })


</script>

<style type="text/css" media="screen">
  .subpageWrapper{
    background:url(<?php bloginfo('template_directory');?>/images/programs_bg.png) no-repeat;
  }
  .subpageCopy{
    height:585px;
  }
  .resPhotoViewer{
    float:left;
  }

  .jsSubContent{
    height:595px;
  }

  .jsSubContentText{
    height:540px;
  }
  .jsSubContentFlex{
    height:525px;
  }

</style>

<div class="subpageWrapper">

  <div class="subpagePageTitle">
    <?php the_title(); ?>
  </div>
  <div style="clear:both;"></div>

  <div class="subpageNavigation">
    <ul>
      <li id="jsc_1" class="jsubNavItem current"><a id="_fellowship"></a>
        <br>FELLOWSHIP
      </li>
      <li id="jsc_2" class="jsubNavItem"><a id="_health-services"></a>
        HEALTH<br>SERVICES
      </li>
      <li id="jsc_3" class="jsubNavItem"><a id="_wellness"></a>
        <br>WELLNESS
      </li>
      <li id="jsc_4" class="jsubNavItem"><a id="_pastoral-care"></a>
        PASTORAL<br>CARE
      </li>
      <li id="jsc_5" class="jsubNavItem"><a id="_child-development"></a>
        CHILD<br>DEVELOPMENT CENTER
      </li>
      <li id="jsc_6" class="jsubNavItem"><a id="_memory-support"></a>
        MEMORY<br>SUPPORT
      </li>
      <li id="jsc_7" class="jsubNavItem"><a id="_performing-arts"></a>
        PERFORMING<br>ARTS
      </li>
      <li id="jsc_8" class="jsubNavItem"><a id="_studio-arts"></a>
        STUDIO<br>ARTS
      </li>
      <li id="jsc_9" class="jsubNavItem"><a id="_employee-education"></a>
        EMPLOYEE<br>EDUCATION
      </li>
    </ul>
  </div>

  <div class="subpageContentWrapper">
    <div class="subpageCopy">

      <div class="jsSubContent jsc_1 current_sub_content">

        <div class="jsSubContentFlex">
           <ul>
             <li>Recipients include new residents and existing residents.</li>
             <li>In 2011, 109 recipients received $3.2 million in assistance.</li>
             <li>Since 1975 more than 470 residents have received $50-million.</li>
             <li>No part of other residents’ fees covers Fellowship assistance to others.</li>
             <li>Fellowship is supported by gifts to the Annual Fellowship Fund and income from Fellowship Endowments.</li>
             <li>All Fellowship grants are covered solely through charitable gifts, never as part of full-pay residents’ fees.</li>
             <!-- <li>The 2012 Annual Fellowship Fund goal $1,300,000.</li> -->
           </ul>
        </div>


        <div class="resPhotoViewer">
          <img src="<?php bloginfo('template_directory');?>/images/foundation_gallery/programs/Foundation_Fellowship.jpg" width="363" height="585">
        </div>


        <div class="jsSubContentText ">
          <h3 class="jsSubContentTitle">Fellowship</h3>
          <p>
            The Foundation’s confidential Fellowship Program provides entrance and monthly assistance to help some individuals with significant documented financial needs. It also provides long-term security to all residents with the commitment that no resident will ever be asked to leave due to an inability to pay. Currently, 109 residents are receiving Fellowship assistance. In addition to our community’s fees, Fellowship provides supplemental health insurance and 75% or more of out-of-pocket medical expenses.
          </p>

        </div>
      </div>


      <div class="jsSubContent jsc_2">

        <div class="jsSubContentFlex">
           Programs and initiatives made possible through Foundation gifts:
           <ul>
             <li>A nurse practitioner who works with our full-time physician.</li>
             <li>Extended nurse coverage in our Clinic.</li>
             <li>Additional certified nursing assistance in the Parsons Health Center.</li>
             <li>A clinical educator dedicated to the Parsons Health Center provides on-the-floor
             and small group continuing education.</li>
             <li>Functional fitness classes for Parsons Health Center residents promote strength,
             flexibility and energy.</li>
           </ul>
        </div>

        <div class="resPhotoViewer">
          <img src="<?php bloginfo('template_directory');?>/images/foundation_gallery/programs/HealthCenter.jpg" width="363" height="585">
        </div>


        <div class="jsSubContentText">
          <h3 class="jsSubContentTitle">Health Services</h3>

          <p>In all areas of our campus, Westminster Canterbury has embraced a revolutionary approach to service that fosters independence, flexibility and choice.  In the Mary Morton Parsons Health Center, this approach is supported by renovations that created 11 separate households.</p>

          <p>Donors to the Foundation further enhance health services across campus through their support of ambitious initiatives in priority areas:  staffing, training, technology and quality assurance. Charitable funding is needed to provide services and innovations that otherwise are not possible.  Our goal: to be a national model for health services in long-term care.</p>

          <p>Possible future initiatives:</p>
          <ul>
            <li>Modern health services technology if a challenge from The Cabell Foundation ($75,000 grant if matching funds are raised by June 2012) is met.</li>
          </ul>

       </div>

      </div>

      <div class="jsSubContent jsc_3">
        <div class="jsSubContentFlex">
          Programs and initiatives made possible through Foundation gifts:
          <ul>
            <li>DAKIM Brain Fitness computer kiosks improve memory and strengthen concentration.</li>
            <li>An audio book library for residents with impaired vision.</li>
            <li>Functional fitness classes for health center residents promote strength, flexibility and energy.</li>
          </ul>
        </div>

        <div class="resPhotoViewer">
          <img src="<?php bloginfo('template_directory');?>/images/foundation_gallery/programs/Wellness.jpg" width="363" height="585">
        </div>


        <div class="jsSubContentText">
          <h3 class="jsSubContentTitle">Wellness</h3>

          <p>Seeking a healthy balance in the development of mind, body and spirit, the Foundation supports Westminster Canterbury’s Wellness Program, winner of the national Nu-Step Pinnacle Award for retirement communities in 2010.  Foundation gifts have provided support for staff, equipment and programs. The Foundation funds membership in COLLAGE, a national program that helps residents create individual goals for healthy aging.  COLLAGE also provides Westminster Canterbury with deeper knowledge of residents’ needs for wellness programming and resources.   </p>



       </div>

      </div>

      <div class="jsSubContent jsc_4">
        <div class="jsSubContentFlex">
          Programs and initiatives made possible through Foundation gifts:
          <ul>
            <li>
              Dr. Harvey Cox, the Hollis Research Professor of Divinity at Harvard University, spoke on <strong>The Future of Faith</strong> as the annual David F. Peters Lecturer in February 2011.
            </li>
            <li>A chaplain specializing in dementia-related pastoral care offers periodic educational opportunities for interested area clergy.</li>
            <li>The Fuller-Rose Endowment, in memory of the late Rev. Dr. Reginald H. Fuller and the late  Dr. Ben Lacy Rose, provides two internships annually for seminarians.</li>
          </ul>
        </div>

        <div class="resPhotoViewer">
          <img src="<?php bloginfo('template_directory');?>/images/foundation_gallery/programs/PastoralCare.jpg" width="363" height="585">
        </div>


        <div class="jsSubContentText">
          <h3 class="jsSubContentTitle">Pastoral Care</h3>

          <p>Our full-time Pastoral Care staff includes three chaplains providing an array of worship opportunities, as well as pastoral support of residents and staff.   The Foundation funds an additional part-time chaplain devoted to supporting residents with dementia and their families and professional caregivers.  This team shares their experience with area seminarians and recent seminary graduate interns who receive stipends through the Foundation to work and learn on our campus.  The Foundation also supports Westminster Canterbury’s pastoral care educational lectures, open to the wider community.</p>

       </div>

      </div>

      <div class="jsSubContent jsc_5">
        <div class="jsSubContentFlex">
          Programs and initiatives made possible through Foundation gifts:
          <ul>
            <li>A Foundation-funded inclusion program embraces children with special needs.</li>
            <li>Special programs in art and music, and summer camp enrichment opportunities.</li>
            <li>Gifts to enhance children’s literacy skills support parents as teachers.</li>
          </ul>
        </div>

        <div class="resPhotoViewer">
          <img src="<?php bloginfo('template_directory');?>/images/foundation_gallery/programs/ChildDevCenter.jpg" width="363" height="585">
        </div>


        <div class="jsSubContentText">
          <h3 class="jsSubContentTitle">Child Development Center</h3>

          <p>Westminster Canterbury Richmond’s NAEYC-accredited Child Development Center enrolls approximately 120 children from the ages of six weeks to 12 years. Employee children receive a 45% corporate tuition discount.  Generous donors have also created a scholarship endowment to provide additional need-based assistance to employee children, and funds to provide scholarships for special fee-based classes. </p>

       </div>

      </div>

      <div class="jsSubContent jsc_6">
        <div class="jsSubContentFlex">
          Programs and initiatives made possible through Foundation gifts:
          <ul>
            <li>Music, the international language, helps some dementia sufferers recover memories. </li>
            <li>Residents enjoy planting or arranging favorite flowers, cooking harvested vegetables, and stocking bird feeders.</li>
            <li>Making art – creating it, not just looking is engaging and life-affirming.</li>
          </ul>
        </div>

        <div class="resPhotoViewer">
          <img src="<?php bloginfo('template_directory');?>/images/foundation_gallery/programs/MemorySupport.jpg" width="363" height="585">
        </div>


        <div class="jsSubContentText">
          <h3 class="jsSubContentTitle">Memory Support</h3>

          <p>Memory support therapies with professional therapists in the fields of music, art, and horticulture help residents relate to past memories, calm their behavior, and slow the debilitation of memory loss. Originally made possible through a generous grant from Dominion Resources, this program continues as a result of generous gifts to the Foundation. Reports from therapists and grateful families substantiate the effectiveness of these memory support programs in improving residents’ quality of life. </p>

       </div>

      </div>

      <div class="jsSubContent jsc_7">
        <div class="jsSubContentFlex">
          Programs and initiatives made possible through Foundation gifts:
          <ul>
            <li>The Preservation Hall Jazz Band, The Vienna Choir Boys, and the Glenn Miller Orchestra</li>
            <li>The Virginia Opera, Barksdale Theater, the Richmond Symphony and the Richmond Ballet</li>
            <li>Theater seats have been "named" through gifts to the Theater Endowment</li>
          </ul>
        </div>

        <div class="resPhotoViewer">
          <img src="<?php bloginfo('template_directory');?>/images/foundation_gallery/programs/PerfArts.jpg" width="363" height="585">
        </div>


        <div class="jsSubContentText">
          <h3 class="jsSubContentTitle">Performing Arts</h3>

          <p>The Sara Belle November Theater, specially designed for the comfort of older adults, is one of only a few nationwide on the campus of a retirement community. Charitable gifts, not resident fees, cover the performance fees of all the performances in the theater.  Many donors have contributed to permanent endowments, or have sponsored special evenings for the community.</p>


          <p>Ted and Mary Linhart will match up to $100,000 in gifts toward Performing Arts Endowment over the next 2-5 years.</p>

       </div>

      </div>

      <div class="jsSubContent jsc_8">
        <div class="jsSubContentFlex">
          Programs and initiatives made possible through Foundation gifts:
          <ul>
            <li>Monthly group or individual shows of resident work in the Eleanor L. Melin Resident Art Gallery. </li>
            <li>The McGue-Millhiser Art Studio and the Woodworking Shop are open for individual exploration, as well as classes taught by professionals.</li>
          </ul>
        </div>

        <div class="resPhotoViewer">
          <img src="<?php bloginfo('template_directory');?>/images/foundation_gallery/programs/StudioArts.jpg" width="363" height="585">
        </div>


        <div class="jsSubContentText">
          <h3 class="jsSubContentTitle">Studio Arts</h3>

          <p>The Foundation supports Westminster Canterbury Richmond’s studio arts program by funding instructors, supplies, and equipment. The program offers classes for residents at all levels of artistic ability. Class series and onetime workshops in painting, drawing, woodworking, monotype printmaking, jewelry making and more enable residents to continue lifelong passions or discover hidden potential.</p>

       </div>

      </div>

      <div class="jsSubContent jsc_9">
        <div class="jsSubContentFlex">
          Programs and initiatives made possible through Foundation gifts:
          <ul>
            <li>Sandra Williams progressed from an office assistant to a certified nursing assistant and is currently a registered
            nurse thanks to support from the Darling Healthcare Education Endowment.</li>

            <li>A planned gift by the late Anise Lee Zimmerman has helped employees attend seminars and take college courses since 2004.</li>
          </ul>
        </div>

        <div class="resPhotoViewer">
          <img src="<?php bloginfo('template_directory');?>/images/foundation_gallery/programs/EmployeeEd.jpg" width="363" height="585">
        </div>


        <div class="jsSubContentText">
          <h3 class="jsSubContentTitle">Employee Education</h3>

          <p>Various Foundation funds and endowments provide tuition assistance to enhance learning and skill development for Westminster Canterbury employees.  Westminster Canterbury Richmond encourages each employee’s career development – and can share success stories as proof. Whether it’s attending a one-day, work-related seminar or earning a college degree, any interested employee can find an opportunity to grow through this program.</p>

       </div>

      </div>

    </div><!-- .subpageCopy -->
  </div>

  <div style="clear:both;"></div>
</div>


<?php get_sidebar('footerbanner'); ?>


<?php get_footer(); ?>