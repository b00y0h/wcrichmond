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
            global $wpdb;
            $years = $wpdb->get_col("SELECT DISTINCT YEAR(post_date) FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = 'post' ORDER BY post_date DESC");
            foreach($years as $year) :
            ?>
                <li><a href="<?php echo get_year_link($year); ?> "><?php echo $year; ?></a>

                    <ul>
                    <?  $months = $wpdb->get_col("SELECT DISTINCT MONTH(post_date) FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = 'post' AND YEAR(post_date) = '".$year."' ORDER BY post_date DESC");
                        foreach($months as $month) :
                        ?>
                        <li><a href="<?php echo get_month_link($year, $month); ?>"><?php echo date( 'F', mktime(0, 0, 0, $month) );?></a>
                            <ul>
                            <?  $days = $wpdb->get_col("SELECT DISTINCT DAY(post_date) FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = 'post' AND MONTH(post_date) = '".$month."' AND YEAR(post_date) = '".$year."' ORDER BY post_date DESC");
                                foreach($days as $day) :
                                ?>
                                <li><a href="<?php echo get_day_link($year, $month, $day); ?>"><?php echo $day;?></a></li>
                                <?php endforeach;?>
                            </ul>

                        </li>
                        <?php endforeach;?>
                    </ul>
                </li>
            <?php endforeach; ?>
            </ul>




         <?php   } ?>

        <!--END #sidebar .aside-->
        </div>
