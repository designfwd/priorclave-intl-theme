<?php
/**
 * Footer copyright
 *
 * Copyright information and relevant links
 *
 * @var array $links     Copyright-related links
 */

if( function_exists('get_field') ):
  $links = 'footer_links';
endif;
?>
<section class="o-footerCopyright">
  <p class="o-footerCopyright__content">
    &copy; Copyright <?php echo date('Y'); ?> Priorclave Ltd. All rights reserved.
  </p>
  <p class="o-footerCopyright__content">
    <?php
      if( have_rows($links, 'option') ):
        while( have_rows($links, 'option') ): the_row();
          $label = get_sub_field('label');
          $linkType = get_sub_field('linkType');
          if( $linkType == true ):
            $url = get_sub_field('page');
          else:
            $url = get_sub_field('url');
          endif;
      ?>
        <a class="a-footerLink a-footerLink--copyright" href="<?php echo $url; ?>" target="_blank"><?php echo $label; ?></a>
      <?php
        endwhile;
      endif;
    ?>
    <span class="o-footerCopyright__fwd">
      Website Design by <a class="o-footerCopyright__link" href="https://www.designfwd.com/">FWD</a>
    </span>
  </p>
</section>
