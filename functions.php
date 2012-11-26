<?php

/**
 * Tell WordPress to run wcrichmond_setup() when the 'after_setup_theme' hook is run.
 */
if ( ! function_exists( 'wcrichmond_setup' ) ):

    function wcrichmond_setup() {
            add_theme_support( 'post-thumbnails' );
            update_option('thumbnail_size_w', 300);
            update_option('thumbnail_size_h', 100);
            update_option('thumbnail_crop', 0);

            add_image_size( 'category-thumb', 300, 9999 ); //300 pixels wide (and unlimited height)
            add_image_size( 'homepage-thumb', 300, 100, true ); //(cropped)
            add_image_size( 'blog-index', 600, '', true); // blog index/single pages
            add_image_size('featured_preview', 55, 55, true);

            /* Register WP 3.0+ Menus ---------------------------------------------------*/
            register_nav_menus(
                array(
                    'primary-menu' => __( 'Primary Menu' ),
                    'sub-menu' => __( 'Sub Menu' ),
                    'footer-menu' => __( 'Footer Menu' )
                )
            );


    }

endif; // wcrichmond_setup
add_action( 'after_setup_theme', 'wcrichmond_setup' );

// Enhanced Custom Fields Framework
require('_framework/enhanced-custom-fields/enhanced-custom-fields.php');

require('_theme_settings/theme-post-types.php');
require('_theme_settings/theme-custom-fields.php');


// Fix <p>'s and <br>'s from showing up around shortcodes.
add_filter('the_content', 'shortcode_empty_paragraph_fix');
function shortcode_empty_paragraph_fix($content)
{
    $array = array ( '<p>[' => '[', ']</p>' => ']', ']<br />' => ']' );
    $content = strtr($content, $array);
    return $content;
}




/*-----------------------------------------------------------------------------------*/
/* Enqueue scripts and styles
/*-----------------------------------------------------------------------------------*/
function _add_scripts_styles() {
    wp_deregister_script('l10n');

    wp_enqueue_style( 'style', get_stylesheet_uri() );

    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'application', get_template_directory_uri() . '/js/application.js', array( 'jquery' ), '20120928', true );
    wp_enqueue_script( 'modernizr',   get_template_directory_uri() . '/library/modernizr.js', null, '1.6', false);

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', '_add_scripts_styles' );



/*-----------------------------------------------------------------------------------*/
/*  Register Sidebars
/*-----------------------------------------------------------------------------------*/

if ( !function_exists( 'register_sidebar_init' ) ) {

    function register_sidebar_init() {
      register_sidebar(array(
        'name' => 'Blog Sidebar',
        'description' => __('Widget area for blog pages.', 'wcrichmond'),
        'id' => 'sidebar-blog',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
      ));
      register_sidebar(array(
        'name' => 'Page Sidebar',
        'description' => __('Widget area for pages.', 'zilla'),
        'id' => 'sidebar-page',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
      ));
    }
}
add_action( 'widgets_init', 'register_sidebar_init' );

function improved_trim_excerpt($text) {
  global $post;
  if ( '' == $text ) {
    $text = get_the_content('');
    $text = apply_filters('the_content', $text);
    $text = str_replace(']]>', ']]&gt;', $text);
    $text = preg_replace('@<script[^>]*?>.*?</script>@si', '', $text);
    $text = strip_tags($text, '<p><img><a><b><strong><i><span>');
    $excerpt_length = 21;
    $words = explode(' ', $text, $excerpt_length + 1);

      if (count($words)> $excerpt_length) {
        array_pop($words);
        array_push($words, '...');
        $text = implode(' ', $words);
      }
  }
  return $text;
}

remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'improved_trim_excerpt');


function limit_words($string, $word_limit) {
 // creates an array of words from $string (this will be our excerpt)
  // explode divides the excerpt up by using a space character
 $words = explode(' ', $string);
 // this next bit chops the $words array and sticks it back together
  // starting at the first word '0' and ending at the $word_limit
  // the $word_limit which is passed in the function will be the number
  // of words we want to use
  // implode glues the chopped up array back together using a space character
 return implode(' ', array_slice($words, 0, $word_limit));
}


// add the 'dropdown' class to parents of sub menus
add_filter( 'nav_menu_css_class', 'check_for_submenu', 10, 2);
function check_for_submenu($classes, $item) {
    global $wpdb;
    $has_children = $wpdb->get_var("SELECT COUNT(meta_id) FROM wp_postmeta WHERE meta_key='_menu_item_menu_item_parent' AND meta_value='".$item->ID."'");
    if ($has_children > 0) array_push($classes,'dropdown'); // add the class dropdown to the current list
    return $classes;
}


function add_iframe($initArray) {
$initArray['extended_valid_elements'] = "iframe[id|class|title|style|align|frameborder|height|longdesc|marginheight|marginwidth|name|scrolling|src|width]";
return $initArray;
}
add_filter('tiny_mce_before_init', 'add_iframe');

function is_child_of( $page_id, $potential_child_id = '' ) {

	$is_child = false;

	if ( ! is_int( $page_id ) ) {
		$page = get_page_by_path( $page_id );
		$page_id = empty( $page ) ? 0 : $page->ID;
	}

	if ( empty( $potential_child_id ) ) {
		$potential_child_id = get_the_ID();
	}

	$potential_child = get_page( $potential_child_id );

	if ( ! empty( $potential_child ) && is_array( $potential_child->ancestors ) ) {
		$is_child = in_array( $page_id, $potential_child->ancestors );
	}

	return $is_child;
}

function trimstring($string,$length){
  // Change to the number of characters you want to display
  $chars = $length;

  $text = $string." ";
  $text = substr($text,0,$chars);
  $text = substr($text,0,strrpos($text,' '));
  $text = $text."...";

  return $text;

}

class LiveLifeWellWidget extends WP_Widget {

  public function LiveLifeWellWidget() {
    $widget_ops = array('classname' => 'LiveLifeWellWidget', 'description' => 'Live life well tips' );
    $this->WP_Widget('LiveLifeWellWidget', 'Live Life Well Tips Widget', $widget_ops);
  }

  public function widget($args, $instance) {
    extract($args);
    /* Our variables from the widget settings. */
    $message1 = $instance['message1'];
		$message2 = $instance['message2'];
		$message3 = $instance['message3'];
		$message4 = $instance['message4'];
		$message5 = $instance['message5'];
		$message6 = $instance['message6'];
		$message6 = $instance['message7'];
		$message6 = $instance['message8'];
      	/* Before widget (defined by themes). */
    echo $before_widget;

    		/* Display the widget title if one was input (before and after defined by themes). */
    if(!empty($title))
    	//echo "<div class='tipsTitle'>". $title . "</div>";


    ?>
    <script type="text/javascript" src="http://cloud.github.com/downloads/malsup/cycle/jquery.cycle.lite.1.0.min.js"></script>
    <script>
      jQuery(document).ready(function($){
         $(".tipsText").cycle({
           height: '133px',
           timeout: 10000
         });
      })
    </script>
    <div style="background-color:#fff;width:285px;margin-left:-40px;padding:60px 0px 10px 0px;background:url(<?php bloginfo('home')?>/phpages/wp-content/themes/wcr/images/tips/tips_bg.png);background-repeat:no-repeat;">
    <div class="tipsText">
      <?php echo (!empty($message1)) ? "<div>$message1</div>" :""; ?>
      <?php echo (!empty($message2)) ? "<div>$message2</div>" :""; ?>
      <?php echo (!empty($message3)) ? "<div>$message3</div>" :""; ?>
      <?php echo (!empty($message4)) ? "<div>$message4</div>" :""; ?>
      <?php echo (!empty($message5)) ? "<div>$message5</div>" :""; ?>
      <?php echo (!empty($message6)) ? "<div>$message6</div>" :""; ?>
      <?php echo (!empty($message7)) ? "<div>$message7</div>" :""; ?>
      <?php echo (!empty($message8)) ? "<div>$message8</div>" :""; ?>

    </div>
    </div>
    <?php

      	/* After widget (defined by themes). */
    		echo $after_widget;

  }

  public function update($newInstance, $oldInstance) {
    $instance = $oldInstance;
    $instance['message1'] = strip_tags( $newInstance['message1'] );
    $instance['message2'] = strip_tags( $newInstance['message2'] );
    $instance['message3'] = strip_tags( $newInstance['message3'] );
    $instance['message4'] = strip_tags( $newInstance['message4'] );
    $instance['message5'] = strip_tags( $newInstance['message5'] );
    $instance['message6'] = strip_tags( $newInstance['message6'] );
    $instance['message7'] = strip_tags( $newInstance['message7'] );
    $instance['message8'] = strip_tags( $newInstance['message8'] );
    return $instance;
  }

  public function form($instance) {
    $defaults = array( 'message1' => __('', 'livelife-tips'),'message2' => __('', 'livelife-tips'),'message3' => __('', 'livelife-tips'),'message4' => __('', 'livelife-tips'),'message5' => __('', 'livelife-tips'),'message6' => __('', 'livelife-tips') );
    $instance = wp_parse_args( (array) $instance, $defaults );
    ?>

    <!-- Message1: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'message1' ); ?>"><?php _e('Message 1:', 'livelife-tips'); ?></label>
			<textarea id="<?php echo $this->get_field_id( 'message1' ); ?>" name="<?php echo $this->get_field_name( 'message1' ); ?>" cols="25" rows="4"><?php echo $instance['message1']; ?></textarea>
		</p>

		<!-- Message2: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'message2' ); ?>"><?php _e('Message 2:', 'livelife-tips'); ?></label>
			<textarea id="<?php echo $this->get_field_id( 'message2' ); ?>" name="<?php echo $this->get_field_name( 'message2' ); ?>" cols="25" rows="4"><?php echo $instance['message2']; ?></textarea>
		</p>

		<!-- Message3: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'message3' ); ?>"><?php _e('Message 3:', 'livelife-tips'); ?></label>
			<textarea id="<?php echo $this->get_field_id( 'message3' ); ?>" name="<?php echo $this->get_field_name( 'message3' ); ?>" cols="25" rows="4"><?php echo $instance['message3']; ?></textarea>
		</p>

		<!-- Message4: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'message4' ); ?>"><?php _e('Message 4:', 'livelife-tips'); ?></label>
			<textarea id="<?php echo $this->get_field_id( 'message4' ); ?>" name="<?php echo $this->get_field_name( 'message4' ); ?>" cols="25" rows="4"><?php echo $instance['message4']; ?></textarea>
		</p>

		<!-- Message5: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'message5' ); ?>"><?php _e('Message 5:', 'livelife-tips'); ?></label>
			<textarea id="<?php echo $this->get_field_id( 'message5' ); ?>" name="<?php echo $this->get_field_name( 'message5' ); ?>" cols="25" rows="4"><?php echo $instance['message5']; ?></textarea>
		</p>

		<!-- Message6: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'message6' ); ?>"><?php _e('Message 6:', 'livelife-tips'); ?></label>
			<textarea id="<?php echo $this->get_field_id( 'message6' ); ?>" name="<?php echo $this->get_field_name( 'message6' ); ?>" cols="25" rows="4"><?php echo $instance['message6']; ?></textarea>
		</p>

		<!-- Message7: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'message7' ); ?>"><?php _e('Message 7:', 'livelife-tips'); ?></label>
			<textarea id="<?php echo $this->get_field_id( 'message7' ); ?>" name="<?php echo $this->get_field_name( 'message7' ); ?>" cols="25" rows="4"><?php echo $instance['message7']; ?></textarea>
		</p>

		<!-- Message8: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'message8' ); ?>"><?php _e('Message 8:', 'livelife-tips'); ?></label>
			<textarea id="<?php echo $this->get_field_id( 'message8' ); ?>" name="<?php echo $this->get_field_name( 'message8' ); ?>" cols="25" rows="4"><?php echo $instance['message8']; ?></textarea>
		</p>
    <?php
  }

}




/**
 * Register PHPlanner events widget
 */
function WCRWidgetsInit() {
  register_widget('LiveLifeWellWidget');
}
add_action('widgets_init', 'WCRWidgetsInit');


function force_mypages() {
   global $current_user;
   get_currentuserinfo();
   // build url array
   $pageurl = explode("/",$_SERVER['SCRIPT_NAME']);
   // get script file name
   $file_name = $pageurl[count($pageurl)-1];
   // only run on edit.php
   if($file_name=="edit.php"){
     // only run on pages - can be changed for other post types
     if($_GET['post_type']=="page"){
       // operate for a specific user
       if($current_user->ID==3){
        // simulate &author=ID silently
       	$_GET['author'] = $current_user->ID;
       }
     }
   }
}
add_action( 'admin_init', 'force_mypages');

function posts_for_hr($query) {

	if($query->is_admin) {

		global $user_ID;
		if(in_array($user_ID,array(4,5,6)) ){
		  $query->set('author',  4);
		}

	}
	return $query;
}
add_filter('pre_get_posts', 'posts_for_hr');


function wcrichmond_post_end() { wcrichmond_do_contextual_hook('wcrichmond_post_end'); }

/**
 * Adds contextual action hooks. Users do not need to use WordPress conditional tags
 * because this function handles the logic.
 *
 * Basic hook would be 'wcrichmond_head'. wcrichmond_do_contextual_hook() function extends
 * the hook with context (i.e., 'wcrichmond_head_singular' or 'wcrichmond_head_home')
 *
 * Thanks to Ptah Dunbar for this function
 * @link https://twitter.com/ptahdunbar
 *
 * @since 0.1
 * @uses wcrichmond_get_query_context() Gets the context of the current page
 * @param string $tag Usually the location of the hook but defines the base hook
 */
if ( !function_exists( 'wcrichmond_do_contextual_hook' ) ) {
    function wcrichmond_do_contextual_hook( $tag = '', $args = '' ) {
        if ( !$tag ) { return false; }

        do_action( $tag, $args );

        foreach( (array) wcrichmond_get_query_context() as $context ) {
            do_action( "{$tag}_{$context}", $args );
        }
    }
}

/**
 * Retrieve the context of the queried template
 *
 * @since 0.1
 * @return array $query_context
 */

if ( ! function_exists( 'wcrichmond_get_query_context' ) ) {
    function wcrichmond_get_query_context() {
        global $wp_query, $query_context;

        /* Return query_context if set -------------------------------------------*/
        if ( isset( $query_context->context ) && is_array( $query_context->context ) ) {
            return $query_context->context;
        }

        /* Figure out the context ------------------------------------------------*/
        $query_context = new stdClass(); // instantiate $query_context explicitely
        $query_context->context = array();

        /* Front page */
        if ( is_front_page() ) {
            $query_context->context[] = 'home';
        }

        /* Blog page */
        if ( is_home() && ! is_front_page() ) {
            $query_context->context[] = 'blog';

        /* Singular views. */
        } elseif ( is_singular() ) {

            $query_context->context[] = 'singular';
            $query_context->context[] = "singular-{$wp_query->post->post_type}";

            /* Page Templates. */
            if ( is_page_template() ) {
                $to_skip = array( 'page', 'post' );

                $page_template = basename( get_page_template() );
                $page_template = str_replace( '.php', '', $page_template );
                $page_template = str_replace( '.', '-', $page_template );

                if ( $page_template && ! in_array( $page_template, $to_skip ) ) {
                    $query_context->context[] = $page_template;
                }
            }

            $query_context->context[] = "singular-{$wp_query->post->post_type}-{$wp_query->post->ID}";
        }

        /* Archive views. */
        elseif ( is_archive() ) {
            $query_context->context[] = 'archive';

            /* Taxonomy archives. */
            if ( is_tax() || is_category() || is_tag() ) {
                $term = $wp_query->get_queried_object();
                $query_context->context[] = 'taxonomy';
                $query_context->context[] = $term->taxonomy;
                $query_context->context[] = "{$term->taxonomy}-" . sanitize_html_class( $term->slug, $term->term_id );
            }

            /* User/author archives. */
            elseif ( is_author() ) {
                $query_context->context[] = 'user';
                $query_context->context[] = 'user-' . sanitize_html_class( get_the_author_meta( 'user_nicename', get_query_var( 'author' ) ), $wp_query->get_queried_object_id() );
            }

            /* Time/Date archives. */
            else {
                if ( is_date() ) {
                    $query_context->context[] = 'date';
                    if ( is_year() )
                        $query_context->context[] = 'year';
                    if ( is_month() )
                        $query_context->context[] = 'month';
                    if ( get_query_var( 'w' ) )
                        $query_context->context[] = 'week';
                    if ( is_day() )
                        $query_context->context[] = 'day';
                }
                if ( is_time() ) {
                    $query_context->context[] = 'time';
                    if ( get_query_var( 'hour' ) )
                        $query_context->context[] = 'hour';
                    if ( get_query_var( 'minute' ) )
                        $query_context->context[] = 'minute';
                }
            }
        }

        /* Search results. */
        elseif ( is_search() ) {
            $query_context->context[] = 'search';

        /* Error 404 pages. */
        } elseif ( is_404() ) {
            $query_context->context[] = 'error-404';
        }

        return $query_context->context;
    }
}




add_action('wcrichmond_post_end','add_sharing');
function add_sharing()
{
    ?>
    <div class="postShare">
       <div class="fb-like" data-href="<?php the_permalink(); ?>" data-send="false" data-layout="button_count" data-width="50" data-show-faces="false"></div>

       <!-- AddThis Button BEGIN -->
       <div class="addthis_toolbox addthis_default_style ">
           <a href="http://www.addthis.com/bookmark.php?v=250&amp;pubid=xa-4e6fd8e92d1b1216" class="addthis_button_compact" addthis:url="<?php the_permalink(); ?>">Share</a>
       </div>
       <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-4e6fd8e92d1b1216"></script>
       <!-- AddThis Button END -->
   </div>
   <?php }


