<?php get_header(); ?>

  <div class="blogHeading">
      <a href="<?php bloginfo('home');?>/news/">
        <img src="<?php bloginfo('template_directory');?>/images/news_events.png">
      </a>
  </div>

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

<?php get_footer(); ?>