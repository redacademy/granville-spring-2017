<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Register Custom Post Type
function gallery_post_type() {

	$labels = array(
		'name'                  => 'galleries',
		'singular_name'         => 'gallery',
		'menu_name'             => 'gallery',
		'name_admin_bar'        => 'gallery',
		'archives'              => 'gallery Archives',
		'attributes'            => 'gallery Attributes',
		'parent_item_colon'     => 'gallery Item:',
		'all_items'             => 'All Items',
		'add_new_item'          => 'Add New gallery',
		'add_new'               => 'Add New',
		'new_item'              => 'New gallery',
		'edit_item'             => 'Edit gallery',
		'update_item'           => 'Update gallery',
		'view_item'             => 'View gallery',
		'view_items'            => 'View galleries',
		'search_items'          => 'Search gallery',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into gallery',
		'uploaded_to_this_item' => 'Uploaded to this gallery',
		'items_list'            => 'galleries list',
		'items_list_navigation' => 'galleriess list navigation',
		'filter_items_list'     => 'Filter galleries list',
	);
	$args = array(
		'label'                 => 'gallery',
		'description'           => 'Gallery Custom Post Type',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-gallery',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'gallery', $args );

}
add_action( 'init', 'gallery_post_type', 0 );