<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pweza
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="footer-top-conainer">
			<div class="footer-top">
				<div class="footer-top-left">
					<div class="footer-item">
						<p class="footer-item-header">About</p>
						<?php
						wp_nav_menu( array(
							'theme_location' => 'footer-about',
							'menu_class'     => 'footer-menu', // Add your own class for styling
							'container'      => 'menu',               // Container element, e.g., 'div', 'nav'
							'container_class'=> 'footer-container', // Class for the container
						) );
						?>
					</div>
					<div class="footer-item">
						<p class="footer-item-header">Account</p>
						<?php
						wp_nav_menu( array(
							'theme_location' => 'footer-account',
							'menu_class'     => 'footer-menu', // Add your own class for styling
							'container'      => 'menu',               // Container element, e.g., 'div', 'nav'
							'container_class'=> 'footer-container', // Class for the container
						) );
						?>
					</div>
					<div class="footer-item">
						<p class="footer-item-header">Support</p>
						<?php
						wp_nav_menu( array(
							'theme_location' => 'footer-support',
							'menu_class'     => 'footer-menu', // Add your own class for styling
							'container'      => 'menu',               // Container element, e.g., 'div', 'nav'
							'container_class'=> 'footer-container', // Class for the container
						) );
						?>
					</div>
				</div>
				<div class="footer-top-right"></div>
			</div>
		</div>
		<div class="site-info">
			<p>Footer</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
