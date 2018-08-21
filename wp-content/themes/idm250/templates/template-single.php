<?php
/*
Template Name: Single
*/

get_header(); ?>

<main>
    <div class="header">
        <h1><?php the_title();?></h1>
        <h3><?php the_title();?></h3>
        <h3><?php the_date('m/d/Y');?></h3>
        <h3>
            <?php
            $categoires = get_the_category();
            ?>
            <?php foreach($categoires as $category): ?>
            <a href="<?php echo get_category_link($category); ?>"><?php echo $category -> name?></a>
            <?php endforeach; ?>
        </h3>
    </div>
    <?php   
    if(has_post_thumbnail()): ?>
    <?php the_post_thumbnail('full', ['class' => 'img-responsive']);?>
    <?php else: ?>
    <img src="https://via.placeholder.com/1280x720" alt="">
    <?php endif;?>
    
    <div class="section">
    <?php // TO SHOW THE PAGE CONTENTS?>
    <?php while (have_posts()) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
        <?php the_content(); ?> <!-- Page Content (WYSIWYG Field) -->
    <?php endwhile; //resetting the page loop?>
    <?php wp_reset_query(); //resetting the page query?>
    </div>
    
</main>

<?php get_footer(); ?>