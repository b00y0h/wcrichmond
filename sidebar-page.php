<?php

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
  <style type="text/css" media="screen">
    ul.tertiaryNav{
      margin:0;
      padding:0;
    }
    ul.tertiaryNav li{
      list-style:none;
      background-color:#d31145;
      /*height:37px;*/
      margin:5px 0px;
      width:265px;
    }
    ul.tertiaryNav li:hover{
      background-color:#fff;
    }
    ul.tertiaryNav li:hover a{
      color:#d31145;
      background-color:#fff;
    }
    ul.tertiaryNav li.current_page_item{
      margin-left:-30px;
    }
    ul.tertiaryNav li.current_page_item a{
      padding-right:105px;
    }
    ul.tertiaryNav li a{
      font-family: "Century Gothic", Trebuchet, Helvetica, Arial, sans-serif;
      text-transform:uppercase;
      text-decoration:none;
      color:#FFF;
      background-color:#d31145;
      font-size:14px;
      padding:10px 75px 10px 10px;
      width:200px;
      display:block;
    }
    
  </style>
    <ul class="tertiaryNav">
      <?php echo $children; ?>
    </ul>
<?php endif; ?>

<?php 	/* Widgetized sidebar, if you have the plugin installed. */
		if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Page Sidebar") ) : ?>  
<?php endif; ?>