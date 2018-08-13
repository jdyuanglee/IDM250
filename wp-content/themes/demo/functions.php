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

add_action('init', 'register_menus');

function load_theme_assets(){
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/dist/css/boostrap.css');
}

add_action('wp_enqueue_scripts', 'load_theme_assests');