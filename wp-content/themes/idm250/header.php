<!doctype html>
<html>
<head>
<!-- Basic Page Needs
    ================================================== -->
<meta charset="utf-8">
<!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php the_title();?> | IDM250</title>

<!-- Fontstyle -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<link href="https://fonts.googleapis.com/css?family=Radley" rel="stylesheet">

<!-- Javascript
================================================== -->
<script type="text/javascript" src="/dist/js/responsive_navbar.js"></script>

<!-- Stylesethe
================================================== -->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/dist/css/general.css">
<link rel="stylesheet" type="text/css"  href="<?php echo get_template_directory_uri(); ?>/dist/css/style.css">

<!-- Open Wordpress Header Code -->
<?php wp_head(); ?>
<!-- Close Wordpress Header Code -->

</head>

<body <?php body_class('single');?>
<header id="menutop"> 
  
  <!-- Navigation
    ==========================================-->
  <nav id="top-menu" class="navbar navbar-default navbar-fixed-top"> 
    
    <!--Header top-->
    <div class="grid">

        <div class="menu">
            <button class="hb-button">
                <img src="dist/resources/threelines.png" alt="menu">
            </button>
        </div>
        <div class="logo">
            <p>Yuang Li</p>
            <img src="dist/resources/signature2.png" alt="logo">
        </div>
        <div class="search" onclick="location.href='search.html';">
            <a href="index.html">
                <img src="dist/resources/cancel.png" alt="cross">
            </a>
        </div>
        <div class="ph"></div>

        <nav>
            <ul>
                <li>
                    <a href="index.html">about me</a>
                </li>
                <li>
                    <a href="gallery.html">gallery</a>
                </li>
                <li>
                    <a href="experience.html">experience</a>
                </li>
                <li>
                    <a href="musing.html">musings</a>
                </li>
                <li>
                    <a href="contact.html">contact</a>
                </li>
            </ul>
        </nav>
    <!--/Header top-->
</header>