<?php get_header(); ?>

<div class="pageContentWrap">
  
  <div class="pageColumn">
      
      <div class="post">

  			<h2>Page Not Found</h2>

  			<p>Looks like the page you're looking for isn't here anymore. Try browsing the <a href="">categories</a>, <a href="">archives</a>, or using the search box below.</p>

  			<?php include(TEMPLATEPATH.'/searchform.php'); ?>

  		</div> <!-- .post -->

  </div>
  
  <div class="pageSidebar">
    <?php get_sidebar('page'); ?>
  </div>
  <div style="clear:both"></div>
</div>


<?php get_footer(); ?>

		