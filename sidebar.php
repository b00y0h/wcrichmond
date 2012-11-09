        <!--BEGIN #sidebar .aside-->
        <div id="sidebar" class="aside">

        <?php

            /* Widgetised Area */
            if( is_page() ) {
                dynamic_sidebar( 'sidebar-page' );
            } else {
                dynamic_sidebar( 'sidebar-blog' );
            }

        ?>

        <!--END #sidebar .aside-->
        </div>
