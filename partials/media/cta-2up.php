<?php
/**
 * CTA 2-up
 *
 * Call-to-action side-by-side with image-enhanced links
 *
 * @var string $items     The ACF field to look for items in
 * @var string $headline  Short text description of the CTA's purpose
 * @var string $subhead   Longer description of what the CTA link accomplishes
 * @var array $image      The image to use in the CTA block
 * @var string $page      The linked page for the CTA
 */

if( function_exists('get_field') ):
  // If the page should override those CTAs set for the theme, set the page ID
  if( get_field('media_cta2Up_override') == 1 ):
    $ID = get_the_ID();
  // Otherwise, use theme defaults
  else:
    $ID = 'option';
  endif;
  $items = 'media_cta2Up_items';
endif;
?>
<section class="o-ctaGrid">
  <?php
    if( have_rows($items, $ID) ):
      while( have_rows($items, $ID) ): the_row();
        $headline = get_sub_field('headline');
        $subhead = get_sub_field('subhead');
        $page = get_sub_field('page');
        $image = get_sub_field('image');
        if( !$image ):
          $image = array(
            'sizes' => array(
              'preload' => '//via.placeholder.com/64x59?text=CTA',
              '128w' => '//via.placeholder.com/128x118?text=CTA',
              '240w' => '//via.placeholder.com/240x222?text=CTA',
              '320w' => '//via.placeholder.com/320x296?text=CTA',
            ),
          );
        endif;
      ?>
        <a class="o-ctaGrid__item o-ctaGrid__item--large" href="<?php echo $page; ?>">
          <div class="m-ctaGridItem">
            <h3 class="m-ctaGridItem__headline m-ctaGridItem__headline--large"><?php echo $headline; ?></h3>
            <h4 class="m-ctaGridItem__subhead m-ctaGridItem__subhead--large"><?php echo $subhead; ?></h4>
            <img class="m-ctaGridItem__image lazyload lazyload--blurUp"
              src="<?php echo $image['sizes']['preload']; ?>"
              data-sizes="auto"
              data-srcset="<?php echo $image['sizes']['preload']; ?> 64w,
                <?php echo $image['sizes']['128w']; ?> 65w,
                <?php echo $image['sizes']['240w']; ?> 129w,
                <?php echo $image['sizes']['320w']; ?> 241w,
              "
            />
          </div>
        </a>
      <?php
      endwhile;
    endif;
  ?>
</section>
