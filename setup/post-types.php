<?php

if ( ! function_exists('autoclave_post_type') ) {

// Register Custom Post Type
function autoclave_post_type() {

	$labels = array(
		'name'                  => _x( 'Autoclaves', 'Post Type General Name', 'bellhop' ),
		'singular_name'         => _x( 'Autoclave', 'Post Type Singular Name', 'bellhop' ),
		'menu_name'             => __( 'Autoclaves', 'bellhop' ),
		'name_admin_bar'        => __( 'Autoclave', 'bellhop' ),
		'archives'              => __( 'Autoclave Archives', 'bellhop' ),
		'attributes'            => __( 'Autoclave Attributes', 'bellhop' ),
		'parent_item_colon'     => __( 'Parent Autoclave:', 'bellhop' ),
		'all_items'             => __( 'All Autoclaves', 'bellhop' ),
		'add_new_item'          => __( 'Add New Autoclave', 'bellhop' ),
		'add_new'               => __( 'Add New', 'bellhop' ),
		'new_item'              => __( 'New Autoclave', 'bellhop' ),
		'edit_item'             => __( 'Edit Autoclave', 'bellhop' ),
		'update_item'           => __( 'Update Autoclave', 'bellhop' ),
		'view_item'             => __( 'View Autoclave', 'bellhop' ),
		'view_items'            => __( 'View Autoclaves', 'bellhop' ),
		'search_items'          => __( 'Search Autoclave', 'bellhop' ),
		'not_found'             => __( 'Not found', 'bellhop' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'bellhop' ),
		'featured_image'        => __( 'Featured Image', 'bellhop' ),
		'set_featured_image'    => __( 'Set featured image', 'bellhop' ),
		'remove_featured_image' => __( 'Remove featured image', 'bellhop' ),
		'use_featured_image'    => __( 'Use as featured image', 'bellhop' ),
		'insert_into_item'      => __( 'Insert into autoclave', 'bellhop' ),
		'uploaded_to_this_item' => __( 'Uploaded to this autoclave', 'bellhop' ),
		'items_list'            => __( 'Autoclaves list', 'bellhop' ),
		'items_list_navigation' => __( 'Autoclaves list navigation', 'bellhop' ),
		'filter_items_list'     => __( 'Filter autoclaves list', 'bellhop' ),
	);
	$args = array(
		'label'                 => __( 'Autoclave', 'bellhop' ),
		'description'           => __( 'Autoclave Post Type', 'bellhop' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'custom-fields' ),
		'taxonomies'            => array( 'uses', 'materials', 'orientation', 'capacity', 'heating' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 20,
		'menu_icon'             => 'dashicons-analytics',
		'show_in_admin_bar'     => false,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
	);
	register_post_type( 'autoclave', $args );

}
add_action( 'init', 'autoclave_post_type', 0 );

}


if ( ! function_exists('distributor_post_type') && is_multisite() && (get_current_blog_id() == 1) ) {

function distributor_post_type() {

	$labels = array(
		'name'                  => _x( 'Distributors', 'Post Type General Name', 'bellhop' ),
		'singular_name'         => _x( 'Distributor', 'Post Type Singular Name', 'bellhop' ),
		'menu_name'             => __( 'Distributors', 'bellhop' ),
		'name_admin_bar'        => __( 'Distributors', 'bellhop' ),
		'archives'              => __( 'Distributor Archives', 'bellhop' ),
		'attributes'            => __( 'Distributor Attributes', 'bellhop' ),
		'parent_item_colon'     => __( 'Parent Distributor:', 'bellhop' ),
		'all_items'             => __( 'All Distributors', 'bellhop' ),
		'add_new_item'          => __( 'Add New Distributor', 'bellhop' ),
		'add_new'               => __( 'Add New', 'bellhop' ),
		'new_item'              => __( 'New Distributor', 'bellhop' ),
		'edit_item'             => __( 'Edit Distributor', 'bellhop' ),
		'update_item'           => __( 'Update Distributor', 'bellhop' ),
		'view_item'             => __( 'View Distributor', 'bellhop' ),
		'view_items'            => __( 'View Distributors', 'bellhop' ),
		'search_items'          => __( 'Search Distributor', 'bellhop' ),
		'not_found'             => __( 'Not found', 'bellhop' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'bellhop' ),
		'featured_image'        => __( 'Featured Image', 'bellhop' ),
		'set_featured_image'    => __( 'Set featured image', 'bellhop' ),
		'remove_featured_image' => __( 'Remove featured image', 'bellhop' ),
		'use_featured_image'    => __( 'Use as featured image', 'bellhop' ),
		'insert_into_item'      => __( 'Insert into distributor', 'bellhop' ),
		'uploaded_to_this_item' => __( 'Uploaded to this distributor', 'bellhop' ),
		'items_list'            => __( 'Distributors list', 'bellhop' ),
		'items_list_navigation' => __( 'Distributors list navigation', 'bellhop' ),
		'filter_items_list'     => __( 'Filter distributors list', 'bellhop' ),
	);
	$args = array(
		'label'                 => __( 'Distributor', 'bellhop' ),
		'description'           => __( 'Distributor Description', 'bellhop' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'taxonomies'            => array( 'region', 'country' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 20,
		'menu_icon'             => 'dashicons-id-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'distributor', $args );

}
add_action( 'init', 'distributor_post_type', 0 );

}
