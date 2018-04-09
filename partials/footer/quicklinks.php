<?php
/**
 * Footer quicklinks
 *
 * A group of button-like links in the universal footer area
 *
 * @var array $links    Links to use in the footer
 */

// Sets variables, with fallbacks if ACF is not installed or if variables are empty
if( function_exists('get_field') ):
  $links = 'footer_quicklinks';
endif;
?>
<section class="o-footerQuicklinks">
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
      <a class="o-footerQuicklinks__button" href="<?php echo $url; ?>">
        <?php echo $label; ?>
      </a>
    <?php
      endwhile;
    endif;
  ?>
</section>
