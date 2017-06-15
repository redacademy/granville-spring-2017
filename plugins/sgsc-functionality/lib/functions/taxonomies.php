<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Add your custom taxonomies here...

// Register Featured Gallery Taxonomy
function featured_gallery_taxonomy() {

	$labels = array(
		'name'                       => 'featured galleries',
		'singular_name'              => 'featured gallery',
		'menu_name'                  => 'featured gallery',
		'all_items'                  => 'All featured galleries',
		'parent_item'                => 'Parent featured gallery',
		'parent_item_colon'          => 'Parent featured gallery:',
		'new_item_name'              => 'New featured gallery',
		'add_new_item'               => 'Add New featured gallery',
		'edit_item'                  => 'Edit featured gallery',
		'update_item'                => 'Update featured gallery',
		'view_item'                  => 'View featured gallery',
		'separate_items_with_commas' => 'Separate featured galleries with commas',
		'add_or_remove_items'        => 'Add or remove featured galleries',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular featured galleries',
		'search_items'               => 'Search featured galleries',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No featured galleries',
		'items_list'                 => 'featured galleries list',
		'items_list_navigation'      => 'featured galleries list navigation',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'featured gallery', array( 'gallery' ), $args );

}
add_action( 'init', 'featured_gallery_taxonomy', 0 );

// Register Custom Taxonomy
function Program_Types() {

	$labels = array(
		'name'                       => _x( 'Program Types', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Program Type', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Program Type', 'text_domain' ),
		'all_items'                  => __( 'All Program Types', 'text_domain' ),
		'parent_item'                => __( 'Parent Program Type', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Program Type:', 'text_domain' ),
		'new_item_name'              => __( 'New Program Type', 'text_domain' ),
		'add_new_item'               => __( 'Add Program Type', 'text_domain' ),
		'edit_item'                  => __( 'Edit Program Type', 'text_domain' ),
		'update_item'                => __( 'Update Program Type', 'text_domain' ),
		'view_item'                  => __( 'View Program Type', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate program types with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove program type', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Program Types', 'text_domain' ),
		'search_items'               => __( 'Search Program Types', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No program types', 'text_domain' ),
		'items_list'                 => __( 'Program Types list', 'text_domain' ),
		'items_list_navigation'      => __( 'Program types list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'program-type', array( 'program' ), $args );

}
add_action( 'init', 'Program_Types', 0 );

