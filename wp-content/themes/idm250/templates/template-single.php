<?php
/*
Template Name: Single Page
*/

get_header(); ?>

<main class="single-main">
    <?php if (have_posts()): ?>
    <?php // TO SHOW THE PAGE CONTENTS?>
    <?php while (have_posts()) : the_post(); ?>
    <div class="single-header">
        <h1><?php the_title();?></h1>
        <h3>Mobile Ordering App Design</h3>
        <h3><?php the_date('m/d/Y');?></h3>
        <h3><?php the_category( ' ' ); ?></h3>
    </div>
    <?php the_post_thumbnail('Portfolio')?>

        <div class="single-section">
            <?php the_content(); ?>
        </div>
    <?php endwhile;?>
    <?php wp_reset_query();?>
    <?php else: ?>
    <?php endif; ?>
</main>

<?php get_footer(); ?>