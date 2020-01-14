<?php
// Theme assets to load
function priorclave_asset_loader()
{
  // Styles
  wp_enqueue_style('main', get_stylesheet_directory_uri() . '/assets/styles/dist/main.css', false, null);
  wp_enqueue_style( 'cookie-consent', '//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css', false, '3.1.0');

  // Scripts
  wp_enqueue_script('main', get_stylesheet_directory_uri() . '/assets/scripts/dist/main.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'priorclave_asset_loader', 100);

add_filter( 'gform_init_scripts_footer', '__return_true' );
