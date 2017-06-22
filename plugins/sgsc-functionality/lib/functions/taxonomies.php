<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

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
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'program-type', array( 'program' ), $args );

}
add_action( 'init', 'Program_Types', 0 );

