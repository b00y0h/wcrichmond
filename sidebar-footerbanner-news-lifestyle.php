<div class="diptic last-child-large">

  <div id="newsEventsBlock" class="module">
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


    <a href="/lifestyle/" id="lifestyle" class="module desk-image">
        <h2 class="transparent header">LifeStyle</h2>
    </a>

</div> <!-- .diptic -->