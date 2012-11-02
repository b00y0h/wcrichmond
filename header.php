<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8 ie7" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9 ie8" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width">
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
<!--[if lt IE 7]>
<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="pageWrapper">
<div id="contentWrapper">
    <header>


        <div id="logo">
            <a href="<?php bloginfo('home'); ?>">
                <img src="<?php bloginfo('template_directory');?>/images/wcr_logo.png" alt="Westminster Canterbury Richmond Logo">
            </a>
        </div> <!-- #logo -->

        <div id="secondaryNav">
            <nav>
                <a class="icon-home" href="<?php bloginfo('home'); ?>">Home</a><a class="icon-facebook" href="http://www.facebook.com/pages/Westminster-Canterbury-Richmond/154964607919165">Facebook</a>
            </nav>
            <?php include('searchform.php'); ?>
        </div> <!-- #secondaryNav -->

        <div id="primaryNav">
            <?php wp_nav_menu( array( 'theme_location' => 'sub-menu','container_class'=>'subMenu' ) ); ?>
        </div>
    </header>