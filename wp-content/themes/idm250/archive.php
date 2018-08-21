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
    <div class="archive">
        <a href="single.html">
            <img src="resources/schmearit.png" alt="title">
        </a>
        <a href="single.html">
            <h1>Schmear It Mobile App</h1>
        </a>
        <h5>June 2nd, 2018</h5>
        <p>Over the past 10 weeks our group has been working closely with Schmear It and their customers to create a
            brand new mobile ordering experience. We conducted primary research, went through multiple rounds of
            ideation and user testing, and ultimately created a final interactive mockup in Sketch and Flinto. Through
            this process we learned the importance of collaboration, user testing, team meetings, and understanding
            business requirements. We are extremely pleased with the final application and hope Schmear It’s users
            love it as well.</p>
        <ul>
            <li>#UI / UX</li>
            <li>#Coursework</li>
            <li>#Mircointeraction</li>
            <li>#Sketch</li>
            <li>#Flinto</li>
        </ul>
    </div>
    <div class="archive">
        <a href="single.html">
            <img src="resources/LavaLamps.jpg" alt="title">
        </a>
        <a href="single.html">
            <h1>How a Bunch of Lava Lamps Protect Us From Hackers</h1>
        </a>
        <h5>April 19th, 2018</h5>
        <p>#MondayMotivation: #CNY celebrations are like a marathon not a sprint. Keep up the festive momentum and celebrate
            with the #CNY emoji using the below hashtags from now until Mar 2nd. </p>
        <ul>
            <li>#Tech</li>
            <li>#Research</li>
            <li>#News</li>
        </ul>
    </div>
    <div class="archive">
        <a href="single.html">
            <img src="resources/yearofthedog.png" alt="title">
        </a>
        <a href="single.html">
            <h1>Year of the dog</h1>
        </a>
        <h5>Date and time</h5>
        <p>Edward Craven Walker lived to see his greatest invention, the lava lamp, make its late-’90s cultural comeback.
            But the British tinkerer (and famed nudist, incidentally) died before he could witness the 21st-­century
            digital potential of his analog creation. Inside the San Francisco office of the web security company
            Cloudflare, 100 units of Craven Walker’s groovy hardware help protect wide swaths of the internet from
            infiltration.
        </p>
        <ul>
            <li>#YearOfTheDog</li>
            <li>#LunarNewYear</li>
            <li>#GongXiFaCai</li>
        </ul>
    </div>
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