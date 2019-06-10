<?php
if( !function_exists( 'uses_taxonomy' ) ):
  // Register Custom Taxonomy
  function uses_taxonomy() {
    $labels = array(
      'name'                       => _x( 'Uses', 'Taxonomy General Name', 'priorclave' ),
      'singular_name'              => _x( 'Use', 'Taxonomy Singular Name', 'priorclave' ),
      'menu_name'                  => __( 'Uses', 'priorclave' ),
      'all_items'                  => __( 'All Uses', 'priorclave' ),
      'parent_item'                => __( 'Parent Use', 'priorclave' ),
      'parent_item_colon'          => __( 'Parent Use:', 'priorclave' ),
      'new_item_name'              => __( 'New Use Name', 'priorclave' ),
      'add_new_item'               => __( 'Add New Use', 'priorclave' ),
      'edit_item'                  => __( 'Edit Use', 'priorclave' ),
      'update_item'                => __( 'Update Use', 'priorclave' ),
      'view_item'                  => __( 'View Use', 'priorclave' ),
      'separate_items_with_commas' => __( 'Separate uses with commas', 'priorclave' ),
      'add_or_remove_items'        => __( 'Add or remove uses', 'priorclave' ),
      'choose_from_most_used'      => __( 'Choose from the most used', 'priorclave' ),
      'popular_items'              => __( 'Popular Uses', 'priorclave' ),
      'search_items'               => __( 'Search Uses', 'priorclave' ),
      'not_found'                  => __( 'Not Found', 'priorclave' ),
      'no_terms'                   => __( 'No uses', 'priorclave' ),
      'items_list'                 => __( 'Uses list', 'priorclave' ),
      'items_list_navigation'      => __( 'Uses list navigation', 'priorclave' ),
    );
    $args = array(
      'labels'                     => $labels,
      'hierarchical'               => false,
      'public'                     => true,
      'show_ui'                    => true,
      'show_admin_column'          => true,
      'show_in_nav_menus'          => true,
      'show_tagcloud'              => false,
      'show_in_rest'               => true,
    );
    register_taxonomy( 'uses', array( 'autoclave' ), $args );
  }
  add_action( 'init', 'uses_taxonomy', 0 );
endif;


if( !function_exists( 'materials_taxonomy' ) ):
  // Register Custom Taxonomy
  function materials_taxonomy() {
    $labels = array(
      'name'                       => _x( 'Materials', 'Taxonomy General Name', 'priorclave' ),
      'singular_name'              => _x( 'Material', 'Taxonomy Singular Name', 'priorclave' ),
      'menu_name'                  => __( 'Materials', 'priorclave' ),
      'all_items'                  => __( 'All Materials', 'priorclave' ),
      'parent_item'                => __( 'Parent Material', 'priorclave' ),
      'parent_item_colon'          => __( 'Parent Material:', 'priorclave' ),
      'new_item_name'              => __( 'New Material Name', 'priorclave' ),
      'add_new_item'               => __( 'Add New Material', 'priorclave' ),
      'edit_item'                  => __( 'Edit Material', 'priorclave' ),
      'update_item'                => __( 'Update Material', 'priorclave' ),
      'view_item'                  => __( 'View Material', 'priorclave' ),
      'separate_items_with_commas' => __( 'Separate materials with commas', 'priorclave' ),
      'add_or_remove_items'        => __( 'Add or remove materials', 'priorclave' ),
      'choose_from_most_used'      => __( 'Choose from the most used', 'priorclave' ),
      'popular_items'              => __( 'Popular Materials', 'priorclave' ),
      'search_items'               => __( 'Search Materials', 'priorclave' ),
      'not_found'                  => __( 'Not Found', 'priorclave' ),
      'no_terms'                   => __( 'No materials', 'priorclave' ),
      'items_list'                 => __( 'Materials list', 'priorclave' ),
      'items_list_navigation'      => __( 'Materials list navigation', 'priorclave' ),
    );
    $args = array(
      'labels'                     => $labels,
      'hierarchical'               => false,
      'public'                     => true,
      'show_ui'                    => true,
      'show_admin_column'          => true,
      'show_in_nav_menus'          => true,
      'show_tagcloud'              => false,
      'show_in_rest'               => true,
    );
    register_taxonomy( 'materials', array( 'autoclave' ), $args );
  }
  add_action( 'init', 'materials_taxonomy', 0 );
endif;


if( !function_exists( 'orientation_taxonomy' ) ):
  // Register Custom Taxonomy
  function orientation_taxonomy() {
    $labels = array(
      'name'                       => _x( 'Orientations', 'Taxonomy General Name', 'priorclave' ),
      'singular_name'              => _x( 'Orientation', 'Taxonomy Singular Name', 'priorclave' ),
      'menu_name'                  => __( 'Orientations / Categories', 'priorclave' ),
      'all_items'                  => __( 'All Orientations', 'priorclave' ),
      'parent_item'                => __( 'Parent Orientation', 'priorclave' ),
      'parent_item_colon'          => __( 'Parent Orientation:', 'priorclave' ),
      'new_item_name'              => __( 'New Orientation Name', 'priorclave' ),
      'add_new_item'               => __( 'Add New Orientation', 'priorclave' ),
      'edit_item'                  => __( 'Edit Orientation', 'priorclave' ),
      'update_item'                => __( 'Update Orientation', 'priorclave' ),
      'view_item'                  => __( 'View Orientation', 'priorclave' ),
      'separate_items_with_commas' => __( 'Separate orientations with commas', 'priorclave' ),
      'add_or_remove_items'        => __( 'Add or remove orientations', 'priorclave' ),
      'choose_from_most_used'      => __( 'Choose from the most used', 'priorclave' ),
      'popular_items'              => __( 'Popular Orientations', 'priorclave' ),
      'search_items'               => __( 'Search Orientations', 'priorclave' ),
      'not_found'                  => __( 'Not Found', 'priorclave' ),
      'no_terms'                   => __( 'No orientations', 'priorclave' ),
      'items_list'                 => __( 'Orientations list', 'priorclave' ),
      'items_list_navigation'      => __( 'Orientations list navigation', 'priorclave' ),
    );
    $args = array(
      'labels'                     => $labels,
      'hierarchical'               => false,
      'public'                     => true,
      'show_ui'                    => true,
      'show_admin_column'          => true,
      'show_in_nav_menus'          => true,
      'show_tagcloud'              => false,
      'show_in_rest'               => true,
    );
    register_taxonomy( 'orientation', array( 'autoclave' ), $args );
  }
  add_action( 'init', 'orientation_taxonomy', 0 );
endif;


if( !function_exists( 'capacity_taxonomy' ) ):
  // Register Custom Taxonomy
  function capacity_taxonomy() {
    $labels = array(
      'name'                       => _x( 'Capacities', 'Taxonomy General Name', 'priorclave' ),
      'singular_name'              => _x( 'Capacity', 'Taxonomy Singular Name', 'priorclave' ),
      'menu_name'                  => __( 'Capacities', 'priorclave' ),
      'all_items'                  => __( 'All Capacities', 'priorclave' ),
      'parent_item'                => __( 'Parent Capacity', 'priorclave' ),
      'parent_item_colon'          => __( 'Parent Capacity:', 'priorclave' ),
      'new_item_name'              => __( 'New Capacity Name', 'priorclave' ),
      'add_new_item'               => __( 'Add New Capacity', 'priorclave' ),
      'edit_item'                  => __( 'Edit Capacity', 'priorclave' ),
      'update_item'                => __( 'Update Capacity', 'priorclave' ),
      'view_item'                  => __( 'View Capacity', 'priorclave' ),
      'separate_items_with_commas' => __( 'Separate capacities with commas', 'priorclave' ),
      'add_or_remove_items'        => __( 'Add or remove capacities', 'priorclave' ),
      'choose_from_most_used'      => __( 'Choose from the most used', 'priorclave' ),
      'popular_items'              => __( 'Popular Capacities', 'priorclave' ),
      'search_items'               => __( 'Search Capacities', 'priorclave' ),
      'not_found'                  => __( 'Not Found', 'priorclave' ),
      'no_terms'                   => __( 'No capacities', 'priorclave' ),
      'items_list'                 => __( 'Capacities list', 'priorclave' ),
      'items_list_navigation'      => __( 'Capacities list navigation', 'priorclave' ),
    );
    $args = array(
      'labels'                     => $labels,
      'hierarchical'               => false,
      'public'                     => true,
      'show_ui'                    => true,
      'show_admin_column'          => true,
      'show_in_nav_menus'          => true,
      'show_tagcloud'              => false,
      'show_in_rest'               => true,
    );
    register_taxonomy( 'capacity', array( 'autoclave' ), $args );
  }
  add_action( 'init', 'capacity_taxonomy', 0 );
endif;


if( !function_exists( 'heating_taxonomy' ) ):
  // Register Custom Taxonomy
  function heating_taxonomy() {
    $labels = array(
      'name'                       => _x( 'Heating Sources', 'Taxonomy General Name', 'priorclave' ),
      'singular_name'              => _x( 'Heating Source', 'Taxonomy Singular Name', 'priorclave' ),
      'menu_name'                  => __( 'Heating Sources', 'priorclave' ),
      'all_items'                  => __( 'All Heating Sources', 'priorclave' ),
      'parent_item'                => __( 'Parent Heating Source', 'priorclave' ),
      'parent_item_colon'          => __( 'Parent Heating Source:', 'priorclave' ),
      'new_item_name'              => __( 'New Heating Source Name', 'priorclave' ),
      'add_new_item'               => __( 'Add New Heating Source', 'priorclave' ),
      'edit_item'                  => __( 'Edit Heating Source', 'priorclave' ),
      'update_item'                => __( 'Update Heating Source', 'priorclave' ),
      'view_item'                  => __( 'View Heating Source', 'priorclave' ),
      'separate_items_with_commas' => __( 'Separate heating sources with commas', 'priorclave' ),
      'add_or_remove_items'        => __( 'Add or remove heating sources', 'priorclave' ),
      'choose_from_most_used'      => __( 'Choose from the most used', 'priorclave' ),
      'popular_items'              => __( 'Popular Heating Sources', 'priorclave' ),
      'search_items'               => __( 'Search Heating Sources', 'priorclave' ),
      'not_found'                  => __( 'Not Found', 'priorclave' ),
      'no_terms'                   => __( 'No heating sources', 'priorclave' ),
      'items_list'                 => __( 'Heating Sources list', 'priorclave' ),
      'items_list_navigation'      => __( 'Heating sources list navigation', 'priorclave' ),
    );
    $args = array(
      'labels'                     => $labels,
      'hierarchical'               => false,
      'public'                     => true,
      'show_ui'                    => true,
      'show_admin_column'          => true,
      'show_in_nav_menus'          => true,
      'show_tagcloud'              => false,
      'show_in_rest'               => true,
    );
    register_taxonomy( 'heating', array( 'autoclave' ), $args );
  }
  add_action( 'init', 'heating_taxonomy', 0 );
endif;


if( !function_exists( 'region_taxonomy' ) ):
  // Register Custom Taxonomy
  function region_taxonomy() {
    $labels = array(
      'name'                       => _x( 'Regions', 'Taxonomy General Name', 'priorclave' ),
      'singular_name'              => _x( 'Region', 'Taxonomy Singular Name', 'priorclave' ),
      'menu_name'                  => __( 'Regions', 'priorclave' ),
      'all_items'                  => __( 'All Regions', 'priorclave' ),
      'parent_item'                => __( 'Parent Region', 'priorclave' ),
      'parent_item_colon'          => __( 'Parent Region:', 'priorclave' ),
      'new_item_name'              => __( 'New Region Name', 'priorclave' ),
      'add_new_item'               => __( 'Add New Region', 'priorclave' ),
      'edit_item'                  => __( 'Edit Region', 'priorclave' ),
      'update_item'                => __( 'Update Region', 'priorclave' ),
      'view_item'                  => __( 'View Region', 'priorclave' ),
      'separate_items_with_commas' => __( 'Separate regions with commas', 'priorclave' ),
      'add_or_remove_items'        => __( 'Add or remove regions', 'priorclave' ),
      'choose_from_most_used'      => __( 'Choose from the most used', 'priorclave' ),
      'popular_items'              => __( 'Popular Regions', 'priorclave' ),
      'search_items'               => __( 'Search Regions', 'priorclave' ),
      'not_found'                  => __( 'Not Found', 'priorclave' ),
      'no_terms'                   => __( 'No regions', 'priorclave' ),
      'items_list'                 => __( 'Regions list', 'priorclave' ),
      'items_list_navigation'      => __( 'Regions list navigation', 'priorclave' ),
    );
    $args = array(
      'labels'                     => $labels,
      'hierarchical'               => false,
      'public'                     => true,
      'show_ui'                    => true,
      'show_admin_column'          => true,
      'show_in_nav_menus'          => true,
      'show_tagcloud'              => false,
    );
    register_taxonomy( 'region', array( 'distributor' ), $args );
  }
  add_action( 'init', 'region_taxonomy', 0 );
endif;


if( !function_exists( 'country_taxonomy' ) ):
  // Register Custom Taxonomy
  function country_taxonomy() {
    $labels = array(
      'name'                       => _x( 'Countries', 'Taxonomy General Name', 'priorclave' ),
      'singular_name'              => _x( 'Country', 'Taxonomy Singular Name', 'priorclave' ),
      'menu_name'                  => __( 'Countries', 'priorclave' ),
      'all_items'                  => __( 'All Countries', 'priorclave' ),
      'parent_item'                => __( 'Parent Country', 'priorclave' ),
      'parent_item_colon'          => __( 'Parent Country:', 'priorclave' ),
      'new_item_name'              => __( 'New Country Name', 'priorclave' ),
      'add_new_item'               => __( 'Add New Country', 'priorclave' ),
      'edit_item'                  => __( 'Edit Country', 'priorclave' ),
      'update_item'                => __( 'Update Country', 'priorclave' ),
      'view_item'                  => __( 'View Country', 'priorclave' ),
      'separate_items_with_commas' => __( 'Separate countries with commas', 'priorclave' ),
      'add_or_remove_items'        => __( 'Add or remove countries', 'priorclave' ),
      'choose_from_most_used'      => __( 'Choose from the most used', 'priorclave' ),
      'popular_items'              => __( 'Popular Countries', 'priorclave' ),
      'search_items'               => __( 'Search Countries', 'priorclave' ),
      'not_found'                  => __( 'Not Found', 'priorclave' ),
      'no_terms'                   => __( 'No countries', 'priorclave' ),
      'items_list'                 => __( 'Countries list', 'priorclave' ),
      'items_list_navigation'      => __( 'Countries list navigation', 'priorclave' ),
    );
    $args = array(
      'labels'                     => $labels,
      'hierarchical'               => false,
      'public'                     => true,
      'show_ui'                    => true,
      'show_admin_column'          => true,
      'show_in_nav_menus'          => true,
      'show_tagcloud'              => false,
    );
    register_taxonomy( 'country', array( 'distributor' ), $args );
  }
  add_action( 'init', 'country_taxonomy', 0 );
endif;

if( ! function_exists( 'subject_taxonomy' ) ):
  function subject_taxonomy() {
    $labels = array(
      'name'                       => _x( 'Subjects', 'Taxonomy General Name', 'priorclave' ),
      'singular_name'              => _x( 'Subject', 'Taxonomy Singular Name', 'priorclave' ),
      'menu_name'                  => __( 'Subjects', 'priorclave' ),
      'all_items'                  => __( 'All Subjects', 'priorclave' ),
      'parent_item'                => __( 'Parent Subject', 'priorclave' ),
      'parent_item_colon'          => __( 'Parent Subject:', 'priorclave' ),
      'new_item_name'              => __( 'New Subject', 'priorclave' ),
      'add_new_item'               => __( 'Add New Subject', 'priorclave' ),
      'edit_item'                  => __( 'Edit Subject', 'priorclave' ),
      'update_item'                => __( 'Update Subject', 'priorclave' ),
      'view_item'                  => __( 'View Subject', 'priorclave' ),
      'separate_items_with_commas' => __( 'Separate subjects with commas', 'priorclave' ),
      'add_or_remove_items'        => __( 'Add or remove subjects', 'priorclave' ),
      'choose_from_most_used'      => __( 'Choose from the most used', 'priorclave' ),
      'popular_items'              => __( 'Popular Subjects', 'priorclave' ),
      'search_items'               => __( 'Search Subjects', 'priorclave' ),
      'not_found'                  => __( 'Not Found', 'priorclave' ),
      'no_terms'                   => __( 'No subjects', 'priorclave' ),
      'items_list'                 => __( 'Subjects list', 'priorclave' ),
      'items_list_navigation'      => __( 'Subjects list navigation', 'priorclave' ),
    );
    $args = array(
      'labels'                     => $labels,
      'hierarchical'               => false,
      'public'                     => true,
      'show_ui'                    => true,
      'show_admin_column'          => true,
      'show_in_nav_menus'          => false,
      'show_tagcloud'              => false,
      'show_in_rest'               => true,
    );
    register_taxonomy( 'subject', array( 'faq' ), $args );
  }
  add_action( 'init', 'subject_taxonomy', 0 );
endif;

if (!function_exists('download_taxonomy')):
    function download_taxonomy()
{
        $labels = array(
            'name' => _x('Downloads', 'Taxonomy General Name', 'priorclave'),
            'singular_name' => _x('Category', 'Taxonomy Singular Name', 'priorclave'),
            'menu_name' => __('Downloads Categories', 'priorclave'),
            'all_items' => __('All Downloads', 'priorclave'),
            'parent_item' => __('Parent Downloads', 'priorclave'),
            'parent_item_colon' => __('Parent Downloads:', 'priorclave'),
            'new_item_name' => __('New Downloads', 'priorclave'),
            'add_new_item' => __('Add New Downloads', 'priorclave'),
            'edit_item' => __('Edit Downloads', 'priorclave'),
            'update_item' => __('Update Downloads', 'priorclave'),
            'view_item' => __('View Downloads', 'priorclave'),
            'separate_items_with_commas' => __('Separate Downloads with commas', 'priorclave'),
            'add_or_remove_items' => __('Add or remove Downloads', 'priorclave'),
            'choose_from_most_used' => __('Choose from the most used', 'priorclave'),
            'popular_items' => __('Popular Downloads', 'priorclave'),
            'search_items' => __('Search Downloads', 'priorclave'),
            'not_found' => __('Not Found', 'priorclave'),
            'no_terms' => __('No Downloads', 'priorclave'),
            'items_list' => __('Downloads list', 'priorclave'),
            'items_list_navigation' => __('Downloads list navigation', 'priorclave'),
        );
        $args = array(
            'labels' => $labels,
            'hierarchical' => false,
            'public' => true,
            'show_ui' => true,
            'show_admin_column' => true,
            'show_in_nav_menus' => false,
            'show_tagcloud' => false,
            'show_in_rest' => true,
        );
        register_taxonomy('download', array('downloads'), $args);
    }
    add_action('init', 'download_taxonomy', 0);
endif;
