<?php /* Template Name: Foundation Donate Online */

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
<?php
      $defaults = array(
      'menu'            => 'foundation-submenu',
      'container'       => 'div',
      'container_class' => 'lifestyle-submenu',
      'items_wrap'      => '%3$s',
      'depth'           => 0
      );
      wp_nav_menu( $defaults );
?>

  <div class="subpagePageTitle">
    <?php the_title(); ?>
  </div>

  <div class="subpageNavigation">
    <ul>
      <li id="jsc_1" class="jsubNavItem current">
        <br>Overview
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
          <p>Support the Foundation quickly and easily by making a donation online. Click below to proceed to our online donation center.</p>
          <a href="https://co.clickandpledge.com/?wid=49087" class='btn rounded dark-teal'>Click here to donate online</a>

        </div>
      </div>

      <div class="jsSubContent jsc_2">

        <div class="resPhotoViewer">
          <img src="<?php bloginfo('template_directory');?>/images/foundation_gallery/foundation.jpg" width="363" height="424">
        </div>

        <div class="jsSubContentText single">
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
  <?php get_sidebar('footerbanner'); ?>
</div>



<?php get_footer(); ?>