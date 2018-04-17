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
      'theme_location' => 'primary_nav'
    );
    wp_nav_menu( $args );
  ?>

  <h2 class="o-sitemap__headline">Other Links</h2>
  <ul class="o-sitemap__list">
    <?php // Displays footer links
      if( have_rows($links, 'option') ):
        while( have_rows($links, 'option') ): the_row();
          $label = get_sub_field('label');
          $url = get_sub_field('url');
      ?>
        <li class="menu-item">
          <a href="<?php echo $url; ?>" target="_blank"><?php echo $label; ?></a>
        </li>
      <?php
        endwhile;
      endif;
    ?>
  </ul>
</section>
