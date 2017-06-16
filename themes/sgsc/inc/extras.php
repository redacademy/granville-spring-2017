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
			background: url($hero) bottom/cover no-repeat;
			height: 13rem;
		}";

	wp_add_inline_style( 'red-starter-style', $program_hero );
}

add_action ( 'wp_enqueue_scripts', 'sgsc_programs_hero' );