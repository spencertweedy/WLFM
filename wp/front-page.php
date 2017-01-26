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
 * @subpackage Twenty_Seventeen
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
            <div><div class="live">LIVE</div><span class="show">Hella Eloquent*</span></div>
            <div><a href="#">View full schedule</a> <a href="#">Download stream &rarr;</a>
            <span class="probably">*probably</span></div>
        </div>

        <script type="text/javascript" defer>
            var audioPlayer = document.getElementById('audio-host');
            var audioButton = document.getElementById('audio-button');
            var audioContainer = document.getElementById('audio-player');
            audioContainer.className = "yesJS";
            function audioToggle() {
                if (audioPlayer.paused) {
                    audioPlayer.play();
                    audioButton.className = "pause";
                } else {
                    audioPlayer.pause();
                    audioButton.className = "play";
                }
            }
        </script>
    </div>

<?php get_footer();
