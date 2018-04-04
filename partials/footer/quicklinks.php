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

if(
  !function_exists('get_field') ||
  (function_exists('get_field') && !have_rows($links))
):
  $linksFallback = true;
  $links = array(
    array(
      'label' => 'Find a Distributor',
      'url' => '#',
    ),
    array(
      'label' => 'Request a Quote',
      'url' => '#',
    ),
    array(
      'label' => 'Request Support',
      'url' => '#'
    )
  );
endif;
?>
<section class="o-footerQuicklinks">
  <?php
    if( $linksFallback != true ):
      while( have_rows($links, 'option') ):
        $label = get_sub_field('label');
        $url = get_sub_field('url');
    ?>
      <a class="o-footerQuicklinks__button" href="<?php echo $url; ?>">
        <?php echo $label; ?>
      </a>
    <?php
      endwhile;
    else:
      foreach( $links as $link ):
        $label = $link['label'];
        $url = $link['url'];
    ?>
      <a class="o-footerQuicklinks__button" href="<?php echo $url; ?>">
        <?php echo $label; ?>
      </a>
    <?php
      endforeach;
    endif;
  ?>
</section>
