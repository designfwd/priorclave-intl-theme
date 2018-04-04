<?php
/**
 * Footer copyright
 *
 * Copyright information and relevant links
 *
 * @var array $links     Copyright-related links
 */

if( function_exists('get_field') ):
  $links = 'footer_copyright_links';
endif;

if(
  !function_exists('get_field') ||
  (function_exists('get_field') && !have_rows($links))
):
  $linksFallback = true;
  $links = array(
    array(
      'label' => 'Sitemap',
      'url' => '#'
    ),
    array(
      'label' => 'Terms',
      'url' => '#'
    ),
  );
endif;
?>
<section class="o-footerCopyright">
  <p class="o-footerCopyright__content">
    &copy; Copyright <?php echo date('Y'); ?> Priorclave Ltd. All rights reserved.
  </p>
  <p class="o-footerCopyright__content">
    <?php // If ACFs are set, use those. Otherwise, use fallback
      if( $linksFallback != true ):
        while( have_rows($links, 'option') ): the_row();
          $label = get_sub_field('label');
          $url = get_sub_field('url');
      ?>
        <a class="a-footerLink a-footerLink--copyright" href="<?php echo $url; ?>" target="_blank"><?php echo $label; ?></a>
      <?php
        endwhile;
      else:
        foreach( $links as $link ):
          $label = $link['label'];
          $url = $link['url'];
      ?>
        <a class="a-footerLink a-footerLink--copyright" href="<?php echo $url; ?>" target="_blank"><?php echo $label; ?></a>
      <?php
        endforeach;
      endif;
    ?>
  </p>
</section>
