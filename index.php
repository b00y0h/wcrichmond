<?php get_header(); ?>

      <h1 class="blogHeading"><a href="<?php bloginfo('home');?>/news/">
        Around the Community
      </a></h1>


            <!--BEGIN #primary .hfeed-->
            <div id="primary" class="hfeed">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <!--BEGIN .hentry -->
                <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">

                    <?php
                    $format = get_post_format();
                    get_template_part( 'content', $format );
                    ?>

                <!--END .hentry-->
                </div>

                <?php endwhile; ?>

                <!--BEGIN .navigation .page-navigation -->
                <div class="navigation page-navigation">
                    <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } else { ?>
                    <div class="nav-next"><?php next_posts_link(__('&larr; Older Entries', 'wcrichmond')) ?></div>
                    <div class="nav-previous"><?php previous_posts_link(__('Newer Entries &rarr;', 'wcrichmond')) ?></div>
                    <?php } ?>
                <!--END .navigation .page-navigation -->
                </div>

            <?php else : ?>

                <!--BEGIN #post-0-->
                <div id="post-0" <?php post_class(); ?>>

                    <h2 class="entry-title"><?php _e('Error 404 - Not Found', 'wcrichmond') ?></h2>

                    <!--BEGIN .entry-content-->
                    <div class="entry-content">
                        <p><?php _e("Sorry, but you are looking for something that isn't here.", "wcrichmond") ?></p>
                    <!--END .entry-content-->
                    </div>

                <!--END #post-0-->
                </div>

            <?php endif; ?>
            <!--END #primary .hfeed-->
            </div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>







  <div class="blogContentWrap">

  <div class="blogColumn">

		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

		<div class="post" id="post<?php the_ID(); ?>">

		   <div class="postShare">
             <div class="fb-like" data-href="<?php the_permalink(); ?>" data-send="false" data-layout="button_count" data-width="50" data-show-faces="false"></div>

             <!-- AddThis Button BEGIN -->
             <div class="addthis_toolbox addthis_default_style ">
                 <a href="http://www.addthis.com/bookmark.php?v=250&amp;pubid=xa-4e6fd8e92d1b1216" class="addthis_button_compact" addthis:url="<?php the_permalink(); ?>">Share</a>
             </div>
             <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-4e6fd8e92d1b1216"></script>
             <!-- AddThis Button END -->
           </div>

			<h2 class="blogEntryTitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

			<div class="datestamp">
		    <?php the_date(); ?>
		  </div>
			<div class="blogDate"></div>

			<div class="blog entry">
				<?php the_content(""); ?>
			</div>

			<div class="blogMeta">
			  <div class="postTags">
			    <?php the_tags(); ?>
			  </div>
			  <div class="postReadMore">
			    <a href="<?php the_permalink(); ?>">READ MORE ></a>
			  </div>
			</div>

		</div> <!-- .post -->

		<?php endwhile; else : ?>

		<div class="post">

			<h2>Page Not Found</h2>

			<p>Looks like the page you're looking for isn't here anymore. Try browsing the <a href="">categories</a>, <a href="">archives</a>, or using the search box below.</p>

			<?php include(TEMPLATEPATH.'/searchform.php'); ?>

		</div> <!-- .post -->

		<?php endif; ?>

		<div class="navigation clear">
			<div class="left"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="right"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

	</div>
	<div class="blogSidebar">
    <?php get_sidebar('blog'); ?>
  </div>
</div>