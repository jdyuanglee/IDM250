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
    <div class="address">
        <p> Address</p><p>3141 Chestnut St, Philadelphia, PA, 19104</p>
        <br>
        <p>
            <div class="maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3058.3193286835017!2d-75.19213278453108!3d39.95661267942138!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c6c64e4847c029%3A0xef32de4043c30f0!2sDrexel+University!5e0!3m2!1sen!2sus!4v1521773219117"
                width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </p>
    </div>

    <div class="phone">
        <br>
        <p>Phone</p>
        <p>(+1) 215-316-4783</p>
    </div>

</main>

<?php get_footer(); ?>