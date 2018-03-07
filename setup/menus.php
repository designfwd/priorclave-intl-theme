<?php

// Sets menu locations
function bellhop_menus() {
  register_nav_menus([
    'primary_nav' => __('Primary Navigation', 'bellhop')
  ]);
  // If the website is multisite and the current site is the supersite, show the region menu
  if( is_multisite() && (get_current_blog_id() == 1) ){
    register_nav_menus([
      'international_nav' => __('International Navigation', 'bellhop')
    ]);
  }
}
add_action( 'after_setup_theme', 'bellhop_menus');
