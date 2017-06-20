<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Register Custom Post Type
function gallery_post_type() {

	$labels = array(
		'name'                  => 'Galleries',
		'singular_name'         => 'Gallery',
		'menu_name'             => 'Gallery',
		'name_admin_bar'        => 'Gallery',
		'archives'              => 'Gallery Archives',
		'attributes'            => 'Gallery Attributes',
		'parent_item_colon'     => 'Gallery Parent Item:',
		'all_items'             => 'All Galleries',
		'add_new_item'          => 'Add New Gallery',
		'add_new'               => 'Add New',
		'new_item'              => 'New Gallery',
		'edit_item'             => 'Edit Gallery',
		'update_item'           => 'Update Gallery',
		'view_item'             => 'View Gallery',
		'view_items'            => 'View Galleries',
		'search_items'          => 'Search Gallery',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into Gallery',
		'uploaded_to_this_item' => 'Uploaded to this Gallery',
		'items_list'            => 'Galleries list',
		'items_list_navigation' => 'Galleriess list navigation',
		'filter_items_list'     => 'Filter Galleries list',
	);
	$args = array(
		'label'                 => 'Gallery',
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

// Register Custom Post Type
function events_post_type() {

	$labels = array(
		'name'                  => 'Events',
		'singular_name'         => 'Event',
		'menu_name'             => 'Events',
		'name_admin_bar'        => 'Event',
		'archives'              => 'Event Archives',
		'attributes'            => 'Event Attributes',
		'parent_item_colon'     => 'Parent Event:',
		'all_items'             => 'All Events',
		'add_new_item'          => 'Add New Event',
		'add_new'               => 'Add New',
		'new_item'              => 'New Event',
		'edit_item'             => 'Edit Event',
		'update_item'           => 'Update Event',
		'view_item'             => 'View Event',
		'view_items'            => 'View Events',
		'search_items'          => 'Search Event',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into event',
		'uploaded_to_this_item' => 'Uploaded to this event',
		'items_list'            => 'Events list',
		'items_list_navigation' => 'Events list navigation',
		'filter_items_list'     => 'Filter events list',
	);
	$args = array(
		'label'                 => 'Event',
		'description'           => 'A calendar',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-calendar',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'events', $args );

}
add_action( 'init', 'events_post_type', 0 );

// Register Custom Post Type
function custom_program() {

	$labels = array(
		'name'                  => 'Programs',
		'singular_name'         => 'Program',
		'menu_name'             => 'Programs',
		'name_admin_bar'        => 'Program',
		'archives'              => 'Program Archives',
		'attributes'            => 'Program Attributes',
		'parent_item_colon'     => 'Parent Program:',
		'all_items'             => 'All Programs',
		'add_new_item'          => 'Add New Program',
		'add_new'               => 'Add New',
		'new_item'              => 'New Program',
		'edit_item'             => 'Edit Program',
		'update_item'           => 'Update Program',
		'view_item'             => 'View Program',
		'view_items'            => 'View Programs',
		'search_items'          => 'Search Program',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into program',
		'uploaded_to_this_item' => 'Uploaded to this program',
		'items_list'            => 'Programs list',
		'items_list_navigation' => 'Programs list navigation',
		'filter_items_list'     => 'Filter programs list',
	);
	$args = array(
		'label'                 => 'Program',
		'description'           => 'A recurring program or event',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-carrot',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'program', $args );

}
add_action( 'init', 'custom_program', 0 );

// Volunteer Position Post Type
function volunteer_post_type() {

	$labels = array(
		'name'                  => 'Volunteers',
		'singular_name'         => 'Volunteer',
		'menu_name'             => 'Volunteer',
		'name_admin_bar'        => 'Volunteer',
		'archives'              => 'Volunteer Archives',
		'attributes'            => 'Volunteer Attributes',
		'parent_item_colon'     => 'Volunteer Parent Item:',
		'all_items'             => 'All Volunteers',
		'add_new_item'          => 'Add New Volunteer',
		'add_new'               => 'Add New',
		'new_item'              => 'New Volunteer',
		'edit_item'             => 'Edit Volunteer',
		'update_item'           => 'Update Volunteer',
		'view_item'             => 'View Volunteer',
		'view_items'            => 'View Volunteer',
		'search_items'          => 'Search Volunteer',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into Volunteer',
		'uploaded_to_this_item' => 'Uploaded to this Volunteer',
		'items_list'            => 'Volunteer list',
		'items_list_navigation' => 'Volunteer list navigation',
		'filter_items_list'     => 'Filter Volunteer list',
	);
	$args = array(
		'label'                 => 'Volunteer',
		'description'           => 'Volunteer Positions',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'revisions', ),
		'taxonomies'            => array( 'volunteer' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-nametag',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'volunteer', $args );

}
add_action( 'init', 'volunteer_post_type', 0 );