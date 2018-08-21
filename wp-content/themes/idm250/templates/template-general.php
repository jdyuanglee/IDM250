<?php
/*
Template Name: General Style Template
*/

get_header(); ?>

<main>
    <h1 style="text-align:center ;"><?php the_title();?></h1>
    
    <div class="section">
    <?php?>
    <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile;?>
    <?php wp_reset_query();?>
    </div>
    
</main>

<?php get_footer(); ?>