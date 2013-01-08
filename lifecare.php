<?php /* Template Name: Life Care */ get_header(); ?>
  <div class="subpageWrapper">

    <div class="subpagePageTitle row">
      <?php the_title(); ?>
    </div>
    <div class="subpageContentWrapper full row">

          <div class="resPhotoViewer fouroftwelve">
            <img class="full" src="<?php bloginfo('template_directory');?>/images/lifecare_gallery/LC_Overview.jpg" width="363" height="424">
          </div>

          <div class="jsSubContentText sixoftwelve">
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

              <div class="post" id="post-<?php the_ID(); ?>">
                <h2><?php the_title(); ?></h2>
                  <div class="entry">
                      <?php the_content(); ?>
                </div>

              </div> <!-- .post -->

            <?php endwhile; endif; ?>
          </div>

            <div class="jsSubContentFlex twooftwelve omega">
               <ul>
                 <li>Guaranteed access</li>
                 <li>No fee increase as care needs increase</li>
                 <li>Caring staff</li>
                 <li>Westminster Canterbury Fellowship Fund residency guarantee</li>
               </ul>
            </div>

        </div>
  </div>

<?php // get_sidebar('footerbanner2'); ?>
<?php  get_template_part( 'sidebar', 'footerbanner-news-lifestyle' ); ?>


<?php get_footer(); ?>