<?php
function register_post_types() {

    // Videos
    $labels = array(
        'name' => __('Videos','born'),
        'singular_name' => __('Video','born'),
        'add_new' => __('Add New Video','born'),
        'add_new_item' => __('Add New Video','born'),
        'edit_item' => __('Edit Video','born'),
        'new_item' => __('New Video','born'),
        'view_item' => __('View Video','born'),
        'search_items' => __('Search Videos','born'),
        'not_found' => __('No Videos Found','born'),
        'not_found_in_trash' => __('No Videos Found In Trash','born'),
        'parent_item_colon' => __('Parent Video:','born')
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
        'name' => _x( 'Video Categories', 'taxonomy general name','born' ),
        'singular_name' => _x( 'Video Category', 'taxonomy singular name','born' ),
        'search_items' =>  __( 'Search Video Categories','born' ),
        'popular_items' => __( 'Popular Video Categories','born' ),
        'all_items' => __( 'All Video Categories','born' ),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __( 'Edit Video Category','born' ),
        'update_item' => __( 'Update Video Category','born' ),
        'add_new_item' => __( 'Add New Video Category','born' ),
        'new_item_name' => __( 'New Video Category Name','born' ),
        'separate_items_with_commas' => __( 'Separate Video Categories with commas','born' ),
        'add_or_remove_items' => __( 'Add or remove Video Categories','born' ),
        'choose_from_most_used' => __( 'Choose from the most used Video Categories','born' )
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
?>