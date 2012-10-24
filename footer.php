  </div> <!-- #contentWrapper -->
  <div class="footerWrapper">
    <div id="footer">
			<div  class="phoneNumber" style="float:left;margin-top:0px;margin-right:10px;border-right:1px solid #000;padding-right:10px">
				<span><a href="/careers">Careers</a></span>
				<strong>804.264.6201</strong>
			</div>
      <?php //wp_nav_menu( array( 'theme_location' => 'footer-menu','container_class'=>'footerMenu' ) ); ?>
       <div class="phoneNumber" style="float:left;margin-top:1px;margin-right:10px;border-right:1px solid #000;padding-right:10px">
         <span><a href="http://www.wcrichmond.org/about-us/child-development-center/">CHILD DEVELOPMENT CENTER</a></span>
          <strong>804.200.1176</strong>
       </div>
      <div class="footerPhones" style="float:left;margin:1px 0px;">
       
        
        <div class="phoneNumber" style="float:right;margin-top:3px;">
          <strong>1.800.445.9904</strong>
        </div>
        <div class="phoneNumber">
														
						<?php
						global $post;
						if(is_page('22')||$post->post_parent=="22"||FALSE){
							// child development center ?>
							<strong>804.200.1176</strong>
							<?php
						}
						elseif(is_page('65')||$post->post_parent=="65"){
							// careers?>
							<span>Human Resources</span>&nbsp;&nbsp;<strong>804.264.6201</strong>
							<?php
						}
						elseif(is_page('24')||$post->post_parent=="24"){
							// volunteer ?>
							<span>Volunteer</span>&nbsp;&nbsp;<strong>804.264.6258</strong>
							<?php
						}
						elseif(is_page('13')){
							// foundation ?>
							<span>Foundation</span>&nbsp;&nbsp;<strong>804.264.6066</strong>
							<?php
						}
						elseif(is_page('61')||is_page('63')||is_page('372')||is_page('385')){
							// foundation children?>
							<span>Foundation</span>&nbsp;&nbsp;<strong>804.264.6066</strong>
							<?php
						}
						else{
							// everything else?>
							<span><a href="/contact-us" style="text-decoration:none;">SALES</a></span>&nbsp;&nbsp;<strong> 804.264.6256</strong>
							<?php
						}
					?>          
        </div>
      </div>
      <div style="clear:both;"></div>
    </div><!-- #footer -->

  </div> <!-- .footerWrapper -->
  
    <div class="footerCopy">
      <div class="footerLogos">
        <?php if($_SERVER['REMOTE_ADDR']=="24.125.92.63") : ?>
        <div style="margin:0px 0px 0px 15px;float:right;">
            <a target="_BLANK" title="Westminster Canterbury Management Corporation and Subsidiaries BBB Business Review" href="http://www.bbb.org/richmond/business-reviews/retirement-and-life-care-communities-and-homes/westminster-canterbury-management-corporation-and-subsidiaries-in-richmond-va-16000246/#bbbonlineclick">
              <img src="http://ourbbbonline2.bbb.org/Richmond/BBBOnlineSeal/16000246/H2/1/seal.png" alt="Westminster Canterbury Management Corporation and Subsidiaries BBB Business Review" >
            </a>
        </div>
        <style type="text/css" media="screen">
          .copyText{
            float:none;
            width:auto;
          }
          .footerLogos{
            margin-right:25px;
          }
        </style>
        <?php endif; ?>
        
        <img src="<?php bloginfo('template_directory');?>/images/flogo1.png">
        <img src="<?php bloginfo('template_directory');?>/images/eho_logo.png">
        
      </div>
      <div class="copyText">
       
          Westminster Canterbury does not discriminate because of race, color, religion, sex, disability or national origin. As a retirement community, Westminster Canterbury limits residency to persons 62 years of age or older.
       
        <p>
          All material copyrighted <?php echo date('Y'); ?> Westminster Canterbury Richmond. All rights reserved.
        </p>
        <p>
          Website produced by J H I. &nbsp;&nbsp;&nbsp;-&nbsp; <a href="<?php bloginfo('home');?>/sitemap/">Sitemap</a> &nbsp;&nbsp; <a href="<?php bloginfo('home');?>/phpages/wp-login.php">Admin</a>
        </p>
      </div>
    </div>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-19712499-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<script type="text/javascript"> 
document.write(unescape("%3Cscript src='" + (location.protocol=="https:" ? "https://" : "http://") + "cn.clickable.net/js/cct.js' type='text/javascript'%3E%3C/script%3E")); 
</script> 
<script type="text/javascript"> 
document.cookie=cct.CookieCheck(document.cookie); 
cct.cct_log('0820-AP9aDgFe7V1i0e6w888E4EEA98E5C444C90689FF'); 
</script>

<?php wp_footer(); ?>

</body>
</html>