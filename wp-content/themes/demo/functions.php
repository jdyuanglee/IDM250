<?php

// Theme will only work for WordPress 4.9.6 or later 
if (version_compare($GLOBALS['wp_version'], '4.9.6', '<')){
    die('Your WordPress is so old. Please update to use this theme.');
}

function register_menus(){
    register_nav_menus([
        'main_menu' => __('Main Navigation'),
        'footer_menu' => __('Footer Navigation'),
    ]);    
}

add_action('init', 'register_menus');
?>