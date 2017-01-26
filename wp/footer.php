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
</body>
</html>
