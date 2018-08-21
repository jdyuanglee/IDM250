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
    <h1>Year of the dog</h1>
    <h5>Date and time</h5>
    <p>Sagittis fringilla montes mollis dapibus ad nec leo faucibus facilisis, platea semper pellentesque maecenas posuere
        dolor consectetur at nascetur pulvinar, orci porttitor tellus purus mattis adipiscing mauris convallis.</p>
    <img src="resources/yearofthedog.png" alt="title">
    <p>Sociosqu phasellus tempus leo eros ultrices venenatis fusce pulvinar imperdiet eu, ut sociis consectetur habitant
        orci rhoncus vel dui.</p>
    <p>Molestie lectus aenean ultrices.</p>
    <p>Mollis pulvinar neque nisl volutpat sagittis nec inceptos ullamcorper aptent eros, venenatis class fermentum
        ut nibh augue dui placerat auctor tincidunt, non ante id nisi commodo dis aliquam dictumst rhoncus.</p>
    <p>Sociosqu phasellus tempus leo eros ultrices venenatis fusce pulvinar imperdiet eu, ut sociis consectetur habitant
        orci rhoncus vel dui.</p>
    <ul>
        <li>#YearOfTheDog</li>
        <li>#LunarNewYear</li>
        <li>#GongXiFaCai</li>
    </ul>
</main>

<aside>
    <hr>
    <h1>
        BLOG
    </h1>
    <hr>
    <div class="section">
        <h3>Why is important</h3>
        <p>Musing is one of the important part of my creation and studys. It is about a period of reflection or thought
            to refresh myself and trash some of the minds.</p>
    </div>
    <div class="section">
        <h3>Recent Posts</h3>
        <ul>
            <li>Schmear It</li>
            <li>Year of the dog</li>
            <li>How a bunch of lava lamps protect us from hackers</li>
        </ul>
    </div>
    <div class="section">
        <h3>Tags</h3>
        <ul>
            <li>Tech</li>
            <li>Games</li>
            <li>UI/UX</li>
            <li>WebDev</li>
            <li>App</li>
            <li>SIGGRAPH</li>
        </ul>
    </div>
    <div class="section">
            <h3>Recomandation</h3>
            <div class="recomand">
                <a href="single.html">
                    <img src="resources/bunch.png" alt="bunch">
                </a>
                <a href="single.html">
                    <p>How a Bunch of Lava Lamps Protect Us From Hackers</p>
                </a>
            </div>
            <div class="recomand">
                <a href="single.html">
                    <img src="resources/blueair.png" alt="blueair">
                </a>
                <a href="single.html">
                    <p>Breathe Easy With This Wi-Fi-Enabled Air Purifier</p>
                </a>
            </div>
        </div>
</aside>

<?php get_footer(); ?>