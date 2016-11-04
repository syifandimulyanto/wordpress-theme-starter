<?php
/**
 * Javascript & CSS Files
 *
 * Function to load Javascript and CSS 
 * for theme frontend
 */

define( 'THEME_VERSION', '1.0' );

//Load Javascript and CSS for theme

function theme_enqueue_scripts() {
    global $pagenow;

    // Only load these scripts on frontend
    if( !is_admin() && $pagenow != 'wp-login.php' ) {
        // Load JS files
        wp_enqueue_script('jquerya', get_stylesheet_directory_uri().'/js/jquery-1.11.1.js', array(), THEME_VERSION, true);
        wp_enqueue_script('jqueryb', get_stylesheet_directory_uri().'/js/lib/bootstrap.min.js', array(), THEME_VERSION, true);
        wp_enqueue_script('jqueryc', get_stylesheet_directory_uri().'/js/lib/conditionizr-4.3.0.min.js', array(), THEME_VERSION, true);
        wp_enqueue_script('jqueryd', get_stylesheet_directory_uri().'/js/lib/isotope.pkgd.min.js', array(), THEME_VERSION, true);
        wp_enqueue_script('jquerye', get_stylesheet_directory_uri().'/js/lib/jquery.hoverdir.js', array(), THEME_VERSION, true);
        wp_enqueue_script('jqueryf', get_stylesheet_directory_uri().'/js/lib/jquery.mCustomScrollbar.concat.min.js', array(), THEME_VERSION, true);
        // wp_enqueue_script('jqueryg', get_stylesheet_directory_uri().'/js/lib/jquery.min.js', array(), THEME_VERSION, true);
        wp_enqueue_script('jqueryh', get_stylesheet_directory_uri().'/js/lib/jquery.prettyPhoto.js', array(), THEME_VERSION, true);
        wp_enqueue_script('jqueryi', get_stylesheet_directory_uri().'/js/lib/main.js', array(), THEME_VERSION, true);
        wp_enqueue_script('jqueryj', get_stylesheet_directory_uri().'/js/lib/modernizr.custom.97074.js', array(), THEME_VERSION, true);
        wp_enqueue_script('jqueryk', get_stylesheet_directory_uri().'/js/lib/modernizr-2.7.1.min.js', array(), THEME_VERSION, true);
        wp_enqueue_script('jqueryl', get_stylesheet_directory_uri().'/js/lib/unslider-min.js', array(), THEME_VERSION, true);
        wp_enqueue_script('jquerym', get_stylesheet_directory_uri().'/js/lib/wow.min.js', array(), THEME_VERSION, true);

        wp_enqueue_style('wp-stylea', get_stylesheet_directory_uri().'/style.css', array(), THEME_VERSION, 'all');
        wp_enqueue_style('wp-styleb', get_stylesheet_directory_uri().'/css/animate.css', array(), THEME_VERSION, 'all');
        wp_enqueue_style('wp-stylec', get_stylesheet_directory_uri().'/css/bootstrap.min.css', array(), THEME_VERSION, 'all');
        wp_enqueue_style('wp-styled', get_stylesheet_directory_uri().'/css/jquery.mCustomScrollbar.min.css', array(), THEME_VERSION, 'all');
        wp_enqueue_style('wp-stylee', get_stylesheet_directory_uri().'/css/materialdesignicons.min.css', array(), THEME_VERSION, 'all');
        wp_enqueue_style('wp-stylef', get_stylesheet_directory_uri().'/css/prettyPhoto.css', array(), THEME_VERSION, 'all'); 
        wp_enqueue_style('wp-styleg', get_stylesheet_directory_uri().'/css/style.css', array(), THEME_VERSION, 'all');   
        wp_enqueue_style('wp-styleh', get_stylesheet_directory_uri().'/css/unslider.css', array(), THEME_VERSION, 'all');    

    }
}
add_action( 'init', 'theme_enqueue_scripts', 100 );

// Load ph conditional scripts
function theme_conditional_scripts()
{
}
add_action('wp_print_scripts', 'theme_conditional_scripts'); // Add Conditional Page Scripts
?>
