<?php 
$searched_string = $_GET['s'];
get_header(); ?>

<main>
<div class="search">
<main class="search-main">
    <div class="searchbar">
            <form class="search-container">
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
            get_search_form()
            ?>
            <!-- <a href="404.html">
                <img class="search-icon" src="resources/magnify.png">
            </a> -->
            </form>
    </div>
    <?php if($searched_string): ?>
    <?php if (have_posts()) : ?>
    <hr>
    <?php while (have_posts()) : the_post(); ?>
    <div class="search-result">

                <?php
                  // Check to see if the post has a featured image
                  if (has_post_thumbnail()): ?>
                    <?php the_post_thumbnail();?>
                    <?php else: ?>
                    <img src="https://placehold.it/1280x720" alt="">
                    <?php endif; ?>

            <div class="result">
                <?php 
                // Get categories associated with this post
                $categories = get_the_category();
                ?>      
            <a href="<?php the_permalink(); ?>">
                <h2>
                    <?php the_title()?>
                </h2>
            </a>
            <h5><?php the_date();?></h5>
            
        </header>
        <p>
            <?php the_excerpt(); ?>
            <?php function wpdocs_custom_excerpt_length( $length ) {
                 return 20;
            }
            add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );?>
        </p>
        </div>
    </div>
    <!--/article-->
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
    <?php else : ?>
    <p>
        <?php echo 'Sorry, no posts matched your criteria.'; ?>
    </p>
    <?php endif; ?> 
    <?php endif; ?> 
</main>

<?php get_footer(); ?>