<?php
if( !function_exists( 'uses_taxonomy' ) ):
  // Register Custom Taxonomy
  function uses_taxonomy() {
    $labels = array(
      'name'                       => _x( 'Uses', 'Taxonomy General Name', 'bellhop' ),
      'singular_name'              => _x( 'Use', 'Taxonomy Singular Name', 'bellhop' ),
      'menu_name'                  => __( 'Uses', 'bellhop' ),
      'all_items'                  => __( 'All Uses', 'bellhop' ),
      'parent_item'                => __( 'Parent Use', 'bellhop' ),
      'parent_item_colon'          => __( 'Parent Use:', 'bellhop' ),
      'new_item_name'              => __( 'New Use Name', 'bellhop' ),
      'add_new_item'               => __( 'Add New Use', 'bellhop' ),
      'edit_item'                  => __( 'Edit Use', 'bellhop' ),
      'update_item'                => __( 'Update Use', 'bellhop' ),
      'view_item'                  => __( 'View Use', 'bellhop' ),
      'separate_items_with_commas' => __( 'Separate uses with commas', 'bellhop' ),
      'add_or_remove_items'        => __( 'Add or remove uses', 'bellhop' ),
      'choose_from_most_used'      => __( 'Choose from the most used', 'bellhop' ),
      'popular_items'              => __( 'Popular Uses', 'bellhop' ),
      'search_items'               => __( 'Search Uses', 'bellhop' ),
      'not_found'                  => __( 'Not Found', 'bellhop' ),
      'no_terms'                   => __( 'No uses', 'bellhop' ),
      'items_list'                 => __( 'Uses list', 'bellhop' ),
      'items_list_navigation'      => __( 'Uses list navigation', 'bellhop' ),
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
      'name'                       => _x( 'Materials', 'Taxonomy General Name', 'bellhop' ),
      'singular_name'              => _x( 'Material', 'Taxonomy Singular Name', 'bellhop' ),
      'menu_name'                  => __( 'Materials', 'bellhop' ),
      'all_items'                  => __( 'All Materials', 'bellhop' ),
      'parent_item'                => __( 'Parent Material', 'bellhop' ),
      'parent_item_colon'          => __( 'Parent Material:', 'bellhop' ),
      'new_item_name'              => __( 'New Material Name', 'bellhop' ),
      'add_new_item'               => __( 'Add New Material', 'bellhop' ),
      'edit_item'                  => __( 'Edit Material', 'bellhop' ),
      'update_item'                => __( 'Update Material', 'bellhop' ),
      'view_item'                  => __( 'View Material', 'bellhop' ),
      'separate_items_with_commas' => __( 'Separate materials with commas', 'bellhop' ),
      'add_or_remove_items'        => __( 'Add or remove materials', 'bellhop' ),
      'choose_from_most_used'      => __( 'Choose from the most used', 'bellhop' ),
      'popular_items'              => __( 'Popular Materials', 'bellhop' ),
      'search_items'               => __( 'Search Materials', 'bellhop' ),
      'not_found'                  => __( 'Not Found', 'bellhop' ),
      'no_terms'                   => __( 'No materials', 'bellhop' ),
      'items_list'                 => __( 'Materials list', 'bellhop' ),
      'items_list_navigation'      => __( 'Materials list navigation', 'bellhop' ),
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
      'name'                       => _x( 'Orientations', 'Taxonomy General Name', 'bellhop' ),
      'singular_name'              => _x( 'Orientation', 'Taxonomy Singular Name', 'bellhop' ),
      'menu_name'                  => __( 'Orientations / Categories', 'bellhop' ),
      'all_items'                  => __( 'All Orientations', 'bellhop' ),
      'parent_item'                => __( 'Parent Orientation', 'bellhop' ),
      'parent_item_colon'          => __( 'Parent Orientation:', 'bellhop' ),
      'new_item_name'              => __( 'New Orientation Name', 'bellhop' ),
      'add_new_item'               => __( 'Add New Orientation', 'bellhop' ),
      'edit_item'                  => __( 'Edit Orientation', 'bellhop' ),
      'update_item'                => __( 'Update Orientation', 'bellhop' ),
      'view_item'                  => __( 'View Orientation', 'bellhop' ),
      'separate_items_with_commas' => __( 'Separate orientations with commas', 'bellhop' ),
      'add_or_remove_items'        => __( 'Add or remove orientations', 'bellhop' ),
      'choose_from_most_used'      => __( 'Choose from the most used', 'bellhop' ),
      'popular_items'              => __( 'Popular Orientations', 'bellhop' ),
      'search_items'               => __( 'Search Orientations', 'bellhop' ),
      'not_found'                  => __( 'Not Found', 'bellhop' ),
      'no_terms'                   => __( 'No orientations', 'bellhop' ),
      'items_list'                 => __( 'Orientations list', 'bellhop' ),
      'items_list_navigation'      => __( 'Orientations list navigation', 'bellhop' ),
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
      'name'                       => _x( 'Capacities', 'Taxonomy General Name', 'bellhop' ),
      'singular_name'              => _x( 'Capacity', 'Taxonomy Singular Name', 'bellhop' ),
      'menu_name'                  => __( 'Capacities', 'bellhop' ),
      'all_items'                  => __( 'All Capacities', 'bellhop' ),
      'parent_item'                => __( 'Parent Capacity', 'bellhop' ),
      'parent_item_colon'          => __( 'Parent Capacity:', 'bellhop' ),
      'new_item_name'              => __( 'New Capacity Name', 'bellhop' ),
      'add_new_item'               => __( 'Add New Capacity', 'bellhop' ),
      'edit_item'                  => __( 'Edit Capacity', 'bellhop' ),
      'update_item'                => __( 'Update Capacity', 'bellhop' ),
      'view_item'                  => __( 'View Capacity', 'bellhop' ),
      'separate_items_with_commas' => __( 'Separate capacities with commas', 'bellhop' ),
      'add_or_remove_items'        => __( 'Add or remove capacities', 'bellhop' ),
      'choose_from_most_used'      => __( 'Choose from the most used', 'bellhop' ),
      'popular_items'              => __( 'Popular Capacities', 'bellhop' ),
      'search_items'               => __( 'Search Capacities', 'bellhop' ),
      'not_found'                  => __( 'Not Found', 'bellhop' ),
      'no_terms'                   => __( 'No capacities', 'bellhop' ),
      'items_list'                 => __( 'Capacities list', 'bellhop' ),
      'items_list_navigation'      => __( 'Capacities list navigation', 'bellhop' ),
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
      'name'                       => _x( 'Heating Sources', 'Taxonomy General Name', 'bellhop' ),
      'singular_name'              => _x( 'Heating Source', 'Taxonomy Singular Name', 'bellhop' ),
      'menu_name'                  => __( 'Heating Sources', 'bellhop' ),
      'all_items'                  => __( 'All Heating Sources', 'bellhop' ),
      'parent_item'                => __( 'Parent Heating Source', 'bellhop' ),
      'parent_item_colon'          => __( 'Parent Heating Source:', 'bellhop' ),
      'new_item_name'              => __( 'New Heating Source Name', 'bellhop' ),
      'add_new_item'               => __( 'Add New Heating Source', 'bellhop' ),
      'edit_item'                  => __( 'Edit Heating Source', 'bellhop' ),
      'update_item'                => __( 'Update Heating Source', 'bellhop' ),
      'view_item'                  => __( 'View Heating Source', 'bellhop' ),
      'separate_items_with_commas' => __( 'Separate heating sources with commas', 'bellhop' ),
      'add_or_remove_items'        => __( 'Add or remove heating sources', 'bellhop' ),
      'choose_from_most_used'      => __( 'Choose from the most used', 'bellhop' ),
      'popular_items'              => __( 'Popular Heating Sources', 'bellhop' ),
      'search_items'               => __( 'Search Heating Sources', 'bellhop' ),
      'not_found'                  => __( 'Not Found', 'bellhop' ),
      'no_terms'                   => __( 'No heating sources', 'bellhop' ),
      'items_list'                 => __( 'Heating Sources list', 'bellhop' ),
      'items_list_navigation'      => __( 'Heating sources list navigation', 'bellhop' ),
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
      'name'                       => _x( 'Regions', 'Taxonomy General Name', 'bellhop' ),
      'singular_name'              => _x( 'Region', 'Taxonomy Singular Name', 'bellhop' ),
      'menu_name'                  => __( 'Regions', 'bellhop' ),
      'all_items'                  => __( 'All Regions', 'bellhop' ),
      'parent_item'                => __( 'Parent Region', 'bellhop' ),
      'parent_item_colon'          => __( 'Parent Region:', 'bellhop' ),
      'new_item_name'              => __( 'New Region Name', 'bellhop' ),
      'add_new_item'               => __( 'Add New Region', 'bellhop' ),
      'edit_item'                  => __( 'Edit Region', 'bellhop' ),
      'update_item'                => __( 'Update Region', 'bellhop' ),
      'view_item'                  => __( 'View Region', 'bellhop' ),
      'separate_items_with_commas' => __( 'Separate regions with commas', 'bellhop' ),
      'add_or_remove_items'        => __( 'Add or remove regions', 'bellhop' ),
      'choose_from_most_used'      => __( 'Choose from the most used', 'bellhop' ),
      'popular_items'              => __( 'Popular Regions', 'bellhop' ),
      'search_items'               => __( 'Search Regions', 'bellhop' ),
      'not_found'                  => __( 'Not Found', 'bellhop' ),
      'no_terms'                   => __( 'No regions', 'bellhop' ),
      'items_list'                 => __( 'Regions list', 'bellhop' ),
      'items_list_navigation'      => __( 'Regions list navigation', 'bellhop' ),
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
      'name'                       => _x( 'Countries', 'Taxonomy General Name', 'bellhop' ),
      'singular_name'              => _x( 'Country', 'Taxonomy Singular Name', 'bellhop' ),
      'menu_name'                  => __( 'Countries', 'bellhop' ),
      'all_items'                  => __( 'All Countries', 'bellhop' ),
      'parent_item'                => __( 'Parent Country', 'bellhop' ),
      'parent_item_colon'          => __( 'Parent Country:', 'bellhop' ),
      'new_item_name'              => __( 'New Country Name', 'bellhop' ),
      'add_new_item'               => __( 'Add New Country', 'bellhop' ),
      'edit_item'                  => __( 'Edit Country', 'bellhop' ),
      'update_item'                => __( 'Update Country', 'bellhop' ),
      'view_item'                  => __( 'View Country', 'bellhop' ),
      'separate_items_with_commas' => __( 'Separate countries with commas', 'bellhop' ),
      'add_or_remove_items'        => __( 'Add or remove countries', 'bellhop' ),
      'choose_from_most_used'      => __( 'Choose from the most used', 'bellhop' ),
      'popular_items'              => __( 'Popular Countries', 'bellhop' ),
      'search_items'               => __( 'Search Countries', 'bellhop' ),
      'not_found'                  => __( 'Not Found', 'bellhop' ),
      'no_terms'                   => __( 'No countries', 'bellhop' ),
      'items_list'                 => __( 'Countries list', 'bellhop' ),
      'items_list_navigation'      => __( 'Countries list navigation', 'bellhop' ),
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
