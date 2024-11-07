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
				<div class="footer-top-right">
					<div class="footer-top-search">
						<?php get_search_form(); ?>
					</div>
					<div class="footer-top-links">
						<?php
						// Define your theme locations.
						$first_menu_location = 'footer-newsletter';
						$second_menu_location = 'footer-terms&conditions';

						// Initialize variables to store the last links.
						$first_last_link = '';
						$second_last_link = '';

						// Get the last link from the first menu location.
						if (($locations = get_nav_menu_locations()) && isset($locations[$first_menu_location])) {
							$first_menu = wp_get_nav_menu_object($locations[$first_menu_location]);
							$first_menu_items = wp_get_nav_menu_items($first_menu->term_id);

							if (!empty($first_menu_items)) {
								$first_last_item = end($first_menu_items);
								$first_last_link = '<a href="' . esc_url($first_last_item->url) . '">' . esc_html($first_last_item->title) . '</a>';
							}
						}

						// Get the last link from the second menu location.
						if (isset($locations[$second_menu_location])) {
							$second_menu = wp_get_nav_menu_object($locations[$second_menu_location]);
							$second_menu_items = wp_get_nav_menu_items($second_menu->term_id);

							if (!empty($second_menu_items)) {
								$second_last_item = end($second_menu_items);
								$second_last_link = '<a href="' . esc_url($second_last_item->url) . '">' . esc_html($second_last_item->title) . '</a>';
							}
						}
						?>
						<img class="footer-top-link-image" src="<?php echo get_template_directory_uri().'/image/Pweza.png' ?>">
						<p class="footer-top-link-text">signup for our <?php echo $first_last_link; ?> or view our <?php echo $second_last_link; ?>.</p>

					</div>
				</div>
			</div>
		</div>
		<div class="site-info">
			<div class="site-info-copyright">
				<p class="site-info-copyright-text">&copy;<?php echo date('Y');?> Pweza. All Rights Reserved.</p>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
