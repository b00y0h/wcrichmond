<div class="blockWrapper">
  <div id="newsEventsBlock">
    <h3 class="blockTitle"><a href="<?php bloginfo('home');?>/news">News &amp; Calendar</a></h3>
    <div class="newsFeed">
      <style type="text/css" media="screen">
        .newsFeed p{
          margin:0;
        }
      </style>
      <?php $latest_news = get_posts('numberposts=1');
         foreach($latest_news as $post) :
            setup_postdata($post);
       ?>
       <div class="footerNewsBlock">
         <div style="padding:5px 0px;"><a class="blogSnippetLink" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
         <div style="font-size:12px;padding-bottom:5px;font-family: 'Century Gothic', Trebuchet, Helvetica, Arial, sans-serif;"><?php the_date();?></div>
         <p style="font-size:13px;">
         <?php
          $content= get_the_content();
          echo the_excerpt();
         ?>
         </p>
       </div>
       <?php endforeach; ?>

    </div>
    <div class="newsReadMore" style="font-family: 'Century Gothic', Trebuchet, Helvetica, Arial, sans-serif;font-size:12px">
      <a href="<?php bloginfo('home');?>/news/">READ MORE ></a>
    </div>
  </div>


  <div id="lifeCareBlock">
    <a href="<?php bloginfo('home');?>/lifestyle/">
      <img src="<?php bloginfo('template_directory');?>/images/lifestyle-block.png">
    </a>
  </div>

  <div style="clear:both;"></div>
</div>