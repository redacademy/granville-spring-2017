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



/**
 * Changing the number of posts per page on Archive-Gallery
 */

function inhabitent_modify_archive_queries( $query ) {
    if ( is_post_type_archive( 'gallery' )  || $query->is_tax( 'featured-gallery' )&& !is_admin() && $query->is_main_query() ) {
        // Display 50 posts for a custom post type called 'movie'
        $query->set( 'posts_per_page', 2);
				$query->set( 'orderby', 'title' );
				$query->set ( 'order', 'ASC' );
		}
}
add_action( 'pre_get_posts', 'inhabitent_modify_archive_queries' );