<?php /* Template Name: Foundation-Leadership */

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

  <div class="subpageNavigation">
    <ul>
      <li id="jsc_1" class="jsubNavItem current">
        Board of<br>Trustees
      </li>
      <li id="jsc_2" class="jsubNavItem">
        Foundation<br>Staff
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
          <h3 class="jsSubContentTitle">Westminster Canterbury Foundation Board of Trustees</h3>
          <p>
            David D. Addison, Esq., Attorney, Williams Mullen<br>

            C. Jordan Ball, Jr., Retired Senior Vice President, Scott & Stringfellow, Inc.<br>

            Dr. Wyatt S. Beazley III, Retired Physician<br>

            William C. Boinest, Vice Chair, Retired President and CEO, Craigie, Inc.<br>

            May H. Fox, Director of Government Relations, Eckert Seamans<br>

            L.H. Ginn III, Manager, Ginn & Ginn, LLC<br>

            Allen C. Goolsby, Esq., Partner, Hunton & Williams, LLP<br>

            Anne H. Hardage, Crispin Properties<br>

            Tyler R. Harris, Senior Vice President, Middleburg Trust Company<br>

            Nancy M. Harrison, Senior Vice President, Wachovia Bank<br>

            Elizabeth Cabell Jennings, Portfolio Manager, Thompson, Siegel & Walmsley<br>

            Gregory T. Lane, Senior Vice President, Union First Market Bank<br>

            Richard B. Madden, Chair, Retired Senior Vice President, Corporate Banking, Wachovia<br>

            Suzanne J. McCusty, Banker<br>

            John L. McElroy III, Managing Director, Riggs, Counselman, Michaels & Downes<br>

            Glenn R. Moore, Esq., Attorney, Hirschler Fleischer<br>

            Nancy N. Rogers, Esq., Attorney, Virginia Estate Plans, PLC<br>

            Dr. Cora S. Salzberg, Retired Educator<br>

            E. Hunter Thompson, Jr., Chair, Thompson Davis & Company<br>

            Wilson R. Trice, Esq., Attorney, Thompson & McMullan, P.C.<br>

            James S. Watkinson, Retired Chairman and CEO, Morton G. Thalhimer, Inc.<br>

            Michael D. Williams, President -Trust Division, Union First Market Bank
          </p>
        </div>
      </div>

      <div class="jsSubContent jsc_2">
        <div class="resPhotoViewer">
          <img src="<?php bloginfo('template_directory');?>/images/" width="363" height="424">
        </div>


        <div class="jsSubContentText single">
          <h3 class="jsSubContentTitle">Westminster Canterbury Foundation Staff<h3>
          <p>
            [PHOTO]<br><br>

            Kelly del Campo Merricks, CFRE<br>
            Major Gifts Officer<br>
            804.264.6702<br>
            <a href="mailto:&#x4B;&#x65;&#x6C;&#x6C;&#x79;&#x5F;&#x6D;&#x65;&#x72;&#x72;&#x69;&#x63;&#x6B;&#x73;&#x40;&#x77;&#x65;&#x73;&#x63;&#x61;&#x6E;&#x72;&#x69;&#x63;&#x2E;&#x6F;&#x72;&#x67;">Kelly_merricks@wescanric.org</a>
          </p>
          <p>
            [PHOTO]<br><br>
            Virginia S. “Ginny” Purcell, CFRE, Senior Development Officer<br>
            804.264.6202<br>
            <a href="mailto:&#x47;&#x69;&#x6E;&#x6E;&#x79;&#x5F;&#x70;&#x75;&#x72;&#x63;&#x65;&#x6C;&#x6C;&#x40;&#x77;&#x65;&#x73;&#x63;&#x61;&#x6E;&#x72;&#x69;&#x63;&#x2E;&#x6F;&#x72;&#x67;">Ginny_purcell@wescanric.org</a>
          </p>

          <p>  [PHOTO]<br><br>

            Elizabeth R. Vaughan, CFRE<br>
            Annual Fellowship Fund Administrator<br>
            804.264.6204<br>
            <a href="mailto:&#x45;&#x6C;&#x69;&#x7A;&#x61;&#x62;&#x65;&#x74;&#x68;&#x5F;&#x76;&#x61;&#x75;&#x67;&#x68;&#x61;&#x6E;&#x40;&#x77;&#x65;&#x73;&#x63;&#x61;&#x6E;&#x72;&#x69;&#x63;&#x2E;&#x6F;&#x72;&#x67;">Elizabeth_vaughan@wescanric.org</a>
          </p>
            <p>
            [PHOTO]<br><br>

            Karen Henderson<br>
            Development Specialist<br>
            804.264.6208<br>
           <a href="mailto:&#x4B;&#x61;&#x72;&#x65;&#x6E;&#x5F;&#x68;&#x65;&#x6E;&#x64;&#x65;&#x72;&#x73;&#x6F;&#x6E;&#x40;&#x77;&#x65;&#x73;&#x63;&#x61;&#x6E;&#x72;&#x69;&#x63;&#x2E;&#x6F;&#x72;&#x67;">Karen_henderson@wescanric.org</a>
          </p>

           <p> [PHOTO]<br><br>

            Anita E. Adkins<br>
            Fundraising Services Coordinator<br>
            804.264-6066<br>
            <a href="mailto:&#x41;&#x6E;&#x69;&#x74;&#x61;&#x5F;&#x61;&#x64;&#x6B;&#x69;&#x6E;&#x73;&#x40;&#x77;&#x65;&#x73;&#x63;&#x61;&#x6E;&#x72;&#x69;&#x63;&#x2E;&#x6F;&#x72;&#x67;">Anita_adkins@wescanric.org</a>
          </p>
       </div>

      </div>

    </div><!-- .subpageCopy -->
  </div>

  <div style="clear:both;"></div>

  <?php get_sidebar('footerbanner'); ?>
</div>




<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

<div class="post" id="post-<?php the_ID(); ?>">



	<div class="entry">
		<?php //the_content(); ?>
	</div>

</div> <!-- .post -->

<?php endwhile; endif; ?>




<?php get_footer(); ?>