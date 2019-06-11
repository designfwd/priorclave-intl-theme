<?php
if( !function_exists('autoclave_post_type') ):
  function autoclave_post_type() {
    $labels = array(
      'name'                  => _x( 'Autoclaves', 'Post Type General Name', 'priorclave' ),
      'singular_name'         => _x( 'Autoclave', 'Post Type Singular Name', 'priorclave' ),
      'menu_name'             => __( 'Autoclaves', 'priorclave' ),
      'name_admin_bar'        => __( 'Autoclave', 'priorclave' ),
      'archives'              => __( 'Autoclave Archives', 'priorclave' ),
      'attributes'            => __( 'Autoclave Attributes', 'priorclave' ),
      'parent_item_colon'     => __( 'Parent Autoclave:', 'priorclave' ),
      'all_items'             => __( 'All Autoclaves', 'priorclave' ),
      'add_new_item'          => __( 'Add New Autoclave', 'priorclave' ),
      'add_new'               => __( 'Add New', 'priorclave' ),
      'new_item'              => __( 'New Autoclave', 'priorclave' ),
      'edit_item'             => __( 'Edit Autoclave', 'priorclave' ),
      'update_item'           => __( 'Update Autoclave', 'priorclave' ),
      'view_item'             => __( 'View Autoclave', 'priorclave' ),
      'view_items'            => __( 'View Autoclaves', 'priorclave' ),
      'search_items'          => __( 'Search Autoclave', 'priorclave' ),
      'not_found'             => __( 'Not found', 'priorclave' ),
      'not_found_in_trash'    => __( 'Not found in Trash', 'priorclave' ),
      'featured_image'        => __( 'Featured Image', 'priorclave' ),
      'set_featured_image'    => __( 'Set featured image', 'priorclave' ),
      'remove_featured_image' => __( 'Remove featured image', 'priorclave' ),
      'use_featured_image'    => __( 'Use as featured image', 'priorclave' ),
      'insert_into_item'      => __( 'Insert into autoclave', 'priorclave' ),
      'uploaded_to_this_item' => __( 'Uploaded to this autoclave', 'priorclave' ),
      'items_list'            => __( 'Autoclaves list', 'priorclave' ),
      'items_list_navigation' => __( 'Autoclaves list navigation', 'priorclave' ),
      'filter_items_list'     => __( 'Filter autoclaves list', 'priorclave' ),
    );
    $args = array(
      'label'                 => __( 'Autoclave', 'priorclave' ),
      'description'           => __( 'Autoclave Post Type', 'priorclave' ),
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
      'has_archive'           => false,
      'exclude_from_search'   => true,
      'publicly_queryable'    => true,
      'capability_type'       => 'post',
      'show_in_rest'          => true,
    );
    register_post_type( 'autoclave', $args );
  }
  add_action( 'init', 'autoclave_post_type', 0 );
endif;


// Post type specific to parent site on multisite setup
if( !function_exists('distributor_post_type') && is_multisite() && (get_current_blog_id() == 1) ):
  function distributor_post_type() {
    $labels = array(
      'name'                  => _x( 'Distributors', 'Post Type General Name', 'priorclave' ),
      'singular_name'         => _x( 'Distributor', 'Post Type Singular Name', 'priorclave' ),
      'menu_name'             => __( 'Distributors', 'priorclave' ),
      'name_admin_bar'        => __( 'Distributors', 'priorclave' ),
      'archives'              => __( 'Distributor Archives', 'priorclave' ),
      'attributes'            => __( 'Distributor Attributes', 'priorclave' ),
      'parent_item_colon'     => __( 'Parent Distributor:', 'priorclave' ),
      'all_items'             => __( 'All Distributors', 'priorclave' ),
      'add_new_item'          => __( 'Add New Distributor', 'priorclave' ),
      'add_new'               => __( 'Add New', 'priorclave' ),
      'new_item'              => __( 'New Distributor', 'priorclave' ),
      'edit_item'             => __( 'Edit Distributor', 'priorclave' ),
      'update_item'           => __( 'Update Distributor', 'priorclave' ),
      'view_item'             => __( 'View Distributor', 'priorclave' ),
      'view_items'            => __( 'View Distributors', 'priorclave' ),
      'search_items'          => __( 'Search Distributor', 'priorclave' ),
      'not_found'             => __( 'Not found', 'priorclave' ),
      'not_found_in_trash'    => __( 'Not found in Trash', 'priorclave' ),
      'featured_image'        => __( 'Featured Image', 'priorclave' ),
      'set_featured_image'    => __( 'Set featured image', 'priorclave' ),
      'remove_featured_image' => __( 'Remove featured image', 'priorclave' ),
      'use_featured_image'    => __( 'Use as featured image', 'priorclave' ),
      'insert_into_item'      => __( 'Insert into distributor', 'priorclave' ),
      'uploaded_to_this_item' => __( 'Uploaded to this distributor', 'priorclave' ),
      'items_list'            => __( 'Distributors list', 'priorclave' ),
      'items_list_navigation' => __( 'Distributors list navigation', 'priorclave' ),
      'filter_items_list'     => __( 'Filter distributors list', 'priorclave' ),
    );
    $args = array(
      'label'                 => __( 'Distributor', 'priorclave' ),
      'description'           => __( 'Distributor Description', 'priorclave' ),
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
      'has_archive'           => false,
      'exclude_from_search'   => true,
      'publicly_queryable'    => true,
      'capability_type'       => 'page',
    );
    register_post_type( 'distributor', $args );
  }
  add_action( 'init', 'distributor_post_type', 0 );
endif;


if( !function_exists('badges_post_type') ):
  function badges_post_type() {
    $labels = array(
      'name'                  => _x( 'Badges', 'Post Type General Name', 'priorclave' ),
      'singular_name'         => _x( 'Badge', 'Post Type Singular Name', 'priorclave' ),
      'menu_name'             => __( 'Badges', 'priorclave' ),
      'name_admin_bar'        => __( 'Badges', 'priorclave' ),
      'archives'              => __( 'Badge Archives', 'priorclave' ),
      'attributes'            => __( 'Badge Attributes', 'priorclave' ),
      'parent_item_colon'     => __( 'Parent Badge:', 'priorclave' ),
      'all_items'             => __( 'All Badges', 'priorclave' ),
      'add_new_item'          => __( 'Add New Badge', 'priorclave' ),
      'add_new'               => __( 'Add New', 'priorclave' ),
      'new_item'              => __( 'New Badge', 'priorclave' ),
      'edit_item'             => __( 'Edit Badge', 'priorclave' ),
      'update_item'           => __( 'Update Badge', 'priorclave' ),
      'view_item'             => __( 'View Badge', 'priorclave' ),
      'view_items'            => __( 'View Badges', 'priorclave' ),
      'search_items'          => __( 'Search Badge', 'priorclave' ),
      'not_found'             => __( 'Not found', 'priorclave' ),
      'not_found_in_trash'    => __( 'Not found in Trash', 'priorclave' ),
      'featured_image'        => __( 'Featured Image', 'priorclave' ),
      'set_featured_image'    => __( 'Set featured image', 'priorclave' ),
      'remove_featured_image' => __( 'Remove featured image', 'priorclave' ),
      'use_featured_image'    => __( 'Use as featured image', 'priorclave' ),
      'insert_into_item'      => __( 'Insert into badge', 'priorclave' ),
      'uploaded_to_this_item' => __( 'Uploaded to this badge', 'priorclave' ),
      'items_list'            => __( 'Badges list', 'priorclave' ),
      'items_list_navigation' => __( 'Badges list navigation', 'priorclave' ),
      'filter_items_list'     => __( 'Filter badges list', 'priorclave' ),
    );
    $args = array(
      'label'                 => __( 'Badge', 'priorclave' ),
      'description'           => __( 'Credibility Indicators', 'priorclave' ),
      'labels'                => $labels,
      'supports'              => array( 'title' ),
      'hierarchical'          => false,
      'public'                => true,
      'show_ui'               => true,
      'show_in_menu'          => true,
      'menu_position'         => 15,
      'menu_icon'             => 'dashicons-awards',
      'show_in_admin_bar'     => false,
      'show_in_nav_menus'     => false,
      'can_export'            => true,
      'has_archive'           => false,
      'exclude_from_search'   => true,
      'publicly_queryable'    => true,
      'capability_type'       => 'page',
    );
    register_post_type( 'badges', $args );
  }
  add_action( 'init', 'badges_post_type', 0 );
endif;


if( !function_exists('testimonials_post_type') ):
  function testimonials_post_type() {
    $labels = array(
      'name'                  => _x( 'Testimonials', 'Post Type General Name', 'priorclave' ),
      'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'priorclave' ),
      'menu_name'             => __( 'Testimonials', 'priorclave' ),
      'name_admin_bar'        => __( 'Testimonials', 'priorclave' ),
      'archives'              => __( 'Testimonial Archives', 'priorclave' ),
      'attributes'            => __( 'Testimonial Attributes', 'priorclave' ),
      'parent_item_colon'     => __( 'Parent Testimonial:', 'priorclave' ),
      'all_items'             => __( 'All Testimonials', 'priorclave' ),
      'add_new_item'          => __( 'Add New Testimonial', 'priorclave' ),
      'add_new'               => __( 'Add New', 'priorclave' ),
      'new_item'              => __( 'New Testimonial', 'priorclave' ),
      'edit_item'             => __( 'Edit Testimonial', 'priorclave' ),
      'update_item'           => __( 'Update Testimonial', 'priorclave' ),
      'view_item'             => __( 'View Testimonial', 'priorclave' ),
      'view_items'            => __( 'View Testimonials', 'priorclave' ),
      'search_items'          => __( 'Search Testimonial', 'priorclave' ),
      'not_found'             => __( 'Not found', 'priorclave' ),
      'not_found_in_trash'    => __( 'Not found in Trash', 'priorclave' ),
      'featured_image'        => __( 'Featured Image', 'priorclave' ),
      'set_featured_image'    => __( 'Set featured image', 'priorclave' ),
      'remove_featured_image' => __( 'Remove featured image', 'priorclave' ),
      'use_featured_image'    => __( 'Use as featured image', 'priorclave' ),
      'insert_into_item'      => __( 'Insert into testimonial', 'priorclave' ),
      'uploaded_to_this_item' => __( 'Uploaded to this testimonial', 'priorclave' ),
      'items_list'            => __( 'Testimonials list', 'priorclave' ),
      'items_list_navigation' => __( 'Testimonials list navigation', 'priorclave' ),
      'filter_items_list'     => __( 'Filter testimonials list', 'priorclave' ),
    );
    $args = array(
      'label'                 => __( 'Testimonial', 'priorclave' ),
      'description'           => __( 'Customer Testimonials', 'priorclave' ),
      'labels'                => $labels,
      'supports'              => array( 'title' ),
      'hierarchical'          => false,
      'public'                => true,
      'show_ui'               => true,
      'show_in_menu'          => true,
      'menu_position'         => 15,
      'menu_icon'             => 'dashicons-thumbs-up',
      'show_in_admin_bar'     => false,
      'show_in_nav_menus'     => false,
      'can_export'            => true,
      'has_archive'           => false,
      'exclude_from_search'   => true,
      'publicly_queryable'    => true,
      'capability_type'       => 'page',
    );
    register_post_type( 'testimonials', $args );
  }
  add_action( 'init', 'testimonials_post_type', 0 );
endif;


if ( ! function_exists('product_options_post_type') ):
  function product_options_post_type() {
    $labels = array(
      'name'                  => _x( 'Product Options', 'Post Type General Name', 'priorclave' ),
      'singular_name'         => _x( 'Product Option', 'Post Type Singular Name', 'priorclave' ),
      'menu_name'             => __( 'Product Options', 'priorclave' ),
      'name_admin_bar'        => __( 'Product Option', 'priorclave' ),
      'archives'              => __( 'Product Option Archives', 'priorclave' ),
      'attributes'            => __( 'Product Option Attributes', 'priorclave' ),
      'parent_item_colon'     => __( 'Parent Product Option:', 'priorclave' ),
      'all_items'             => __( 'All Product Options', 'priorclave' ),
      'add_new_item'          => __( 'Add New Product Option', 'priorclave' ),
      'add_new'               => __( 'Add New', 'priorclave' ),
      'new_item'              => __( 'New Product Option', 'priorclave' ),
      'edit_item'             => __( 'Edit Product Option', 'priorclave' ),
      'update_item'           => __( 'Update Product Option', 'priorclave' ),
      'view_item'             => __( 'View Product Option', 'priorclave' ),
      'view_items'            => __( 'View Product Options', 'priorclave' ),
      'search_items'          => __( 'Search Product Option', 'priorclave' ),
      'not_found'             => __( 'Not found', 'priorclave' ),
      'not_found_in_trash'    => __( 'Not found in Trash', 'priorclave' ),
      'featured_image'        => __( 'Featured Image', 'priorclave' ),
      'set_featured_image'    => __( 'Set featured image', 'priorclave' ),
      'remove_featured_image' => __( 'Remove featured image', 'priorclave' ),
      'use_featured_image'    => __( 'Use as featured image', 'priorclave' ),
      'insert_into_item'      => __( 'Insert into product option', 'priorclave' ),
      'uploaded_to_this_item' => __( 'Uploaded to this product option', 'priorclave' ),
      'items_list'            => __( 'Product Options list', 'priorclave' ),
      'items_list_navigation' => __( 'Product Options list navigation', 'priorclave' ),
      'filter_items_list'     => __( 'Filter items list', 'priorclave' ),
    );
    $args = array(
      'label'                 => __( 'Product Option', 'priorclave' ),
      'description'           => __( 'Product Options', 'priorclave' ),
      'labels'                => $labels,
      'supports'              => array( 'title' ),
      'hierarchical'          => false,
      'public'                => true,
      'show_ui'               => true,
      'show_in_menu'          => true,
      'menu_position'         => 15,
      'menu_icon'             => 'dashicons-portfolio',
      'show_in_admin_bar'     => false,
      'show_in_nav_menus'     => false,
      'can_export'            => true,
      'has_archive'           => false,
      'exclude_from_search'   => true,
      'publicly_queryable'    => true,
      'capability_type'       => 'post',
      'show_in_rest'          => true,
    );
    register_post_type( 'product_option', $args );
  }
  add_action( 'init', 'product_options_post_type', 0 );
endif;

if( ! function_exists('faq_post_type') ):
  function faq_post_type() {
    $labels = array(
      'name'                  => _x( 'FAQs', 'Post Type General Name', 'priorclave' ),
      'singular_name'         => _x( 'FAQ', 'Post Type Singular Name', 'priorclave' ),
      'menu_name'             => __( 'FAQs', 'priorclave' ),
      'name_admin_bar'        => __( 'FAQ', 'priorclave' ),
      'archives'              => __( 'FAQ Archives', 'priorclave' ),
      'attributes'            => __( 'FAQ Attributes', 'priorclave' ),
      'parent_item_colon'     => __( 'Parent FAQ:', 'priorclave' ),
      'all_items'             => __( 'All FAQs', 'priorclave' ),
      'add_new_item'          => __( 'Add New FAQ', 'priorclave' ),
      'add_new'               => __( 'Add FAQ', 'priorclave' ),
      'new_item'              => __( 'New FAQ', 'priorclave' ),
      'edit_item'             => __( 'Edit FAQ', 'priorclave' ),
      'update_item'           => __( 'Update FAQ', 'priorclave' ),
      'view_item'             => __( 'View FAQ', 'priorclave' ),
      'view_items'            => __( 'View FAQs', 'priorclave' ),
      'search_items'          => __( 'Search FAQ', 'priorclave' ),
      'not_found'             => __( 'Not found', 'priorclave' ),
      'not_found_in_trash'    => __( 'Not found in Trash', 'priorclave' ),
      'featured_image'        => __( 'Featured Image', 'priorclave' ),
      'set_featured_image'    => __( 'Set featured image', 'priorclave' ),
      'remove_featured_image' => __( 'Remove featured image', 'priorclave' ),
      'use_featured_image'    => __( 'Use as featured image', 'priorclave' ),
      'insert_into_item'      => __( 'Insert into FAQ', 'priorclave' ),
      'uploaded_to_this_item' => __( 'Uploaded to this FAQ', 'priorclave' ),
      'items_list'            => __( 'FAQs list', 'priorclave' ),
      'items_list_navigation' => __( 'FAQs list navigation', 'priorclave' ),
      'filter_items_list'     => __( 'Filter FAQs list', 'priorclave' ),
    );
    $args = array(
      'label'                 => __( 'FAQ', 'priorclave' ),
      'description'           => __( 'Frequently asked questions', 'priorclave' ),
      'labels'                => $labels,
      'supports'              => array( 'title','editor' ),
      'taxonomies'            => array( 'subject' ),
      'hierarchical'          => false,
      'public'                => true,
      'show_ui'               => true,
      'show_in_menu'          => true,
      'menu_position'         => 15,
      'menu_icon'             => 'dashicons-lightbulb',
      'show_in_admin_bar'     => true,
      'show_in_nav_menus'     => false,
      'can_export'            => true,
      'has_archive'           => false,
      'exclude_from_search'   => true,
      'publicly_queryable'    => true,
      'capability_type'       => 'page',
      'show_in_rest'          => true,
    );
    register_post_type( 'faq', $args );
  }
  add_action( 'init', 'faq_post_type', 0 );
endif;

if (!function_exists('download_post_type')):
    function download_post_type()
{
        $labels = array(
            'name' => _x('Downloads', 'Post Type General Name', 'priorclave'),
            'singular_name' => _x('Download', 'Post Type Singular Name', 'priorclave'),
            'menu_name' => __('Downloads', 'priorclave'),
            'name_admin_bar' => __('Download', 'priorclave'),
            'archives' => __('Download Archives', 'priorclave'),
            'attributes' => __('Download Attributes', 'priorclave'),
            'parent_item_colon' => __('Parent Download:', 'priorclave'),
            'all_items' => __('All Downloads', 'priorclave'),
            'add_new_item' => __('Add New Download', 'priorclave'),
            'add_new' => __('Add Download', 'priorclave'),
            'new_item' => __('New Download', 'priorclave'),
            'edit_item' => __('Edit Download', 'priorclave'),
            'update_item' => __('Update Download', 'priorclave'),
            'view_item' => __('View Download', 'priorclave'),
            'view_items' => __('View Downloads', 'priorclave'),
            'search_items' => __('Search Download', 'priorclave'),
            'not_found' => __('Not found', 'priorclave'),
            'not_found_in_trash' => __('Not found in Trash', 'priorclave'),
            'featured_image' => __('Featured Image', 'priorclave'),
            'set_featured_image' => __('Set featured image', 'priorclave'),
            'remove_featured_image' => __('Remove featured image', 'priorclave'),
            'use_featured_image' => __('Use as featured image', 'priorclave'),
            'insert_into_item' => __('Insert into Download', 'priorclave'),
            'uploaded_to_this_item' => __('Uploaded to this Download', 'priorclave'),
            'items_list' => __('Downloads list', 'priorclave'),
            'items_list_navigation' => __('Downloads list navigation', 'priorclave'),
            'filter_items_list' => __('Filter Downloads list', 'priorclave'),
        );
        $args = array(
            'label' => __('Download', 'priorclave'),
            'description' => __('Downloads', 'priorclave'),
            'labels' => $labels,
            'supports' => array('title', 'editor'),
            'taxonomies' => array('download'),
            'hierarchical' => true,
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => 15,
            'menu_icon' => 'dashicons-lightbulb',
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => false,
            'can_export' => true,
            'has_archive' => false,
            'exclude_from_search' => true,
            'publicly_queryable' => true,
            'capability_type' => 'page',
            'show_in_rest' => true,
        );
        register_post_type('downloads', $args);
    }
    add_action('init', 'download_post_type', 0);
endif;
