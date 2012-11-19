<?php /* Template Name: Foundation-waystogive */

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
    height:520px;
  }
  .jsSubContentText{
    height:410px;
  }

	@-moz-document url-prefix() {
	    .jsubNavItem{
				height:32px;
				padding-top:5px;
				line-height:17px;
			}
			.footerNewsBlock{
				height:115px;
			}
	}
</style>

<div class="subpageWrapper waysToGiveWrapper">

  <div class="subpagePageTitle">
    <?php the_title(); ?>
  </div>
  <div style="clear:both;"></div>

  <div class="subpageNavigation">
    <ul>
      <li id="jsc_1" class="jsubNavItem current">
        <br>Overview
      </li>
      <li class="">
        <a href="/foundation/donate-online/">Donate<br>Online</a>
      </li>
      <li id="jsc_2" class="jsubNavItem">
        Send A<br>Check
      </li>
      <li id="jsc_3" class="jsubNavItem">
        Transfer Stock<br>or Securities
      </li>
      <li id="jsc_4" class="jsubNavItem">
        Transfer from<br>an IRA
      </li>
      <li id="jsc_5" class="jsubNavItem">
        Corporate<br>Matching
      </li>
      <li id="jsc_6" class="jsubNavItem">
        Payroll<br>Deduction
      </li>
      <li id="jsc_7" class="jsubNavItem">
        Planned<br>Giving
      </li>
    </ul>
  </div>

  <div class="subpageContentWrapper">
    <div class="subpageCopy">
      <div class="jsSubContent jsc_1 current_sub_content">

        <div class="resPhotoViewer">
          <img src="<?php bloginfo('template_directory');?>/images/foundation_gallery/waystogive/1_Overview.jpg" width="363" height="424">
        </div>

        <div class="jsSubContentText single">
          <h3 class="jsSubContentTitle">Overview</h3>
          <p>Your tax-deductible gift to Westminster Canterbury Foundation will make a difference in a variety of ways. Gifts to our Annual Fellowship Fund ensure that residents in need receive financial assistance to live at Westminster Canterbury Richmond and receive medical-related help.</p>

          <p>Foundation support also helps provide health services, memory support therapies, continuing education for employees, Child Development Center programming, studio arts classes and workshops, performing arts programming and more.</p>

          <p>The Annual Fellowship Fund runs January 1 – December 31. Other projects may be supported on a multi-year basis, if desired. To make a new pledge, email to Westminster Canterbury Foundation your name, the amount of your gift, and the project area you wish to support. If your gift is unrestricted, the Foundation Board will use its discretion on where to apply the monies. We are grateful for all of our donors’ support.</p>

					<p>For more information, please call <br>804-264-6066.</p>

        </div>
      </div>

      <div class="jsSubContent jsc_2">
        <div class="resPhotoViewer">
          <img src="<?php bloginfo('template_directory');?>/images/foundation_gallery/waystogive/3_SendACheck.jpg" width="363" height="424">
        </div>

        <div class="jsSubContentText single">

           <h3 class="jsSubContentTitle">By Check</h3>

           <p>Make your check out to “Westminster Canterbury Foundation” and on the memo line specify how you wish your gift to be used. For example: Annual Fellowship Fund, Health Services, Performing Arts, Child Development Center, Studio Arts, Memory Support, Continuing Education, Unrestricted, etc.. Unrestricted gifts enable the Foundation Board to direct your support towards the most pressing needs, but of course all gifts, restricted or unrestricted, are equally appreciated.</p>

           <p>Mail your check to:</p>

           <p>Westminster Canterbury Foundation <br>
           1600 Westbrook Avenue <br>
           Richmond, Virginia 23227</p>

					 <p>For more information, please call <br>804-264-6066.</p>

       </div>

      </div>

      <div class="jsSubContent jsc_3">
        <div class="resPhotoViewer">
          <img src="<?php bloginfo('template_directory');?>/images/foundation_gallery/waystogive/4_TransferStock.jpg" width="363" height="424">
        </div>

        <div class="jsSubContentText single">
          <h3 class="jsSubContentTitle">By Transferring Stock or Other Securities</h3>

          <p>Making a tax-advantaged gift by donating stock is easy and quick. Donors transferring stock  pay no capital gains tax or brokers’ sales commission.  The amount of the deduction is based on the stock’s fair market value on the date the shares transfer to Westminster Canterbury Foundation. The average of the high and low prices on that day determines fair market value.</p>

         <p> Simply email <a href="mailto:khenderson@wcrichmond.org">Karen Henderson</a> or call her at 804-264-6208, or ask your financial advisor or securities broker to contact her on your behalf.</p>
       </div>

      </div>

      <div class="jsSubContent jsc_4">
        <div class="resPhotoViewer">
          <img src="<?php bloginfo('template_directory');?>/images/foundation_gallery/waystogive/5_TransferIRA.jpg" width="363" height="424">
        </div>

        <div class="jsSubContentText single">
          <h3 class="jsSubContentTitle">By Transfer from an IRA</h3>

          <p>Depending upon federal legislation within a given year, it may be possible to make a direct transfer to Westminster Canterbury Foundation from your IRA. For more information about this possibility, email or call one of our Certified Fund Raising Executives: <a href="mailto:&#x4B;&#x65;&#x6C;&#x6C;&#x79;&#x5F;&#x6D;&#x65;&#x72;&#x72;&#x69;&#x63;&#x6B;&#x73;&#x40;&#x77;&#x65;&#x73;&#x63;&#x61;&#x6E;&#x72;&#x69;&#x63;&#x2E;&#x6F;&#x72;&#x67;">Kelly del Campo Merricks</a> (804-264-6702) or <a href="mailto:&#x47;&#x69;&#x6E;&#x6E;&#x79;&#x5F;&#x70;&#x75;&#x72;&#x63;&#x65;&#x6C;&#x6C;&#x40;&#x77;&#x65;&#x73;&#x63;&#x61;&#x6E;&#x72;&#x69;&#x63;&#x2E;&#x6F;&#x72;&#x67;">Ginny Purcell</a> (804-264-6202).</p>


       </div>

      </div>

      <div class="jsSubContent jsc_5">
        <div class="resPhotoViewer">
          <img src="<?php bloginfo('template_directory');?>/images/foundation_gallery/waystogive/6_CorporateMatching.jpg" width="363" height="424">
        </div>

        <div class="jsSubContentText single">
          <h3 class="jsSubContentTitle">By Corporate Matching</h3>

          <p>If you work, or are retired from, a company that offers corporate matching, you can double or even triple your gift to Westminster Canterbury Foundation. Call your Human Resource Department to inquire. If your company matches gifts, sign and mail the matching-gift form to this address.</p>

          <p>Westminster Canterbury Foundation <br>
          1600 Westbrook Avenue <br>
          Richmond, Virginia 23227</p>

					<p>For more information, please call <br>804-264-6066.</p>

       </div>

      </div>

      <div class="jsSubContent jsc_6">
        <div class="resPhotoViewer">
          <img src="<?php bloginfo('template_directory');?>/images/foundation_gallery/waystogive/7_PayrollDeduction.jpg" width="363" height="424">
        </div>

        <div class="jsSubContentText single">
          <h3 class="jsSubContentTitle">By Payroll Deduction</h3>

          <p>Westminster Canterbury Richmond employees can make gifts through payroll deduction. The form is available on the Westminster Canterbury intranet.</p>

					<p>For more information, please call <br>804-264-6066.</p>

       </div>

      </div>

      <div class="jsSubContent jsc_7">
        <div class="resPhotoViewer">
          <img src="<?php bloginfo('template_directory');?>/images/foundation_gallery/waystogive/8_PlannedGiving.jpg" width="363" height="424">
        </div>

        <div class="jsSubContentText single">
          <h3 class="jsSubContentTitle">As a Planned Gift</h3>
          <p>You can make a planned gift to Westminster Canterbury Foundation that benefits you, your spouse, your estate, or any combination of these. Planned gifts can be in the form of cash, stock, insurance or real estate. Many offer life income and a charitable income-tax deduction. Others reduce or eliminate probate, capital gain or federal estate taxes. Learn more about planned giving and how it can help you achieve your philanthropic and personal goals.</p>
					<p>For more information, please call <br>804-264-6066 or <a href="<?php bloginfo('home');?>/foundation/planned-giving/">click here</a>.</p>
       </div>

      </div>

    </div><!-- .subpageCopy -->
  </div>

  <div style="clear:both;"></div>
</div>
<?php get_sidebar('footerbanner'); ?>

<?php get_footer(); ?>