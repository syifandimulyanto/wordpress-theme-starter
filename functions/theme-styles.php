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
        wp_enqueue_script('jquery', get_stylesheet_directory_uri().'/js/jquery-1.11.1.min.js', array(), THEME_VERSION, true);
        wp_enqueue_style('wp-style', get_stylesheet_directory_uri().'/style.css', array(), THEME_VERSION, 'all');

    }
}
add_action( 'init', 'theme_enqueue_scripts', 100 );

// Load ph conditional scripts
function theme_conditional_scripts()
{
}
add_action('wp_print_scripts', 'theme_conditional_scripts'); // Add Conditional Page Scripts
?>
