<?php 
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 */
get_header(); ?>

<div class="archive-grid">
        <main class="archive-main">
            <?php if (have_posts()): ?>
            <?php // TO SHOW THE PAGE CONTENTS?>
            <?php while (have_posts()) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
            <div class="archive-content">
                <a href="<?php the_permalink(); ?>">
                    <h1><?php the_title(); ?></h1> 
                </a>
                <p><?php the_excerpt(); ?></p>
            </div>
                <?php endwhile; //resetting the page loop?>
                <?php wp_reset_query(); //resetting the page query?>
            <?php else: ?>
                <h2>Sorry, No Post Found</h2>
            <?php endif; ?>
        </main>


        <aside class="archive-aside">
            <h1><?php echo get_the_archive_title(); ?></h1>
            <div class="archive-section">
                <h3>Archives by month</h3>
                <ul>    
                    <?php
                        $arg = [
                            'type' => 'monthly'
                        ];
                        wp_get_archives($arg);
                    ?>
                </ul>
            </div>
            <div class="archive-section">
                <h3>Archives by Year</h3>
                <ul>    
                    <?php
                        $arg = [
                            'type' => 'yearly'
                        ];
                        wp_get_archives($arg);
                    ?>
                </ul>
            </div>
            <div class="archive-section">
            <h3>Archives by categories</h3>
            <ul>    
                <?php
                $categories = get_categories();
                foreach ($categories as $category): ?>
                <li><a href="<?php echo get_category_link($category); ?>"><?php echo $category->name ?></a></li>
                <?php endforeach; ?>
            </ul>
            </div>
        </aside>
</div>
<?php get_footer(); ?>