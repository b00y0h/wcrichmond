<div class="blockWrapper">
  <div id="newsEventsBlock">
    <h3 class="blockTitle"><a href="<?php bloginfo('home');?>/news/">Community Blog</a></h3>
    <div class="newsFeed">
      <?php $latest_news = get_posts('numberposts=1');
         foreach($latest_news as $post) :
            setup_postdata($post);
       ?>
       <div class="footerNewsBlock">
         <div><a class="blogSnippetLink" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
         <div><?php the_date();?></div>
         <p>
         <?php
          $content= get_the_content();
          echo the_excerpt();
         ?>
         </p>
       </div>
       <?php endforeach; ?>

    </div>
    <div class="newsReadMore">
      <a href="<?php bloginfo('home');?>/news/">READ MORE ></a>
    </div>
  </div>


  <div id="lifeCareBlock">
    <a href="<?php bloginfo('home');?>/lifestyle/">
      <img src="<?php bloginfo('template_directory');?>/images/lifestyle-block.png">
    </a>
  </div>


</div>