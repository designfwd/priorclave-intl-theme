<?php
function bellhop_supports() {
  // Make theme available for translation
  load_theme_textdomain('bellhop', get_template_directory() . '/lang');

  // Enable plugins to manage the document title
  // http://codex.wordpress.org/Function_Reference/add_theme_support#Title_Tag
  add_theme_support('title-tag');

  // Enable post formats
  // http://codex.wordpress.org/Post_Formats
  add_theme_support('post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio']);

  // Enable HTML5 markup support
  // http://codex.wordpress.org/Function_Reference/add_theme_support#HTML5
  add_theme_support('html5', ['caption', 'comment-form', 'comment-list', 'gallery', 'search-form']);

  // Enable wide images
  add_theme_support('align-wide');
}
add_action( 'after_setup_theme', 'bellhop_supports' );


// Removes unnecessary items from the admin menu
function bellhop_remove_menus() {
  // remove_menu_page('edit.php');
  remove_menu_page('edit-comments.php');
  remove_menu_page('link-manager.php');
}
add_action( 'admin_menu', 'bellhop_remove_menus');


// Renames the default page template to encourage use of custom templates
add_filter('default_page_template_title', function() {
  return __('--Pick a page template--', 'bellhop');
});


// Removes the admin bar for all but admins on the front-end
if (!current_user_can('administrator')) :
  // show_admin_bar(false);
endif;


// Creates ACF Options page
if( function_exists('acf_add_options_page') ):

  acf_add_options_page(array(
    'page_title'  => 'Theme Settings',
    'menu_title'  => 'Theme Settings',
    'menu_slug'   => 'theme-settings',
    'capability'  => 'edit_posts',
    'redirect'    => false,
    'position'    => '59.9',
    'icon_url'    => 'dashicons-index-card'
  ));

  // Parent site settings
  if( is_multisite() && (get_current_blog_id() == 1) ):
    acf_add_options_page(array(
      'page_title'  => 'Parent Site Settings',
      'menu_title'  => 'Parent Site Settings',
      'menu_slug'   => 'parent-site-settings',
      'capability'  => 'edit_posts',
      'redirect'    => false,
      'position'    => '58',
      'icon_url'    => 'dashicons-forms'
    ));
  endif;
endif;


// Removes ACF options from child sites
if( is_multisite() && (get_current_blog_id() != 1) ):
  add_filter('acf/settings/show_admin', '__return_false');
endif;


// Changes the save location for ACF fields
add_filter('acf/settings/save_json', 'bellhop_acf_json_save_point');
function bellhop_acf_json_save_point( $path ) {
  $path = get_stylesheet_directory() . '/assets/json/acf';
  return $path;
}


// Changes the load location for ACF fields
add_filter('acf/settings/load_json', 'bellhop_acf_json_load_point');
function bellhop_acf_json_load_point( $paths ) {
  unset($paths[0]);
  $paths[] = get_stylesheet_directory() . '/assets/json/acf';
  return $paths;
}


// Simplified partials integration for cleaner markup
function get_partial( $slug ) {
  return include(locate_template('partials/' . $slug . '.php'));
}


function get_svg( $file ) {
  echo file_get_contents( get_stylesheet_directory_uri() . '/assets/images/dist/svg/' . $file . '.svg');
}


function placeholder_img( $width, $height, $text='' ) {
  if( $text != ''):
    $text = str_replace( ' ', '+', $text);
    echo ( '//via.placeholder.com/' . $width . 'x' . $height . '?' . $text );
  else:
    echo ( '//via.placeholder.com/' . $width . 'x' . $height );
  endif;
}


function get_picsum( $width, $height='', $modifier='' ) {
  // If a height is defined, append a '/' to it for the final URL
  if( $height != '' ):
    $height = '/' . $height;
  endif;

  // Modifier can be either "grayscale" or "blur"
  if( $modifier == 'grayscale' ):
    echo ( '//picsum.photos/g/' . $width . $height );
  elseif ( $modifier == 'blur' ):
    echo ( '//picsum.photos/' . $width . $height . '/?blur' );
  else:
    echo ( '//picsum.photos/' . $width . $height );
  endif;
}


function bellhop_lang() {
  if( function_exists('get_field') ):
    $lang = get_field('site_language', 'option');
    $geo = get_field('site_country', 'option');
  else:
    $lang = 'en';
    $geo = 'us';
  endif;
  if( $geo['value'] != 'none' ):
    echo 'lang="' . $lang['value'] . '-' . strtoupper($geo['value']) . '"';
  else:
    echo 'lang="' . $lang['value'] . '"';
  endif;
}
