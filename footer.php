    <div id="footer">
        <div id="contactInfo">
            <a class="phoneNumber" href="/contact-us/">Sales <strong>804-264-6256</strong> <strong>800-445-9904</strong></a>
            <a class="phoneNumber" href="/careers">Careers <strong>804-264-6201</strong></a>
            <a class="phoneNumber" href="/about-us/child-development-center/">Child Development Center <strong>804-200-1176</strong></a>
        </div>

<?php if(is_front_page()) { ?>
<section id="extra-footer-home">
<?php wp_nav_menu( array( 'theme_location' => 'sub-menu', 'container' => 'div', 'container_class' => 'module menu-sub-menu' ) ); ?>
        <?php
global $post;
$args = array( 'numberposts' => 1, 'offset'=> 1, 'category' => 1 );
$myposts = get_posts( $args );
foreach( $myposts as $post ) :  setup_postdata($post); ?>
<div id="around-our-community" class="module grey-module span-columns-8">
        <h2 class="header">Around Our Community</h2>
    <article>
        <div class="column1">
                <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'homepage-thumb' );
                } else { ?>
                <img src="<?php echo get_bloginfo('template_url'); ?>/image-slugs/our-community-blog-thumb.jpg" alt="">
                <?php }
                 ?>

        </div>
        <div class="column2">
            <h3>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h3>

            <p>
                <?php echo limit_words(get_the_excerpt(), '27'); ?>
             </p>
            <hr>
            <span class="meta"><?php the_date(); ?> <a href="<?php the_permalink(); ?>">Read More &gt;</a></span>
        </div>
    </article>
        </div>
<?php endforeach; ?>

</section>
<?php } ?>

        <footer>
            <div class="footerCopy">
              <div class="footerLogos">
                <img src="<?php bloginfo('template_directory');?>/images/flogo1.png" alt="flogo">
                <img src="<?php bloginfo('template_directory');?>/images/eho_logo.png" alt="Equal Housing Opportunity Logo">

              </div>
              <div class="copyText">

                  Westminster Canterbury does not discriminate because of race, color, religion, sex, disability or national origin. As a retirement community, Westminster Canterbury limits residency to persons 62 years of age or older.

                <p>
                  All material copyrighted <?php echo date('Y'); ?> Westminster Canterbury Richmond. All rights reserved.
                </p>
                <p>
                  Website produced by J H I. &amp; Release the Hounds
                </p>
              </div>
            </div>
        </footer>
    </div><!-- #footer -->



  </div> <!-- #contentWrapper -->
  </div> <!-- .pageWrapper -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-19712499-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<script type="text/javascript">
document.write(unescape("%3Cscript src='" + (location.protocol=="https:" ? "https://" : "http://") + "cn.clickable.net/js/cct.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
document.cookie=cct.CookieCheck(document.cookie);
cct.cct_log('0820-AP9aDgFe7V1i0e6w888E4EEA98E5C444C90689FF');
</script>

<?php wp_footer(); ?>
</body>
</html>