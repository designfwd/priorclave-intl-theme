<?php
// Sets menu locations
function priorclave_menus() {
  register_nav_menus(
    [
      'primary_nav' => __('Primary Navigation', 'bellhop'),
      'sitemap_menu' => __('Sitemap Menu', 'bellhop'),
    ]
  );
}
add_action( 'after_setup_theme', 'priorclave_menus');
