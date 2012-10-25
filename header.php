<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8 ie7" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9 ie8" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>

	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
	<?php
	  global $post;
	?>
	<?php if(eregi("facebookexternalhit", $_SERVER['HTTP_USER_AGENT'])){
  	echo '<meta property="og:title" content="Westminster Canterbury Richmond" />';
    echo '<meta property="og:site_name" content="Westminster Canterbury Richmond" />';    
    echo '<meta property="og:url" content="' . get_permalink($post->id) . '">';    
    echo '<meta property="og:description" content="A continuing care retirement community designed for older adults who live active, involved lives— independent lives that focus on health and spiritual well being." />';
    echo '<meta property="og:type" content="website" />';
    echo '<meta property="og:image" content="http://www.wcrichmond.org/phpages/wp-content/themes/wcr/images/foundation_gallery/foundation.jpg" />';
  } ?>
  <meta name="description" content="A continuing care retirement community designed for older adults who live active, involved lives— independent lives that focus on health and spiritual well being." />
  <link rel="image_src" href="http://www.wcrichmond.org/phpages/wp-content/themes/wcr/images/foundation_gallery/foundation.jpg" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
</head>
<body <?php body_class($class); ?>>
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
    <div id="contentWrapper">
      
      <div id="searchBox">
        <div class="homebutton">
          <a href="<?php bloginfo('home'); ?>">
            <img src="<?php bloginfo('template_directory');?>/images/home_icon.png" class="shift-up-5"> 
            HOME
          </a>       
        </div>
        <?php include('searchform.php'); ?>
      </div>
      
      <div id="header">
        
        <div id="logo">
          <a href="<?php bloginfo('home'); ?>">
            <img src="<?php bloginfo('template_directory');?>/images/wcr_logo.png">
          </a>
        </div>
        <div id="topMenu" class="clearfix">
          <?php wp_nav_menu( array( 'theme_location' => 'primary-menu','container_class'=>'topMenu' ) ); ?>
        </div>
        
        <div style="clear:both;"></div>
        
              <div class="facebookButton">
                <a href="http://www.facebook.com/pages/Westminster-Canterbury-Richmond/154964607919165" target="_blank">
                  <img src="<?php bloginfo('template_directory'); ?>/images/FaceBook_48x48.png" width="36">
                </a>
              </div>
      </div>
      
        <div id="subNav" class="clearfix">
          <?php if(is_front_page()||$post->post_parent==9) : ?>
            <a href="<?php bloginfo('home');?>/lifestyle/residence-options/" class="subnavlogo"></a>
            <?php wp_nav_menu( array( 'theme_location' => 'sub-menu','container_class'=>'subMenu' ) ); ?>
          <?php endif; ?>
          <?php if($post->ID==5 || in_array("5",get_post_ancestors($post))) : ?>
            <a href="<?php bloginfo('home');?>/about-us" class="subnavlogo"></a>
            <div class="subMenu">
              <ul id="menu-sub-menu" class="menu">
              <?php wp_list_pages('title_li=&child_of=5&depth=1&exclude=28')?>
              </ul>
            </div>
          <?php endif; ?>
          <?php if($post->ID==15 || $post->post_parent==15) : ?>
            <a href="<?php bloginfo('home');?>/contact-us/" class="subnavlogo"></a>
            <div class="subMenu"></div>
          <?php endif; ?>
          <?php if($post->ID==11 || $post->post_parent==11) : ?>
            <a href="<?php bloginfo('home');?>/lifecare/life-care/" class="subnavlogo"></a>
            <div class="subMenu">
              <ul id="menu-sub-menu" class="menu">
              <?php wp_list_pages('title_li=&child_of=11&depth=1')?>
              </ul>
            </div>
          <?php endif; ?>
          <?php if($post->ID==13 || $post->post_parent==13) : ?>
            <a href="<?php bloginfo('home');?>/foundation" class="subnavlogo"></a>
            <div class="subMenu foundationSubMenu">
              <ul id="menu-sub-menu" class="menu">
              <?php wp_list_pages('title_li=&child_of=13&depth=1')?>
              </ul>
            </div>
          <?php endif; ?>
          <?php if($post->ID==65 || $post->post_parent==65 || $post->post_parent==1085) : ?>
            <a href="<?php bloginfo('home');?>/careers" class="subnavlogo"></a>
            <div class="subMenu">
              <ul id="menu-sub-menu" class="menu">
              <?php wp_list_pages('title_li=&child_of=65&depth=1')?>
              </ul>
            </div>
          <?php endif; ?>
          <?php if($post->ID==26 || $post->post_parent==26) : ?>
            <a href="<?php bloginfo('home');?>/news/" class="subnavlogo"></a>
            <div style="thickgreyline">&nbsp;</div>
            <div style="clear:both;"></div>
          <?php endif; ?>
      </div>