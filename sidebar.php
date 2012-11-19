
<!--BEGIN #sidebar .aside-->
<div id="sidebar" class="aside">

<?php

    /* Widgetised Area */
    if( is_page() ) {

        $children = '';
        $ancestors =  get_post_ancestors($post);
        //print_r($ancestors);
        if(!empty($ancestors)){
        // this page has a parent
        if(sizeof($ancestors)==1){
          // page is secondary
          $children = wp_list_pages('title_li=&child_of='.$post->ID."&echo=0&depth=1");
        }
        else if(sizeof($ancestors)==2){
          // page is tertiary
          $children = wp_list_pages('title_li=&child_of='.$post->post_parent."&echo=0&depth=1");
        }
        }
        if($post->ID==5 || $post->ID==28){
        $children = wp_list_pages('title_li=&include=28&echo=0');
        }
        ?>
        <!-- <?php echo $children; ?>-->

        <?php if($children): ?>
            <ul class="tertiaryNav">
              <?php echo $children; ?>
            </ul>
        <?php endif;
            // dynamic_sidebar( 'sidebar-page' );
        ?>
        <div class="extra-sideitems">
            <a href="/lifestyle/" id="lifestyle" class="module">
            <h2 class="transparent header">LifeStyle</h2>
            </a>

            <a href="/lifecare/" id="life-care" class="module">
            <h2 class="transparent header">Life Care</h2>
            </a>
        </div>

        <?php } else { ?>

    <h3><a href="#">Calendar &amp; Events</a></h3>
    <h3>Archives</h3>
    <ul class="blog-list-archive">
      <?php
      /**/

      $years = $wpdb->get_col("SELECT DISTINCT YEAR(post_date) FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = 'post' ORDER BY post_date DESC");

      if( is_array($years)){
        foreach($years as $year) {
        ?>
            <li><a href="#"><?php echo $year; ?></a>

                <ul class="archive-sub-menu">
                <?php  $months = $wpdb->get_col("SELECT DISTINCT MONTH(post_date) FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = 'post' AND YEAR(post_date) = '".$year."' ORDER BY post_date DESC");
                    if( is_array($months) ){
                      foreach($months as $month) {
                    ?>
                    <li><a href="<?php echo get_month_link($year, $month); ?>"><?php echo date( 'F Y', mktime(0, 0, 0, $month) );?> </a></li>
                    <?php
                      }
                    }?>
                </ul>
            </li>
        <?php
        }
      } ?>
    </ul>

 <?php   } ?>

<!--END #sidebar .aside-->
</div>