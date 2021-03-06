<?php /* Template Name: Health Center */ get_header(); ?>
<script>
  jQuery(document).ready(function($){
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
  <?php $defaults = array(
    'menu'            => 'lifecare-submenu',
    'container'       => 'div',
    'container_class' => 'lifestyle-submenu',
    'items_wrap'      => '%3$s',
    'depth'           => 0
);
?>

<?php wp_nav_menu( $defaults ) ?>

    <div class="subpagePageTitle">
      Mary Morton Parsons Health Center
    </div>

    <div class="subpageContentWrapper full row">
      <div class="subpageCopy">
        <div class="jsSubContent jsc_1 current_sub_content single">




          <div class="resPhotoViewer fiveoftwelve">
            <div class="jsSubPhotoNav">
                <div id="jsubphoto_1" class="jsSubPhotoThumb current_photo_thumb">
                  <img src="<?php bloginfo('template_directory');?>/images/lifecare_gallery/Thumbs/_MG_3120_th.jpg">
                </div>
                <div id="jsubphoto_2" class="jsSubPhotoThumb">
                  <img src="<?php bloginfo('template_directory');?>/images/lifecare_gallery/Thumbs/_MG_3093_th.jpg">
                </div>
                <div id="jsubphoto_3" class="jsSubPhotoThumb">
                   <img src="<?php bloginfo('template_directory');?>/images/lifecare_gallery/Thumbs/_MG_3104_th.jpg">
                </div>
            </div>
            <img  class="jsubphoto_1 jsSubPhoto current_photo" src="<?php bloginfo('template_directory');?>/images/lifecare_gallery/LC_MMP1.jpg" width="363" height="424">
            <img  class="jsubphoto_2 jsSubPhoto" src="<?php bloginfo('template_directory');?>/images/lifecare_gallery/LC_MMP2.jpg" width="363" height="424">
            <img  class="jsubphoto_3 jsSubPhoto" src="<?php bloginfo('template_directory');?>/images/lifecare_gallery/LC_MMP3.jpg" width="363" height="424">
          </div>

          <div class="jsSubContentText fouroftwelve">
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

              <div class="post" id="post-<?php the_ID(); ?>">
                  <div class="entry">
                      <?php the_content(); ?>
                </div>

              </div> <!-- .post -->

            <?php endwhile; endif; ?>
          </div>
        <div class="jsSubContentFlex threeoftwelve omega">
           <ul>
             <li>Team philosophy integrates physical, speech and occupational therapies</li>
             <li>24/7 access to RNs, LPNs, certified nursing assistants and our physician medical director</li>
             <li>Record low turnover means staff have a comforting familiarity</li>
             <li>Indoor pool and whirlpool plus outdoor gardens and courtyards for recreation</li>
             <li>Access to Cultural and Creative Arts Center programs</li>
           </ul>
        </div>

        </div>

      </div><!-- .subpageCopy -->
    </div>

  </div>





<?php  get_template_part( 'sidebar', 'footerbanner-news-lifestyle' ); ?>

<?php get_footer(); ?>