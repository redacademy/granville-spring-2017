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
