<?php
/**
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage WLFM
 * @since 1.0
 * @version 1.0
 */

?>
		</main>
		
		<footer>
			<h2><?php bloginfo( 'description' ); ?></h2>

			<?php
				wp_nav_menu( array(
					'theme_location' => 'footer-menu',
					'container'      => 'nav'
				) );
			?>
		</footer>
<?php wp_footer(); ?>
	</div><!-- #wrapper -->

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
</body>
</html>
