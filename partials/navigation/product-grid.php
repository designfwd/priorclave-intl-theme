<?php
/**
 * Product category grid
 *
 * Grid of images linked category pages
 *
 * @var string $headline      The headline text for this section
 * @var string $items         ACF field to query for grid items
 * @var string $label         The label to use for a grid item
 * @var string $page_id       The page ID used to reference links and grid
 *                            preview images
 */

if( function_exists('get_field') ):
  $ID = get_the_ID();
  $headline = get_field('navigation_productGrid_headline', $ID);
  $items = 'navigation_productGrid_items';
endif;
?>
<section class="o-productGrid">
  <h2 class="o-productGrid__headline">Steam Autoclaves</h2>
  <div class="o-productGrid__products">
    <?php
      if( have_rows($items, $ID) ):
        while( have_rows($items, $ID) ): the_row();
          $label = get_sub_field('label');
          $page_id = get_sub_field('page_id');
          $url = get_permalink($page_id);
          $image = get_field('page_preview_image', $page_id);
          if( !$image ):
            $image = array(
              'sizes' => array( // max 668 x 814
                'preload' => '//via.placeholder.com/64x78?text=category',
                '128w' => '//via.placeholder.com/128x156?text=category',
                '240w' => '//via.placeholder.com/240x292?text=category',
                '320w' => '//via.placeholder.com/320x389?text=category',
                '360w' => '//via.placeholder.com/360x439?text=category',
                '375w' => '//via.placeholder.com/375x457?text=category',
                '480w' => '//via.placeholder.com/480x585?text=category',
                '540w' => '//via.placeholder.com/540x658?text=category',
                '640w' => '//via.placeholder.com/640x780?text=category',
                '720w' => '//via.placeholder.com/720x877?text=category',
              ),
            );
          endif;
        ?>
          <a class="m-productGridItem" href="<?php echo $url; ?>">
            <img class="m-productGridItem__image lazyload lazyload--blurUp"
              src="<?php echo $image['sizes']['preload']; ?>"
              data-sizes="auto"
              data-srcset="<?php echo $image['sizes']['preload']; ?> 64w,
                <?php echo $image['sizes']['128w']; ?> 65w,
                <?php echo $image['sizes']['240w']; ?> 129w,
                <?php echo $image['sizes']['320w']; ?> 241w,
                <?php echo $image['sizes']['360w']; ?> 321w,
                <?php echo $image['sizes']['375w']; ?> 361w,
                <?php echo $image['sizes']['480w']; ?> 376w,
                <?php echo $image['sizes']['540w']; ?> 481w,
                <?php echo $image['sizes']['640w']; ?> 541w,
                <?php echo $image['sizes']['720w']; ?> 641w,
              "
            />
            <h3 class="m-productGridItem__title"><?php echo $label; ?></h3>
          </a>
        <?php
        endwhile;
      endif;
    ?>
  </div>
</section>
