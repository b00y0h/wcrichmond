<?php




add_action('init', '_init_method');
function _init_method() {
    if (!is_admin()) {
      // Nobody is using this, so deregister it
        wp_deregister_script('l10n');
        wp_deregister_script( 'jquery' );
        wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js');
        wp_enqueue_script( 'jquery' );
        wp_enqueue_script('modernizr', get_bloginfo('template_url') . '/library/js/modernizr.js', null, '1.6', false);
    }
}

/**
 * Enqueue scripts and styles
 */
function _add_stylesheet() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    wp_enqueue_script( 'application', get_template_directory_uri() . '/js/application.js', array( 'jquery' ), '20120928', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', '_add_stylesheet' );





if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Blog Sidebar',
    'before_widget' => '<div id="%1$s" class="blogWidget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>'
  ));
  register_sidebar(array(
    'name' => 'Page Sidebar',
    'before_widget' => '<div class="pageWidget">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>'
  ));

function register_theme_menus() {
  register_nav_menus(
  		array(
  			'primary-menu' => __( 'Primary Menu' ),
  			'sub-menu' => __( 'Sub Menu' ),
  			'footer-menu' => __( 'Footer Menu' )
  		)
  	);
  }
add_action( 'init', 'register_theme_menus' );

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
    <script type="text/javascript" charset="utf-8">
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
    <div style="clear:both;"></div>
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