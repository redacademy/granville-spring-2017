<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package SGSC_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function sgsc_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'sgsc_body_classes' );


//program hero
function sgsc_programs_hero () {
	if ( ! is_page_template ( 'page-programs.php' )) {
		return;
	}
	
	$hero = CFS()->get( 'program_image' );
	$program_hero = "
		.program-hero {
			background-image: url($hero);
		}";
	wp_add_inline_style( 'sgsc-style', $program_hero );
}

add_action ( 'wp_enqueue_scripts', 'sgsc_programs_hero' );



/**
 * Changing the number of posts per page on Archive-Gallery
 */

function sgsc_modify_archive_queries( $query ) {
    if ( is_post_type_archive( 'gallery' ) && !is_admin() && $query->is_main_query() ) {
        $query->set( 'posts_per_page', 8);
				$query->set( 'orderby', 'date' );
				$query->set ( 'order', 'DESC' );
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
					 height: 160px !important; 
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

/**
 * Remove Post (index.php) Categories and Tags
 */
function myprefix_remove_tax() {
    register_taxonomy('category', array());
    register_taxonomy('post_tag', array());
}
add_action('init', 'myprefix_remove_tax');

/**
 * sgsc front-page hero image
 */
function home_background() {
 wp_enqueue_style(
	'custom-style',
	get_template_directory_uri() . '/build/css/style.min.css'
	);
	$background = CFS()->get( 'background_image' ); 
	$custom_css = "
		.learn-about-story{
			background: url({$background}), no-repeat;
		background-size: cover, cover;
    background-position: center center;
		}";
	wp_add_inline_style( 'custom-style', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'home_background' );

// change program taxonomy titles

function sgsc_change_archive_titles( $title ) {
		if( is_tax( 'program-type' )) {
			$title = single_term_title('', false);
		}
		return $title;
};

add_filter( 'get_the_archive_title', 'sgsc_change_archive_titles');

// hide previous events

add_filter('tribe_events_pre_get_posts', 'filter_tribe_all_occurences', 100);

function filter_tribe_all_occurences ($wp_query) {

	if ( !is_admin() )  {

		$new_meta = array();
		$today = new DateTime();

		// Join with existing meta_query
		if(is_array($wp_query->meta_query))
			$new_meta = $wp_query->meta_query;

		// Add new meta_query, select events ending from now forward
		$new_meta[] = array(
			'key' => '_EventEndDate',
			'type' => 'DATETIME',
			'compare' => '>=',
			'value' => $today->format('Y-m-d H:i:s')
		);

		$wp_query->set( 'meta_query', $new_meta );
	}

	return $wp_query;
}

// sort program taxonomies
function program_type_sort() {
	$program_types = get_terms(array (
		'taxonomy' => 'program-type',
		'hide_empty' => false
		)); 

	foreach($program_types as $key => $val) {

		if($val->slug == 'information') {
			$item = $program_types[$key];
			unset($program_types[$key]);
			array_push($program_types, $item); 
			break;
		}
	}
}
