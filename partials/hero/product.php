<?php
/**
 * Single product page
 *
 * Product information page with credibility indicator badges and interactive
 * gallery. May contain information for multiple models, but all fit within a
 * certain classification (e.g. 40-60 liter benchtop autoclaves).
 *
 * @var string $capacity      The capacity for this autoclave
 * @var string $category      The category for this autoclave
 * @var string $description   The description of this autoclave type
 * @var array $currency       The currency to use
 * @var string $price         The price for this autoclave type
 * @var array $badges         Badges to use for this autoclave
 * @var string $images        The ACF to reference for gallery images
 */

if( function_exists('get_field') ):
  $ID = get_the_ID();
  $capacity = get_field('hero_product_capacity', $ID);
  $category = get_field('hero_product_category', $ID);
  $description = get_field('hero_product_description', $ID);
  $currency = get_field('hero_product_currency', $ID);
  $price = get_field('hero_product_price', $ID);
  $badges = get_field('hero_product_badges', $ID);
  $images = 'hero_product_images';
endif;
?>
<section class="o-heroProduct">

  <div class="o-heroProduct__content">
    <div class="m-productHero">
      <h1 class="m-productHero__headline">
        <span class="m-productHero__headline--capacity"><?php echo $capacity; ?></span> Autoclave<br />
        <span class="m-productHero__headline--category"><?php echo $category; ?></span>
      </h1>
      <div class="m-productHero__description">
        <?php echo $description; ?>
      </div>
      <p class="m-productHero__price">
        <?php echo $currency['value'] . $price; ?>
      </p>

      <? // Badges ?>
      <div class="m-productHero__badges">
        <?php
        if( $badges ):
          foreach( $badges as $post):
            setup_postdata($post);
            $image = get_field('badge_image_grayscale', $post->ID);
            $label = get_field('badge_label', $post->ID);
            if(!$image):
              $image = array(
                'sizes' => array(
                  'preload' => '//via.placeholder.com/64x85?text=badge',
                  '128w' => '//via.placeholder.com/128x171?text=badge'
                )
              );
            endif;
          ?>
            <div class="a-productBadge">
              <img class="a-productBadge__image lazyload"
              src="<?php echo $image['sizes']['placeholder']; ?>"
              data-sizes="auto"
              data-srcset="
                <?php echo $image['sizes']['preload']; ?> 64w,
                <?php echo $image ['sizes']['128w']; ?> 65w
              "
              />
              <h5 class="a-productBadge__subtitle">
                <?php echo $label; ?>
              </h5>
            </div>
          <?php
          endforeach;
          wp_reset_postdata();
        endif;
        ?>
      </div>
    </div>
  </div>

  <div class="o-heroProduct__slider">
    <div class="m-heroSlider">
      <?php // Main slider image
      if( have_rows($images, $ID) ):
        while( have_rows($images, $ID) ): the_row();
          $image = get_sub_field('image');
          $row = get_row_index();
          if( !$image ):
            $image = array(
              'sizes' => array(
                'preload' => '//via.placeholder.com/64x64?text=image' . $row,
                '128w' => '//via.placeholder.com/128x128?text=image' . $row,
                '240w' => '//via.placeholder.com/240x240?text=image' . $row,
                '320w' => '//via.placeholder.com/320x320?text=image' . $row,
                '360w' => '//via.placeholder.com/360x360?text=image' . $row,
                '375w' => '//via.placeholder.com/375x375?text=image' . $row,
                '480w' => '//via.placeholder.com/480x480?text=image' . $row,
                '540w' => '//via.placeholder.com/540x540?text=image' . $row,
                '640w' =>
                '//via.placeholder.com/640x640?text=image' . $row,
                '720w' => '//via.placeholder.com/720x720?text=image' . $row,
                '768w' => '//via.placeholder.com/768x768?text=image' . $row,
                '800w' => '//via.placeholder.com/800x800?text=image' . $row,
                '960w' => '//via.placeholder.com/960x960?text=image' . $row,
                '1024w' => '//via.placeholder.com/1024x1024?text=image' . $row,
                '1280w' => '//via.placeholder.com/1280x1280?text=image' . $row,
              )
            );
          endif;
        ?>
          <img class="m-heroSlider__image <?php if($row==1){echo 'm-heroSlider__image--current';} ?> lazyload"
          id="hero-<?php echo $row; ?>"
          src="<?php echo $image['sizes']['preload']; ?>"
          data-sizes="auto"
          data-srcset="<?php echo $image['sizes']['preload']; ?> 64w,
            <?php echo $image['sizes']['128w']; ?> 128w,
            <?php echo $image['sizes']['240w']; ?> 65w,
            <?php echo $image['sizes']['320w']; ?> 241w,
            <?php echo $image['sizes']['360w']; ?> 321w,
            <?php echo $image['sizes']['375w']; ?> 361w,
            <?php echo $image['sizes']['480w']; ?> 376w,
            <?php echo $image['sizes']['540w']; ?> 481w,
            <?php echo $image['sizes']['640w']; ?> 541w,
            <?php echo $image['sizes']['720w']; ?> 641w,
            <?php echo $image['sizes']['768w']; ?> 721w,
            <?php echo $image['sizes']['800w']; ?> 769w,
            <?php echo $image['sizes']['960w']; ?> 801w,
            <?php echo $image['sizes']['1024w']; ?> 961w,
            <?php echo $image['sizes']['1280w']; ?> 1025w,
          "
          />
        <?php
        endwhile;

        // Thumbnail images
        while( have_rows($images, $ID) ): the_row();
          $image = get_sub_field('image');
          $row = get_row_index();
          if( !$image ):
            $image = array(
              'sizes' => array(
                'preload' => '//via.placeholder.com/64x64?text=image' . $row,
              )
            );
          endif;
        ?>
          <img class="m-heroSlider__thumbnail <?php if($row==1){echo'm-heroSlider__thumbnail--current';} ?>"
            data-img="hero-<?php echo get_row_index(); ?>"
            src="<?php echo $image['sizes']['preload']; ?>"
          />
        <?php
        endwhile;
      endif;
      ?>
    </div>
  </div>

</section>
