<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pweza
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'pweza' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="header-message-container"></div>
		<nav class="navigation-container">
			<div class="navigation-desktop">
				<div class="navigation-desktop-left-container">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'header-menu-left',
							'menu_class'     => 'custom-menu-class', // Add your own class for styling
							'container'      => 'menu',               // Container element, e.g., 'div', 'nav'
							'container_class'=> 'menu-container', // Class for the container
						) );
					?>
				</div>
				<div class="navigation-desktop-logo-container">
					<a href="#" class="navigation-desktop-logo-link">
						<img class="navigation-desktop-logo-image" src="<?php echo get_template_directory_uri().'/image/Pweza Full.png'; ?>">
					</a>
				</div>
				<div class="navigation-desktop-search-container"></div>
				<div class="navigation-desktop-right-container">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'header-menu-right',
							'menu_class'     => 'custom-menu-class', // Add your own class for styling
							'container'      => 'menu',               // Container element, e.g., 'div', 'nav'
							'container_class'=> 'menu-container', // Class for the container
						) );
					?>
				</div>
			</div>
		</nav>
	</header><!-- #masthead -->
