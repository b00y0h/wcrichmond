<?php get_header(); ?>
<script type="text/javascript" charset="utf-8">
  jQuery(document).ready(function($){
      // $ is now safe within this function
      setTimeout(function(){
        side_h = $(".blogSidebar").height();
        col_h = $(".blogColumn").height();
        console.log("side: "+side_h+" col: "+col_h);
        if(parseFloat(col_h-80)<side_h){
          console.log(parseFloat(side_h+80));
          $(".blogColumn").css('height',parseFloat(side_h+80)+"px");
        }
      }, 350);
      
      
  })
</script>
<div class="blogHeading">
  <div style="float:left;margin:0px 5px 10px 30px;">
    <a href="<?php bloginfo('home');?>/news/">
      <img src="<?php bloginfo('template_directory');?>/images/news_events.png">
    </a>
  </div>
  <div style="float:right;border-bottom:1px solid #999999;height:30px;width:680px;">&nbsp;</div>
  <div style="clear:both;"></div>
</div>

<div class="blogContentWrap">
  
<div class="blogColumn" style="min-height:400px">

	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

	<div class="post" id="post<?php the_ID(); ?>">
	  
      <div class="postShare">
         <div style="float:left;width:70px">
           <div id="fb-root"></div>
           <script>(function(d){
             var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
             js = d.createElement('script'); js.id = id; js.async = true;
             js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
             d.getElementsByTagName('head')[0].appendChild(js);
           }(document));</script>
           <div class="fb-like" data-href="<?php the_permalink(); ?>" data-send="false" data-layout="button_count" data-width="50" data-show-faces="false"></div>
         </div>
         
         <div style="float:right;margin-top:2px"> 
           <!-- AddThis Button BEGIN -->
           <div class="addthis_toolbox addthis_default_style ">
           <a href="http://www.addthis.com/bookmark.php?v=250&amp;pubid=xa-4e6fd8e92d1b1216" class="addthis_button_compact">Share</a>
           </div>
           <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-4e6fd8e92d1b1216"></script>
           <!-- AddThis Button END -->
         </div>
         <div style="clear:both;"></div>
      </div>
	
		<h2 class="blogEntryTitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		
		<div class="datestamp">
	    <?php the_date(); ?>
	  </div>
		<div class="blogDate"></div>
		<div style="clear:both;height:10px"></div>
		
		<div class="blog entry">
			<?php the_content(); ?>
		</div>
		
		<div class="blogMeta">
		  <div class="postTags">
		    <?php the_tags(); ?>
		  </div>
		</div>
	
	</div> <!-- .post -->
	<div style="clear:both;height:30px;"></div>
  <div id="comment-area">
		<?php //comments_template(); ?>
	</div>
	
	<?php endwhile; else : ?>

	<div class="post">
	
		<h2>Page Not Found</h2>
		
		<p>Looks like the page you're looking for isn't here anymore. Try browsing the <a href="">categories</a>, <a href="">archives</a>, or using the search box below.</p>
		
		<?php include(TEMPLATEPATH.'/searchform.php'); ?>
	
	</div> <!-- .post -->

	<?php endif; ?>

	
</div>
<div class="blogSidebar">
  <?php get_sidebar('blog'); ?>
</div>
<div style="clear:both"></div>
</div>
	
	

<?php get_sidebar(); ?>

<?php get_footer(); ?>