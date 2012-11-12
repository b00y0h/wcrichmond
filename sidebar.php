
<!--BEGIN #sidebar .aside-->
<div id="sidebar" class="aside">

<?php

    /* Widgetised Area */
    if( is_page() ) {
        dynamic_sidebar( 'sidebar-page' );
    } else { ?>



      <ul>
          <?php
          /**/

          $years = $wpdb->get_col("SELECT DISTINCT YEAR(post_date) FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = 'post' ORDER BY post_date DESC");

          if( is_array($years)){
            foreach($years as $year) {
            ?>
                <li><a href="<?php echo get_year_link($year); ?> "><?php echo $year; ?></a>

                    <ul>
                    <?php  $months = $wpdb->get_col("SELECT DISTINCT MONTH(post_date) FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = 'post' AND YEAR(post_date) = '".$year."' ORDER BY post_date DESC");
                        if( is_array($months) ){
                          foreach($months as $month) {
                        ?>
                        <li><a href="<?php echo get_month_link($year, $month); ?>"><?php echo date( 'F', mktime(0, 0, 0, $month) );?></a></li>
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