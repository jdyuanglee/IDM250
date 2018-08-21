<?php 
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 */

get_header(); ?>

        <main>
            <div class="searchbar">
                <form class="search-container" action="404.html">
                    <input type="text" id="search-bar" placeholder="Search...">
                    <a href="404.html">
                        <img class="search-icon" src="resources/magnify.png">
                    </a>
                </form>
            </div>
            <hr>
            <div class="searchResult">
                <p>Page not found. Please check your spelling and content.</p>
            </div>
        </main>

<?php get_footer(); ?>