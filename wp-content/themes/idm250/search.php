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
        <img src="resources/schmearit.png" alt="resultimg">
        <div class="result">
            <a href="single.html">
                <h3>Schmear It Mobile App</h3>
            </a>
            <h5>June 2nd, 2018</h5>
            <p>Over the past 10 weeks our group has been working closely with Schmear It and their customers to create
                a brand new mobile ordering experience. We conducted primary research, went through multiple rounds
                of ideation and user testing...</p>
        </div>
    </div>
    <hr>
    <div class="searchResult">
        <div class="result">
            <a href="single.html">
                <h3>Cinnamon Bagel</h3>
            </a>
            <p>Cinnamon Sugar Bagels {with Whipped Honey Cinnamon Cream Cheese. One of my favorites is a cinnamon sugar
                bagel. These bagels have cinnamon in the base and a cinnamon sugar swirl that is mixed throughout.
                To make the flavor even richer, a cinnamon sugar glaze lightly covers the tops of them.</p>
        </div>
    </div>
    <hr>
</main>

<?php get_footer(); ?>