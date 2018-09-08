<?php
/*
Template Name: General with Sidebar Page
*/

$arg = [
  'post_type'     => 'post',
  'post_status'   => 'publish',
  'posts_per_page'=> 999
];
$posts = new WP_Query($arg);

get_header(); ?>

<div class="sidebar-grid">

    <main class="sidebar-main">
      <?php if ($posts->have_posts()) : ?>
            <?php while ($posts->have_posts()) : $posts->the_post(); ?>
            <div class="archive-content">
            <a href="<?php the_permalink(); ?>">
              <?php
              // Check to see if the post has a featured image
              if (has_post_thumbnail()): ?>
                <?php the_post_thumbnail();?>
              <?php else: ?>
                <img src="https://placehold.it/1280x720" alt="">
              <?php endif; ?>
            </a>

            <a href="<?php the_permalink(); ?>">
            <h1><?php the_title()?></h1>          
            </a>

            <h5><?php the_date('Y-m-d');?></h5>
            <p></p> 

            <!-- Get categories associated with this post -->
            <?php 
              $categories = get_the_category();
              ?>
              <p><?php the_excerpt(); ?></p>
              <ul>
                <?php foreach ($categories as $category): ?>
                <li>
                  <a href="<?php echo get_category_link($category); ?>">#<?php echo $category->name ?></a>
                </li>
                <?php endforeach; ?>
              </ul>
              </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
          <?php else : ?>
            <p>
              <?php echo 'Sorry, no posts matched your criteria.'; ?>
            </p>
          <?php endif; ?>  
      </main>     

      <aside class="sidebar-aside">
      <h1><?php the_title(); ?></h1>
        <?php get_sidebar();?>
      </aside>
      
      </div>
<?php get_footer(); ?>
