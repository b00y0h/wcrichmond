<div class="triptic">

    <a href="/contact-us/" id="act-now" class="module">
        <h2>Act Now!</h2>
        <?php
          $options = wcrichmond_get_theme_options();
        ?>
        <p><?php echo stripslashes($options['act_now_text']); ?></p>
    </a>

        <a href="/contact-us/" id="contact-us" class="module white-module inside-box-shadow">
                <h2>Contact Us</h2>
                <p>Click here to request information or schedule a tour.</p>
                <img src="<?php echo get_bloginfo('template_url'); ?>/images/live-life-well.png" alt="Live Life Well" class="source-image">
        </a>

        <a href="/lifecare/" id="life-care" class="module">
            <h2 class="transparent header">Life Care</h2>
        </a>

</div> <!-- .triptic -->