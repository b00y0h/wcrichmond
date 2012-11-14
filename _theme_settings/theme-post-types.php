<?php
function register_post_types() {

    // Videos
    $labels = array(
        'name' => __('Videos','wcrichmond'),
        'singular_name' => __('Video','wcrichmond'),
        'add_new' => __('Add New Video','wcrichmond'),
        'add_new_item' => __('Add New Video','wcrichmond'),
        'edit_item' => __('Edit Video','wcrichmond'),
        'new_item' => __('New Video','wcrichmond'),
        'view_item' => __('View Video','wcrichmond'),
        'search_items' => __('Search Videos','wcrichmond'),
        'not_found' => __('No Videos Found','wcrichmond'),
        'not_found_in_trash' => __('No Videos Found In Trash','wcrichmond'),
        'parent_item_colon' => __('Parent Video:','wcrichmond')
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array(
            'slug' => 'video',
            'with_front' => false
        ),
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'menu_icon' => get_template_directory_uri().'/_theme_settings/images/menu_icon_video.png',
        'supports' => array('title','editor', 'page-attributes','thumbnail','comments','author'),
        'has_archive' => 'videos'
    );
    register_post_type('video-items', $args);

    $labels = array(
        'name' => _x( 'Video Categories', 'taxonomy general name','wcrichmond' ),
        'singular_name' => _x( 'Video Category', 'taxonomy singular name','wcrichmond' ),
        'search_items' =>  __( 'Search Video Categories','wcrichmond' ),
        'popular_items' => __( 'Popular Video Categories','wcrichmond' ),
        'all_items' => __( 'All Video Categories','wcrichmond' ),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __( 'Edit Video Category','wcrichmond' ),
        'update_item' => __( 'Update Video Category','wcrichmond' ),
        'add_new_item' => __( 'Add New Video Category','wcrichmond' ),
        'new_item_name' => __( 'New Video Category Name','wcrichmond' ),
        'separate_items_with_commas' => __( 'Separate Video Categories with commas','wcrichmond' ),
        'add_or_remove_items' => __( 'Add or remove Video Categories','wcrichmond' ),
        'choose_from_most_used' => __( 'Choose from the most used Video Categories','wcrichmond' )
    );

    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array(
            "with_front" => true,
        ),
    );
    register_taxonomy('videos', 'video-items', $args);


}

add_action('init', 'register_post_types');


// GET FEATURED IMAGE
function _get_featured_image($post_ID) {
    $post_thumbnail_id = get_post_thumbnail_id($post_ID);
    if ($post_thumbnail_id) {
        $post_thumbnail_img = wp_get_attachment_image_src($post_thumbnail_id, 'featured_preview');
        return $post_thumbnail_img[0];
    }
}
// ADD NEW COLUMN
function _columns_head($defaults) {
    $defaults['featured_image'] = 'Featured Image';
    return $defaults;
}
// SHOW THE FEATURED IMAGE
function _columns_content($column_name, $post_ID) {
    if ($column_name == 'featured_image') {
        $post_featured_image = _get_featured_image($post_ID);
        if ($post_featured_image) {
            echo '<img src="' . $post_featured_image . '" />';
        }
    }
}
add_filter('manage_video-items_posts_columns', '_columns_head');
add_action('manage_posts_custom_column', '_columns_content', 10, 2);
