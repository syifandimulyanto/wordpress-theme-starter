<?php
/**
* List of theme support functions
*/
// Add WordPress theme support
if (function_exists('add_theme_support'))
{
    // Add post thumbnail feature
    add_theme_support('post-thumbnails');
    add_image_size('small', 90, 90, true);
    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');
}

add_action('init', 'general_option');
add_action('init', 'post_type_accommodation');
add_action('init', 'post_type_souvenirs');

function general_option()
{
    if( function_exists('acf_add_options_page') ) :
        acf_add_options_page(array(
            'page_title'    => 'Options',
            'menu_title'    => 'Options',
            'menu_slug'     => 'options',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));
    endif;
}

// Register Custom Post Type
function post_type_souvenirs() {
    $labels = array(
        'name' => __('Souvenirs'),
        'singular_name' => __('Souvenirs'),
        'add_new' => __('Add Souvenir'),
        'add_new_item' => __('Add Souvenirs'),
        'edit_item' => __('Edit Souvenirs'),
        'new_item' => __('New Souvenirs'),
        'view_item' => __('View Souvenirs'),
        'search_items' => __('Search Souvenirs'),
        'not_found' =>  __('Nothing found'),
        'not_found_in_trash' => __('Nothing found in Trash'),
        'parent_item_colon' => ''
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_in_nav_menus' => false,
        'show_ui' => true,
        'query_var' => true,
        //'rewrite' => false,
        //'rewrite' => array( 'slug' => 'news', 'with_front' => true ),
        'capability_type' => 'post',
        'hierarchical' => false,
        'has_archive' => true,
        /*'menu_icon' => get_template_directory_uri() . '/assets/img/icon-testimonial.png',*/
        'exclude_from_search' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'page-attributes')
      );

    register_post_type( 'souvenirs' , $args );
}


add_action( 'init', 'theme_taxonomies' );
function theme_taxonomies() {

    register_taxonomy('souvenirs_category', 'souvenirs',
        array(
            'hierarchical' => true,
            'show_admin_column' => true,
            'label' => __('Category'),
            'show_ui' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'souvenirs/category'),
            'singular_label' => __('Souvenirs Category')
        )
    );
    
    register_taxonomy('souvenirs_tag', 'souvenirs',
        array(
            'hierarchical' => false,
            'show_admin_column' => true,
            'label' => __('Tag'),
            'show_ui' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'souvenirs/tag'),
            'singular_label' => __('Souvenirs Tag')
        )
    );
}

function wptp_add_tags_to_attachments() {
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );
}
add_action( 'init' , 'wptp_add_tags_to_attachments' );
?>
