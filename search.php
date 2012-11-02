<?php get_header(); ?>
<div class="blogContentWrap">

<div class="blogColumn"><br><br>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="post" id="post-<?php the_ID(); ?>" style="width:600px;">
      <div style="padding:5px 0px;"><a class="blogSnippetLink" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
       <div style="font-size:12px;padding-bottom:5px;font-family: 'Century Gothic', Trebuchet, Helvetica, Arial, sans-serif;"><?php the_date();?></div>

  	<div class="entrytext">
  	  <?php the_excerpt(); ?>
  	  <?php the_date(); ?>

  	</div>
  	<div class="newsReadMore" style="font-family: 'Century Gothic', Trebuchet, Helvetica, Arial, sans-serif;font-size:12px">
      <a href="<?php bloginfo('home');?>/news/">READ MORE ></a>
    </div>
    </div>
  <?php endwhile; else: ?>

	<div class="post">

		<h2>No Results</h2>

		<p>Sorry, but it looks like we dont have any pages matching that search. Please try something else.</p>

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
<div style="clear:both"></div>
</div>

<?php get_footer(); ?>
