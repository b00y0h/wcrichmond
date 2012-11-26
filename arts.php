<?php /* Template Name: Arts */

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
    'menu'            => 'lifestyle-submenu',
    'container'       => 'div',
    'container_class' => 'lifestyle-submenu',
    'items_wrap'      => '%3$s',
    'depth'           => 0
);
?>

<?php wp_nav_menu( $defaults ) ?>


  <div class="subpagePageTitle">
    <?php the_title(); ?>
  </div>
  <div style="clear:both;"></div>

  <div class="subpageNavigation">
    <ul>
      <li id="jsc_1" class="jsubNavItem current">
        Sara Belle<br>November Theater
      </li>
      <li id="jsc_2" class="jsubNavItem">
        H. Scott<br>November Gallery
      </li>
      <li id="jsc_3" class="jsubNavItem">
        Lettie Pate<br>Whitehead Evans Room
      </li>
      <li id="jsc_4" class="jsubNavItem">
        McGue-Millhiser<br>Art Studio
      </li>
      <li id="jsc_5" class="jsubNavItem">
         Woodworking<br>Shop
      </li>
      <li id="jsc_6" class="jsubNavItem">
        <br>
        Library
      </li>


    </ul>
  </div>

  <div class="subpageContentWrapper">
    <div class="subpageCopy">
      <div class="jsSubContent jsc_1 current_sub_content">

        <div class="jsSubPhotoViewer">
          <img src="<?php bloginfo('template_directory');?>/images/arts_gallery/LS_Arts_Theater.jpg" width="363" height="424">
        </div>

        <div class="jsSubContentFlex">
          Featuring:
           <ul>
             <li>Musicals</li>
             <li>Classical music concerts</li>
             <li>Choral concerts</li>
             <li>Plays</li>
             <li>Other performances</li>
             <li>Lectures</li>
           </ul>
        </div>

        <div class="jsSubContentText">
          <h3 class="jsSubContentTitle">Sara Belle November Theater</h3>
          <p>
            Located in our Cultural and Creative Arts Center, the Sara Belle November Theater stages events year round for our residents. Comfortable seating for 335, including wheelchair areas, makes music, dramas and other entertainment delightful for all. There is no charge for most programs; however, all events require tickets through the Low-November Box Office.
          </p>
        </div>
      </div>

      <div class="jsSubContent jsc_2">
        <div class="jsSubPhotoViewer">
          <div class="jsSubPhotoNav"  style="margin-top:360px;">
              <div id="jsubphoto_1" class="jsSubPhotoThumb current_photo_thumb">
                <img src="<?php bloginfo('template_directory');?>/images/arts_gallery/Thumbs/HScottNovemberGallery_th.jpg">
              </div>
              <div id="jsubphoto_2" class="jsSubPhotoThumb">
                 <img src="<?php bloginfo('template_directory');?>/images/arts_gallery/Thumbs/HScottNovemberGallery2_th.jpg">
              </div>
          </div>
          <img class="jsubphoto_1 jsSubPhoto current_photo" src="<?php bloginfo('template_directory');?>/images/arts_gallery/HScottNovemberGallery.jpg" width="363" height="424">
          <img class="jsubphoto_2 jsSubPhoto" src="<?php bloginfo('template_directory');?>/images/arts_gallery/HScottNovemberGallery2.jpg" width="363" height="424">


        </div>

        <div class="jsSubContentFlex">
          Featuring:
           <ul>
              <li>Oil paintings </li>
              <li>Acrylic paintings </li>
              <li>Watercolor paintings </li>
              <li>Photography</li>
              <li>Pastels</li>
              <li>Prints </li>
              <li>Sculpture </li>
              <li>Furniture </li>
              <li>Mixed-media works</li>
           </ul>
        </div>

        <div class="jsSubContentText">
          <h3 class="jsSubContentTitle">H. Scott November Gallery</h3>
          <p>
           Located in the Cultural and Creative Arts Center, the H. Scott November Gallery features quarterly exhibitions of original art by established and emerging Virginia artists. Paintings, sculpture and other works are selected by an experienced professional curator familiar with the local art community.
         </p>
       </div>

      </div>

      <div class="jsSubContent jsc_3">
        <div class="jsSubPhotoViewer">
          <img src="<?php bloginfo('template_directory');?>/images/arts_gallery/LS_Arts_WhiteheadRm.jpg" width="363" height="424">
        </div>

        <div class="jsSubContentFlex">
          Featuring:
           <ul>
              <li>Antique furniture</li>
              <li>Library</li>
              <li>Writing desk</li>
              <li>Upholstered sitting</li>
           </ul>
        </div>

        <div class="jsSubContentText">
          <h3 class="jsSubContentTitle">Lettie Pate Whitehead Evans Room</h3>
          <p>
          On Foundation Hall in the Cultural and Creative Arts Center is the Lettie Pate Whitehead Evans Room, a quiet and sumptuously furnished sitting room for reading, relaxing and meetings. Available to residents for family and other private functions.
          </p>
        </div>

      </div>

      <div class="jsSubContent jsc_4">
        <div class="jsSubPhotoViewer">
          <img src="<?php bloginfo('template_directory');?>/images/arts_gallery/McGueMillhiserArtStudio.jpg" width="363" height="424">
        </div>



        <div class="jsSubContentText single">
          <h3 class="jsSubContentTitle">McGue-Millhiser Arts Studio</h3>
          <p>
            The McGue-Millhiser Arts Studio has whatever the artist in you needs to answer your inner muse, from handlooms and artist easels to a wheelchair accessible kiln, plus room to work and plenty of natural light for inspiration. Popular classes include drawing, flower arranging, jewelry making, painting, printmaking, weaving and working in clay.
          </p>
        </div>

      </div>

      <div class="jsSubContent jsc_5">
        <div class="jsSubPhotoViewer">
          <img src="<?php bloginfo('template_directory');?>/images/arts_gallery/WoodworkingShop.jpg" width="363" height="424">
        </div>

        <div class="jsSubContentFlex">
          Featuring:
             <ul>
               <li>Table saw</li>
               <li>Band saw</li>
               <li>Scroll saw</li>
               <li>Lathe</li>
               <li>Joiner</li>
               <li>Drill press</li>
               <li>A wide variety of other tools</li>
             </ul>
        </div>

        <div class="jsSubContentText">
           <h3 class="jsSubContentTitle">Woodworking Shop</h3>
           <p>Our Woodworking Shop in the Cultural and Creative Arts Center has virtually all the hand and power tools for whatever project you may have in mind, with plenty of room for your neighbors’ projects, too. Weekly visits by a skilled instructor provide training and help as required. </p>
        </div>

      </div>

      <div class="jsSubContent jsc_6">
        <div class="jsSubPhotoViewer">
          <img src="<?php bloginfo('template_directory');?>/images/arts_gallery/LS_Arts_Library.jpg" width="363" height="424">
        </div>


        <div class="jsSubContentText single">
           <h3 class="jsSubContentTitle">Library</h3>
           <p>Conveniently located in The Tower, the Westminster Canterbury Library has a constantly growing collection of more than 5000 volumes, from popular classics to the latest best-sellers: in most genres of fiction and on a wide variety of non-fiction subjects. The library remains open at all hours. </p>
        </div>

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