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
 *
 * @package WordPress
 * @subpackage WLFM
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

	<div id="audio-player">
        <div class="col">
            <button id="audio-button" name="Play/pause audio" onclick="audioToggle();return false;">Play/pause audio</button>
        </div>

        <div class="col">
            <audio id="audio-host" src="http://wlfm.lawrence.edu:8000/live">Your browser does not support the audio element.</audio>
            <noscript><div>Please enable Javascript for a better audio player experience.</div></noscript>
            <div>
                <div class="live">LIVE</div>
                <span class="show">Great Midwest Trivia Contest LII</span> <!-- Temporarily hard-coded title; later it'll draw from a YAML file or something -->
            </div>
            <div>
                <a href="http://wlfmradio.lawrence.edu/wp-content/uploads/2016/09/WLFM-Fall-2016-schedule.pdf">View full schedule</a>
                <a href="http://wlfm.lawrence.edu:8000/live">Download stream</a>
                <!-- <span class="probably">*probably</span> --> 
            </div>
        </div>
    </div>

<?php get_footer();
