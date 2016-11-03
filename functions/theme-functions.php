<?php

add_action('login_enqueue_scripts', 'my_login_logo' );
add_filter('login_headerurl', 'my_login_logo_url' );
add_filter('login_headertitle', 'my_login_logo_url_title' );

function my_login_logo() 
{ 
    $logo = get_field('logo_image', 'option');
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

