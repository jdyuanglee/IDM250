<!doctype html>
<html>
<head>
<!-- Basic Page Needs
    ================================================== -->
<meta charset="utf-8">
<!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php the_title();?> | IDM250</title>
<!-- Open Wordpress Header Code -->
<?php wp_head(); ?>
<!-- Close Wordpress Header Code -->
</head>

<body <?php body_class('single');?> >
<header>
    <!--Header top-->
    <div class="header">

        <div class="menu">
            <button class="hb-button">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/resources/threelines.png" alt="menu">
            </button>
        </div>
        <div class="logo">
            <p>Yuang Li</p>
            <img src="<?php echo get_template_directory_uri(); ?>/dist/resources/signature2.png" alt="logo">
        </div>
        <div class="magnify">
        <?php 
          /**
           * Will first attempt to locate the searchform.php file in either the child or the parent, then load it.
           * If it doesn’t exist, then the default search form will be displayed.
           * The default search form is HTML, which will be displayed.
           * There is a filter applied to the search form HTML in order to edit or replace it. The filter is ‘get_search_form’.
           * This will automatically go to /search. You can edit this template by creating a search.php.
           *
           * @link https://developer.wordpress.org/reference/functions/get_search_form/
           *
           */
          get_search_form();
          ?>       
        </div>
        <div class="ph"></div>
    
        <nav>
        <?php
            wp_nav_menu([
                'theme_location'  => 'main',
                'container'       => 'ul',
                'menu_class'      => '',
            ]);
        ?>
        </nav>
        
    <!--/Header top-->
</header>