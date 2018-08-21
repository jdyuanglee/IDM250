<?php

// Theme will only work for WordPress 4.9.6 or later.
if (version_compare($GLOBALS['wp_version'], '4.9.6', '<')) {
    die('This theme only works in WordPress 4.9.6 or later. ');
}

/**
 * This function will register the navigation menus.
 * You can call display the menu by calling wp_nav_menu() in your templates
 *
 * @link https://developer.wordpress.org/reference/functions/wp_nav_menu/
 * @method register_nav_menus
 */
function register_menus()
{
    register_nav_menus([
        'main_menu'   => __('Main Navigation'),
        'footer_menu' => __('Footer Navigation'),
    ]);
}

/**
 * Register our sidebars and widgets into our theme
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */
function register_widgets()
{
    register_sidebar([
        'name'          => 'Blog Sidebar',
        'id'            => 'sidebar',
    ]);
}
add_action('widgets_init', 'register_widgets');

add_action('init', 'register_menus');

function load_theme_assets(){
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/dist/css/style.css');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js');
    wp_enqueue_script('menu', get_template_directory_uri() . '/dist/js/responsive_navbar.js ');
}
add_action('wp_enqueue_scripts', 'load_theme_assests');

/**
 * Add post thumbnail support to theme
 * @link https://codex.wordpress.org/Post_Thumbnails
 */
add_theme_support('post-thumbnails');
/**
 * Change the default "default template" name given for wordpress.
 * @link https://codex.wordpress.org/Plugin_API/Filter_Reference/default_page_template_title
 */
add_filter('default_page_template_title', function () {
    return __('Full Width (General Styles)');
});


add_action('widgets_init', 'register_widgets');

add_theme_support('post-thumbnails');
    
add_filter('default_page_template_title', function(){
    return __('Full Width (General Styles)');
});

add_action('wp_enqueue_scripts', 'load_theme_assets');

add_action('init', 'register_menus');


add_image_size( 'Portfolio', 320, 320, false);