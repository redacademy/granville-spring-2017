<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<script src="https://use.fontawesome.com/aff976956a.js"></script>

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header container" role="banner">
				<div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				</div><!-- .site-branding -->

				<div class="logo">
					<a href="<?php echo get_home_url(); ?>" rel="home">
						<img class="logo-img" src ="<?php echo get_template_directory_uri(); ?>/assets/images/desktop-logo.svg"/>
					</a>
					<img src ="<?php echo get_template_directory_uri(); ?>/assets/images/desktop-logo-text.svg"/>
				</div>

				<section class="menu">
					<nav id="site-navigation" class="main-navigation" role="navigation">
						<button class="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></button>
						<div class="overlay overlay-slidedown">
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu-visible' ) ); ?>
						</div>
					</nav>
					<div>
						<?php get_search_form() ?>
					</div>
				</section>
			</header><!-- #masthead -->

			<div id="content" class="site-content">
