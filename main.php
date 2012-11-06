<?php /* Template Name: Home Page */

get_header(); ?>

<script type="text/javascript">
  var endflag = false;
  var interval = self.setInterval(function(){
    nextBanner();
  }, 5000);

  jQuery(document).ready(function($){
      // $ is now safe within this function
      //$("li.menu-item-83").addClass("active");

        $(".subMenu #menu-sub-menu li").hover(function(){
          if(endflag==true){
            $("li").removeClass("active");
            $("#homeBanner img").hide();
            $("."+$(this).attr('id')).show();
          }
        },
        function(){})

  })

  function nextBanner(){

    var cur_index = jQuery("#homeBanner img:visible").index()//jQuery("#homeBanner img:visible").attr('class')
      //console.log("current index: "+cur_index);

    var total =  jQuery("#homeBanner img").size();
      //console.log("Total: "+total);

    if(parseFloat(cur_index+1)<total){next_index = parseFloat(cur_index+1);}
    else if(parseFloat(cur_index)==6){
      next_index=0;
      endflag = true;
    }
    //console.log("Next Index: "+next_index);


      //console.log("next: "+next_index);
    if(endflag){
      jQuery("#homeBanner img").hide();
      jQuery("li").removeClass("active");
      jQuery("#homeBanner img:eq(0)").show();
      window.clearInterval(interval);

    }
    else{

      jQuery("#homeBanner  img").fadeOut('slow',function(){
        jQuery("li").removeClass("active");
      });
      jQuery("#homeBanner img:eq("+next_index+")").fadeIn('slow',function(){
        jQuery("#"+jQuery("#homeBanner img:eq("+next_index+")").attr('class')).addClass('active')
      });

    }


  }
</script>

<div id="homeBanner">
      <?php echo do_shortcode('[SlideDeck2 id=1992]'); ?>
</div>

<!-- Closed Loop -->


<IMG SRC="http://ad.adlegend.com/ping?spacedesc=1087894_1061349_1x1_1061349_1061349&amp;db_afcr=123&amp;group=WMC&amp;event=HomepageVT" WIDTH=1 HEIGHT=1 ALT=" ">


<?php get_sidebar('footerbanner'); ?>

<?php get_footer(); ?>