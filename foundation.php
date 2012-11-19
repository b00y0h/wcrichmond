<?php /* Template Name: Foundation */

get_header(); ?>

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

<style type="text/css" media="screen">
  .subpageWrapper{
    background:url(<?php bloginfo('template_directory');?>/images/foundation_bg.png) no-repeat;
  }
  .resPhotoViewer{
    float:left;
  }
  .subpageWrapper{
    height:480px;
  }
  .jsSubContentText{

  }
</style>

<div class="subpageWrapper">

  <div class="subpagePageTitle">
    <?php the_title(); ?>
  </div>
  <div style="clear:both;"></div>

  <div class="subpageNavigation">
    <ul>
      <li id="jsc_1" class="jsubNavItem current">
        <br>Overview
      </li>
      <li id="jsc_2" class="jsubNavItem">
        Board of<br>Trustees
      </li>
      <li id="jsc_3" class="jsubNavItem">
        Foundation<br>Staff
      </li>
    </ul>
  </div>

  <div class="subpageContentWrapper">
    <div class="subpageCopy">
      <div class="jsSubContent jsc_1 current_sub_content">

        <div class="resPhotoViewer">
          <img src="<?php bloginfo('template_directory');?>/images/foundation_gallery/foundation.jpg" width="363" height="424">
        </div>

        <div class="jsSubContentText single">
          <h3 class="jsSubContentTitle">Overview</h3>
          <p>Since 1980, Westminster Canterbury Foundation has had a single focus: <strong>improving the lives of those we serve every day.</strong> Even before Westminster Canterbury Richmond opened its doors 1975, our founders began raising Fellowship assistance - charitable funds to assist older adults with significant financial need to become and remain residents. As our community and its needs grew, our support grew right along with it, thanks to successful fundraising and the generosity of donors.</p>

         <p> Our <a href="/foundation/programs/#fellowship">Annual Fellowship</a> Fund, our only annual appeal, is solely to provide Fellowship grants.</p>

         <p> Special projects fundraising has helped make possible enhanced <a href="http://www.wcrichmond.org/foundation/programs/#health-services">health services</a>, <a href="http://www.wcrichmond.org/foundation/programs/#wellness">wellness</a> and <a href="http://www.wcrichmond.org/foundation/programs/#child-development">Child Development Center</a> programming, <a href="http://www.wcrichmond.org/foundation/programs/#pastoral-care">pastoral care</a>, <a href="http://www.wcrichmond.org/foundation/programs/#memory-support">memory support therapy</a>, <a href="http://www.wcrichmond.org/foundation/programs/#performing-arts">performing</a> and <a href="http://www.wcrichmond.org/foundation/programs/#studio-arts">studio arts</a>, and <a href="http://www.wcrichmond.org/foundation/programs/#employee-education">employee education</a> assistance.</p>

          <p>Current and planned <a href="/foundation/ways-to-give/">charitable gifts</a> from donors, for restricted and unrestricted purposes, make a meaningful difference in the quality of life and care at Westminster Canterbury Richmond.</p>

					<p>For more information, please call <br>804-264-6066.</p>

        </div>
      </div>

      <div class="jsSubContent jsc_2">

        <div class="resPhotoViewer">
          <img src="<?php bloginfo('template_directory');?>/images/foundation_gallery/foundation.jpg" width="363" height="424">
        </div>

        <div class="jsSubContentText single" style="width:400px;">
          <h3 class="jsSubContentTitle">Westminster Canterbury Foundation Board of Trustees</h3>

          <style type="text/css" media="screen">
            .boardMembers{
              font-size:14px;
            }
            .boardMembers strong{
              font-size:16px;
            }
          </style>

          <div class="boardMembers">
            <p><strong>David D. Addison, Esq.</strong><br>
            Attorney, Williams Mullen</p>

            <p><strong>C. Jordan Ball, Jr.</strong><br>
            Retired Senior Vice President, Scott & Stringfellow</p>

            <p><strong>John W. Bates III</strong><br>
            Retired, McGuire Woods LLP</p>

            <p><strong>William C. Boinest</strong><br>
            Retired Chairman and CEO, Craigie Incorporated</p>

            <p><strong>Ronald A. Cain, Jr.</strong><br>
            Managing Director-Investments, Wells Fargo Advisors, LLC</p>

            <p><strong>G. Brooke Doggett</strong><br>
            Retired Part Owner and President, Triad Packaging Company, Inc. </p>

            <p><strong>A. Cabell Ford, Jr.</strong><br>
            Retired President and COO, Solite Corporation, Aggregate Division</p>

            <p><strong>May H. Fox</strong><br>
            Director of Government Relations, Eckert Seamans</p>

            <p><strong>L.H. Ginn III</strong><br>
            Manager, Ginn & Ginn, LLC</p>

            <p><strong>Anne H. Hardage</strong><br>
            Crispin Properties, LLC</p>

            <p><strong>Tyler R. Harris</strong><br>
            Senior Vice President, Middleburg Trust Company</p>

            <p><strong>Nancy M. Harrison</strong><br>
            Senior Vice President, Wells Fargo Bank</p>

            <p><strong>Franklin B. Heiner</strong><br>
            First Vice President Investment Advisor, Scott & Stringfellow</p>

            <p><strong>Mary P. Hutter</strong><br>
            Community Volunteer</p>

            <p><strong>Elizabeth Cabell Jennings</strong><br>
            Portfolio Manager, Director of High Net Worth and Regional Institutional, Thompson, Siegel & Walmsley</p>

            <p><strong>Gregory T. Lane</strong><br>
            Senior Vice President, Union First Market Bank</p>

            <p><strong>Suzanne J. McCusty</strong><br>
            Vice President, Treasury Products Manager, Xenith Bank</p>

            <p><strong>J. Gordon Rawles, Jr., M.D.</strong><br>
            OrthoVirginia</p>

            <p><strong>Dr. Cora S. Salzberg</strong><br>
            Retired Coordinator, State Council of Higher Education of Virginia</p>

            <p><strong>Frank Talbott IV</strong><br>
            Managing Director, Raymond James Morgan Keegan</p>

            <p><strong>Wilson R. Trice, Ex Officio</strong><br>
            Attorney, ThompsonMcMullen, P.C.</p>

            <p><strong>Lilo Simmons Ukrop</strong><br>
            Managing Partner, Corrugated Partners, LLC</p>

            <p><strong>Elizabeth M. Waring</strong><br>
            Retired Director, Mathematics and Science Center</p>

            <p><strong>James S. Watkinson</strong><br>
            Retired Chairman and CEO, Morton G. Thalhimer, Inc.</p>

            <p><strong>Michael D. Williams</strong><br>
            Director of Wealth Management, StellarOne Bank</p>
          </div>
        </div>
      </div>

      <div class="jsSubContent jsc_3">
        <div class="resPhotoViewer">
          <img src="<?php bloginfo('template_directory');?>/images/foundation_gallery/foundation.jpg" width="363" height="424">
        </div>


        <div class="jsSubContentText single">
          <h3 class="jsSubContentTitle">Westminster Canterbury Foundation Staff</h3>
          <p>
            Kelly del Campo Merricks, CFRE<br>
             Director Resource Development<br>
            804.264.6702<br>
            <a href="mailto:&#x4B;&#x4D;&#x65;&#x72;&#x72;&#x69;&#x63;&#x6B;&#x73;&#x40;&#x77;&#x63;&#x72;&#x69;&#x63;&#x68;&#x6D;&#x6F;&#x6E;&#x64;&#x2E;&#x6F;&#x72;&#x67;">KMerricks@wcrichmond.org</a>
          </p>
          <p>
            Virginia S. “Ginny” Purcell, CFRE<br>
            Senior Development Officer<br>
            804.264.6202<br>
            <a href="mailto:&#x47;&#x50;&#x75;&#x72;&#x63;&#x65;&#x6C;&#x6C;&#x40;&#x77;&#x63;&#x72;&#x69;&#x63;&#x68;&#x6D;&#x6F;&#x6E;&#x64;&#x2E;&#x6F;&#x72;&#x67;">GPurcell@wcrichmond.org</a>
          </p>

          <p>
            Elizabeth R. Vaughan, CFRE<br>
            Annual Fellowship Fund Administrator<br>
            804.264.6204<br>
            <a href="mailto:&#x45;&#x56;&#x61;&#x75;&#x67;&#x68;&#x61;&#x6E;&#x40;&#x77;&#x63;&#x72;&#x69;&#x63;&#x68;&#x6D;&#x6F;&#x6E;&#x64;&#x2E;&#x6F;&#x72;&#x67;">EVaughan@wcrichmond.org</a>
          </p>
            <p>
             Karen Henderson<br>
            Development Specialist<br>
            804.264.6208<br>
           <a href="mailto:&#x4B;&#x48;&#x65;&#x6E;&#x64;&#x65;&#x72;&#x73;&#x6F;&#x6E;&#x40;&#x77;&#x63;&#x72;&#x69;&#x63;&#x68;&#x6D;&#x6F;&#x6E;&#x64;&#x2E;&#x6F;&#x72;&#x67;">KHenderson@wcrichmond.org</a>
          </p>

           <p>
             Anita E. Adkins<br>
            Fundraising Services Coordinator<br>
            804.264.6066<br>
            <a href="mailto:&#x41;&#x41;&#x64;&#x6B;&#x69;&#x6E;&#x73;&#x40;&#x77;&#x63;&#x72;&#x69;&#x63;&#x68;&#x6D;&#x6F;&#x6E;&#x64;&#x2E;&#x6F;&#x72;&#x67;">AAdkins@wcrichmond.org</a>
          </p>
       </div>

      </div>


    </div>
    </div><!-- .subpageCopy -->
  </div>

  <div style="clear:both;"></div>
  <?php get_sidebar('footerbanner'); ?>
</div>



<?php get_footer(); ?>