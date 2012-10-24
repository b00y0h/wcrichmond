
<div class="blockWrapper">
  <div id="newsEventsBlock">
    <h3 class="blockTitle"><a href="<?php bloginfo('home');?>/news">News &amp; Calendar</a></h3>
    <div class="newsFeed">
      <?php $latest_news = get_posts('numberposts=1'); 
         foreach($latest_news as $post) :
            setup_postdata($post);
       ?>
       <div class="footerNewsBlock">
         <div class="blogTitleWrap"><a class="blogSnippetLink" href="<?php the_permalink(); ?>"><?php echo trimstring(get_the_title(),42); ?></a></div>
         <div style="font-size:12px;padding-bottom:5px;font-family: 'Century Gothic', Trebuchet, Helvetica, Arial, sans-serif;"><?php the_date();?></div> 
         <?php
          $content= get_the_content();
          echo the_excerpt();
         ?>
       </div>
       <?php endforeach; ?>
     
    </div>
    <div class="newsReadMore" style="font-family: 'Century Gothic', Trebuchet, Helvetica, Arial, sans-serif;font-size:12px">
      <a href="<? bloginfo('home');?>/news/">READ MORE ></a>
    </div>
  </div>
  
  <div id="lifeCareBlock">
    <a href="<? bloginfo('home');?>/lifecare/">
      <img src="<?php bloginfo('template_directory');?>/images/lifecare-block.png">
    </a>
  </div>
  
  <div style="clear:both;"></div>
</div>