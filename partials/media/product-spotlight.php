<?php
/**
 * Product spotlight block
 *
 * Content block with images and information about a particular product or category
 *
 * @var string $headline      Headline text for the section
 * @var string $content       Descriptive content for this block
 * @var string $images        The field to use for image objects
 */

// Sets variables
if( function_exists('get_field') ):
  $ID = get_the_ID();
  $headline = get_field('media_productSpotlight_headline', $ID);
  $content = get_field('media_productSpotlight_content', $ID);
  $images = 'media_productSpotlight_images';
endif;

if( !$headline || $headline == '' ):
  $headline = 'Headline Not Set';
endif;
?>
<section class="o-productSpotlight">
  <h2 class="o-productSpotlight__headline"><?php echo $headline; ?></h2>
  <div class="o-productSpotlight__content">
    <?php echo $content; ?>
    <div class="m-spotlightSlider">
      <?php
        if( have_rows($images, $ID) ):
          while( have_rows($images, $ID) ): the_row();
            $row = get_row_index();
            $image = get_sub_field('image');
            if( !isset($image) || ($image == '') ):
              $image = array(
                'alt' => 'Lorem Ipsum',
                'sizes' => array(
                  'preload' => '//via.placeholder.com/64x96?text=Image+' . $row,
                  '128w' => '//via.placeholder.com/128x192?text=Image+' . $row,
                )
              );
            endif;
        ?>
          <img data-img="spotlight-<?php echo $row; ?>"
            class="m-spotlightSlider__thumbnail <?php if($row==3){echo 'm-spotlightSlider__thumbnail--current';} ?> lazyload"
            alt="<?php echo $image['alt']; ?>"
            src="<?php echo $image['sizes']['preload']; ?>"
            data-sizes="auto"
            data-srcset="<?php echo $image['sizes']['preload']; ?> 64w,
              <?php echo $image['sizes']['128w']; ?> 65w
            "
          />
        <?php
          endwhile;
        endif;
      ?>
    </div>
  </div>
  <div class="o-productSpotlight__content">
    <div class="m-spotlightSlider">
      <?php
        if( have_rows($images, $ID) ):
          while( have_rows($images, $ID) ): the_row();
            $row = get_row_index();
            $image = get_sub_field('image');
            if( !isset($image) || ($image == '') ):
              $image = array(
                'alt' => 'Lorem Ipsum',
                'sizes' => array(
                  'preload' => '//via.placeholder.com/64x96?text=Image+' . $row,
                  '128w' => '//via.placeholder.com/128x192?text=Image+' . $row,
                  '240w' => '//via.placeholder.com/240x360?text=Image+' . $row,
                  '320w' => '//via.placeholder.com/320x480?text=Image+' . $row,
                  '360w' => '//via.placeholder.com/360x540?text=Image+' . $row,
                  '375w' => '//via.placeholder.com/375x563?text=Image+' . $row,
                  '480w' => '//via.placeholder.com/480x721?text=Image+' . $row,
                )
              );
            endif;
        ?>
          <img class="m-spotlightSlider__image <?php if($row==3){echo'm-spotlightSlider__image--current';} ?> lazyload"
            id="spotlight-<?php echo $row; ?>"
            alt="<?php echo $image['alt']; ?>"
            src="<?php echo $image['sizes']['preload']; ?>"
            data-sizes="auto"
            data-srcset="<?php echo $image['sizes']['preload']; ?> 64w,
              <?php echo $image['sizes']['128w']; ?> 65w,
              <?php echo $image['sizes']['240w']; ?> 129w,
              <?php echo $image['sizes']['320w']; ?> 241w,
              <?php echo $image['sizes']['360w']; ?> 321w,
              <?php echo $image['sizes']['375w']; ?> 361w,
              <?php echo $image['sizes']['480w']; ?> 378w,
            "
          />
        <?php
          endwhile;
        endif;
      ?>
    </div>
  </div>
</section>
