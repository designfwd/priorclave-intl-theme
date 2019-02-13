<?php
/**
 * Sitemap
 *
 * Text-based links to show a map of site pages, intended to be Human-readable
 *
 * @var array $links     Copyright-related links
 */

if( function_exists('get_field') ):
  $links = 'footer_links';
endif;
?>
<section class="o-sitemap">
  <h2 class="o-sitemap__headline">Pages</h2>
  <?php
    // Displays the navigation menu as list items
    //https://developer.wordpress.org/reference/functions/wp_nav_menu/
    $args = array(
      'menu' => '',
      'container' => '',
      'container_class' => '',
      'container_id' => '',
      'menu_class' => 'o-sitemap__list',
      'menu_id' => '',
      'echo' => true,
      'fallback_cb' => 'wp_page_menu',
      'before' => '',
      'after' => '',
      'link_before' => '',
      'link_after' => '',
      'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
      'item_spacing' => 'preserve',
      'depth' => 0,
      'walker' => '',
      'theme_location' => 'sitemap_menu'
    );
    wp_nav_menu( $args );
  ?>
</section>
