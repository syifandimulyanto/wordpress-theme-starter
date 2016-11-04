<?php

add_action('login_enqueue_scripts', 'my_login_logo' );
add_filter('login_headerurl', 'my_login_logo_url' );
add_filter('login_headertitle', 'my_login_logo_url_title' );

function my_login_logo() 
{ 
    ?>
    <style type="text/css">
        .login h1 a {
            background-image: url(<?php echo $logo['url'] ?>)!important;
            width: 100%!important;
            background-size: 100%!important;
        }
    </style>
    <?php 
}

function my_login_logo_url() 
{
    return home_url();
}

function my_login_logo_url_title() 
{
    return 'Mister Aladin';
}

function site_custom_image($fieldname)
{
    $logo = get_field($fieldname, 'option');
    return $logo['url'];
}

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
add_action('init', 'general_option');
// add_action('init', 'post_type_accommodation');
add_action('init', 'post_type_souvenirs');
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
        'supports' => array('title','lorem', 'editor', 'thumbnail', 'excerpt', 'page-attributes')
      );

    register_post_type( 'souvenirs' , $args );
}

add_action('init', 'post_type_storys');
function post_type_storys() {
    $labels = array(
        'name' => __('Storys'),
        'singular_name' => __('Storys'),
        'add_new' => __('Add Story'),
        'add_new_item' => __('Add Storys'),
        'edit_item' => __('Edit Storys'),
        'new_item' => __('New Storys'),
        'view_item' => __('View Storys'),
        'search_items' => __('Search Storys'),
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

    register_post_type( 'storys' , $args );
}

add_action('init', 'post_type_whatwedo');
// Register Custom Post Type
function post_type_whatwedo() {
    $labels = array(
        'name' => __('Whatwedo'),
        'singular_name' => __('Whatwedo'),
        'add_new' => __('Add Whatwedo'),
        'add_new_item' => __('Add Whatwedo'),
        'edit_item' => __('Edit Whatwedo'),
        'new_item' => __('New Whatwedo'),
        'view_item' => __('View Whatwedo'),
        'search_items' => __('Search Whatwedo'),
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
        'supports' => array('title','lorem', 'editor', 'thumbnail', 'excerpt', 'page-attributes')
      );

    register_post_type( 'whatwedo' , $args );
}
add_action('init', 'post_type_testimonial');
// Register Custom Post Type
function post_type_testimonial() {
    $labels = array(
        'name' => __('Testimonial'),
        'singular_name' => __('Testimonial'),
        'add_new' => __('Add Testimonial'),
        'add_new_item' => __('Add Testimonial'),
        'edit_item' => __('Edit Testimonial'),
        'new_item' => __('New Testimonial'),
        'view_item' => __('View Testimonial'),
        'search_items' => __('Search Testimonial'),
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
        'supports' => array('title','lorem', 'editor', 'thumbnail', 'excerpt', 'page-attributes')
      );

    register_post_type( 'testimonial' , $args );
}


add_action('init', 'post_type_happyclient');
// Register Custom Post Type
function post_type_happyclient() {
    $labels = array(
        'name' => __('Happyclient'),
        'singular_name' => __('Happyclient'),
        'add_new' => __('Add Happyclient'),
        'add_new_item' => __('Add Happyclient'),
        'edit_item' => __('Edit Happyclient'),
        'new_item' => __('New Happyclient'),
        'view_item' => __('View Happyclient'),
        'search_items' => __('Search Happyclient'),
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
        'supports' => array('title','lorem', 'editor', 'thumbnail', 'excerpt', 'page-attributes')
      );

    register_post_type( 'happyclient' , $args );
}

add_action('init', 'post_type_blog');
// Register Custom Post Type
function post_type_blog() {
    $labels = array(
        'name' => __('Blog'),
        'singular_name' => __('Blog'),
        'add_new' => __('Add Blog'),
        'add_new_item' => __('Add Blog'),
        'edit_item' => __('Edit Blog'),
        'new_item' => __('New Blog'),
        'view_item' => __('View Blog'),
        'search_items' => __('Search Blog'),
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
        'supports' => array('title','lorem', 'editor', 'thumbnail', 'excerpt', 'page-attributes')
      );

    register_post_type( 'blog' , $args );
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

add_action( 'init', 'storys_taxonomies' );
function storys_taxonomies() {

    register_taxonomy('storys_category', 'storys',
        array(
            'hierarchical' => true,
            'show_admin_column' => true,
            'label' => __('Category'),
            'show_ui' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'storys/category'),
            'singular_label' => __('Storys Category')
        )
    );
    
    register_taxonomy('storys_tag', 'storys',
        array(
            'hierarchical' => false,
            'show_admin_column' => true,
            'label' => __('Tag'),
            'show_ui' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'storys/tag'),
            'singular_label' => __('Storys Tag')
        )
    );
}

add_action( 'init', 'testimonial_taxonomies' );
function testimonial_taxonomies() {

    register_taxonomy('testimonial_category', 'testimonial',
        array(
            'hierarchical' => true,
            'show_admin_column' => true,
            'label' => __('Category'),
            'show_ui' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'testimonial/category'),
            'singular_label' => __('Testimonial Category')
        )
    );
    
    register_taxonomy('testimonial_tag', 'testimonial',
        array(
            'hierarchical' => false,
            'show_admin_column' => true,
            'label' => __('Tag'),
            'show_ui' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'testimonial/tag'),
            'singular_label' => __('Testimonial Tag')
        )
    );
}

add_action( 'init', 'whatwedo_taxonomies' );
function whatwedo_taxonomies() {

    register_taxonomy('whatwedo_category', 'whatwedo',
        array(
            'hierarchical' => true,
            'show_admin_column' => true,
            'label' => __('Category'),
            'show_ui' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'whatwedo/category'),
            'singular_label' => __('Whatwedo Category')
        )
    );
    
    register_taxonomy('whatwedo_tag', 'whatwedo',
        array(
            'hierarchical' => false,
            'show_admin_column' => true,
            'label' => __('Tag'),
            'show_ui' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'whatwedo/tag'),
            'singular_label' => __('Whatwedo Tag')
        )
    );
}

add_action( 'init', 'happyclient_taxonomies' );
function happyclient_taxonomies() {

    register_taxonomy('happyclient_category', 'happyclient',
        array(
            'hierarchical' => true,
            'show_admin_column' => true,
            'label' => __('Category'),
            'show_ui' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'happyclient/category'),
            'singular_label' => __('Happyclient Category')
        )
    );
    
    register_taxonomy('happyclient_tag', 'happyclient',
        array(
            'hierarchical' => false,
            'show_admin_column' => true,
            'label' => __('Tag'),
            'show_ui' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'happyclient/tag'),
            'singular_label' => __('Happyclient Tag')
        )
    );
}

add_action( 'init', 'blog_taxonomies' );
function blog_taxonomies() {

    register_taxonomy('blog_category', 'blog',
        array(
            'hierarchical' => true,
            'show_admin_column' => true,
            'label' => __('Category'),
            'show_ui' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'blog/category'),
            'singular_label' => __('Blog Category')
        )
    );
    
    register_taxonomy('blog_tag', 'blog',
        array(
            'hierarchical' => false,
            'show_admin_column' => true,
            'label' => __('Tag'),
            'show_ui' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'blog/tag'),
            'singular_label' => __('Blog Tag')
        )
    );
}

add_action('init', 'post_type_work');
function post_type_work() {
    $labels = array(
        'name' => __('Work'),
        'singular_name' => __('Work'),
        'add_new' => __('Add Work'),
        'add_new_item' => __('Add Work'),
        'edit_item' => __('Edit Work'),
        'new_item' => __('New Work'),
        'view_item' => __('View Work'),
        'search_items' => __('Search Work'),
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

    register_post_type( 'work' , $args );
}

add_action( 'init', 'theme_work' );
function theme_work() {

    register_taxonomy('work_category', 'work',
        array(
            'hierarchical' => true,
            'show_admin_column' => true,
            'label' => __('Category'),
            'show_ui' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'work/category'),
            'singular_label' => __('work Category')
        )
    );

    register_taxonomy('work_tag', 'work',
        array(
            'hierarchical' => false,
            'show_admin_column' => true,
            'label' => __('Tag'),
            'show_ui' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'work/tag'),
            'singular_label' => __('Work Tag')
        )
    );
    
}

//=============================Begin Services CRUD==================================
add_action('init', 'post_type_services');
function post_type_services() {
    $labels = array(
        'name' => __('Services'),
        'singular_name' => __('Services'),
        'add_new' => __('Add Services'),
        'add_new_item' => __('Add Services'),
        'edit_item' => __('Edit Services'),
        'new_item' => __('New Services'),
        'view_item' => __('View Services'),
        'search_items' => __('Search Services'),
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

    register_post_type( 'services' , $args );
}

add_action( 'init', 'theme_services' );
function theme_services() {

    register_taxonomy('services_category', 'services',
        array(
            'hierarchical' => true,
            'show_admin_column' => true,
            'label' => __('Category'),
            'show_ui' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'services/category'),
            'singular_label' => __('Services Category')
        )
    );
    
    register_taxonomy('services_tag', 'services',
        array(
            'hierarchical' => false,
            'show_admin_column' => true,
            'label' => __('Tag'),
            'show_ui' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'services/tag'),
            'singular_label' => __('Services Tag')
        )
    );
}
//============================End Services CRUD================================



//=============================Begin Our Team CRUD==================================
add_action('init', 'post_type_ourteam');
function post_type_ourteam() {
    $labels = array(
        'name' => __('Our Team'),
        'singular_name' => __('Our Team'),
        'add_new' => __('Add Team'),
        'add_new_item' => __('Add The Team'),
        'edit_item' => __('Edit Team'),
        'new_item' => __('New Team'),
        'view_item' => __('View Team'),
        'search_items' => __('Search Team'),
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

    register_post_type( 'team' , $args );
}

add_action( 'init', 'theme_team' );
function theme_team() {

    register_taxonomy('team_category', 'team',
        array(
            'hierarchical' => true,
            'show_admin_column' => true,
            'label' => __('Position'),
            'show_ui' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'team/category'),
            'singular_label' => __('team Category')
        )
    );
    
}





//============================End Our Team CRUD================================


//=============================Begin Brand CRUD==================================
add_action('init', 'post_type_brand');
function post_type_brand() {
    $labels = array(
        'name' => __('Brand'),
        'singular_name' => __('Brand'),
        'add_new' => __('Add Brand'),
        'add_new_item' => __('Add Brand'),
        'edit_item' => __('Edit Brand'),
        'new_item' => __('New Brand'),
        'view_item' => __('View Brand'),
        'search_items' => __('Search Brand'),
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

    register_post_type( 'brand' , $args );
}

add_action( 'init', 'theme_brand' );
function theme_brand() {

    register_taxonomy('brand_category', 'brand',
        array(
            'hierarchical' => true,
            'show_admin_column' => true,
            'label' => __('Category'),
            'show_ui' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'brand/category'),
            'singular_label' => __('brand Category')
        )
    );
    
}

//============================End Brand CRUD================================

function wptp_add_tags_to_attachments() {
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );
}
add_action( 'init' , 'wptp_add_tags_to_attachments' );

