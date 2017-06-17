<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

function sgsc_programs_hero () {
	if ( ! is_page_template( 'page-programs.php' ) || is_tax( 'program-type' ) ) {
		return;
	}
	
	$hero = CFS()->get( 'program_image' );		
	$program_hero = "
		.program-hero {
			background-image: url($hero);
		}";

	wp_add_inline_style( 'red-starter-style', $program_hero );
}

add_action ( 'wp_enqueue_scripts', 'sgsc_programs_hero' );

<<<<<<< HEAD
=======


/**
 * Changing the number of posts per page on Archive-Gallery
 */

function sgsc_modify_archive_queries( $query ) {
    if ( is_post_type_archive( 'gallery' )  || $query->is_tax( 'featured-gallery' )&& !is_admin() && $query->is_main_query() ) {
        $query->set( 'posts_per_page', 8);
				$query->set( 'orderby', 'date' );
				$query->set ( 'order', 'ASC' );
		}
}
add_action( 'pre_get_posts', 'sgsc_modify_archive_queries' );


/**
 * change to sgsc login logo
 */
function sgsc_login_logo() {
     echo '<style type="text/css">         
         h1 a {
					 background-image:url('.get_stylesheet_directory_uri().'/assets/images/desktop-logo.svg) !important; 
					 height: 220px !important; 
					 background-position: center !important; 
					 background-size: contain !important; 
					 width: 100% !important;} 

				#login .button.button-primary {
					background-color: #f5a623;
					text-shadow: none;
					border: #f5a623;
					box-shadow: none;}                           
     </style>';
		 
}
add_action('login_head', 'sgsc_login_logo');

/**
 * SGSC login logo url
 */

function sgsc_login_logo_url( $url ) {
	return home_url();
}
add_filter( 'login_headerurl', 'sgsc_login_logo_url' );

/**
 * sgsc login logo tile
 */

function sgsc_login_title( ) {
	return 'South Granvillge Senior Center';
}
add_filter( 'login_headertitle', 'sgsc_login_title' );
>>>>>>> gallery
