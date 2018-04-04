<?php
/**
 * Product spotlight block
 *
 * Content block with images and information about a particular product or category
 *
 * @var string $headline      Headline text for the section
 * @var string $content       Content block
 * @var string $images        The field to use for image objects
 */

// Sets variables, with fallback if ACF is not installed or if variables are empty
if( function_exists('get_field') ):
  $ID = get_the_ID();
  $headline = get_field('media_productSpotlight_headline', $ID);
  $content = get_field('media_productSpotlight_content', $ID);
  $images = 'media_productSpotlight_images';
endif;

if( !isset($headline) || $headline == '' ):
  $headline = 'Priorclave Steam Autoclaves';
endif;

if( !isset($content) || $content == '' ):
  $content = '<p>
    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
  </p>
  <p>
    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
  </p>
  <p>
    Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat commodo consequat.
  </p>';
endif;

if(
  !function_exists('get_field') ||
  (function_exists('get_field') && !have_rows($images))
):
  $imagesFallback = true;
  $images = 5;
endif;
?>
<section class="o-productSpotlight">
  <h2 class="o-productSpotlight__headline"><?php echo $headline; ?></h2>
  <div class="o-productSpotlight__content">
    <?php echo $content; ?>
    <div class="m-spotlightSlider">
      <?php // If ACFs are set, use those
        if( $imagesFallback == false ):
          while( have_rows($images) ): the_row();
            $image = get_sub_field('image');
            $row = get_row_index();
        ?>
          <img data-img="spotlight-<?php echo $row; ?>"
            class="m-spotlightSlider__thumbnail <?php if($row==1){echo 'm-spotlightSlider__thumbnail--current';} ?> lazyload"
            alt="<?php echo $image['alt']; ?>"
            src="<?php echo $image['sizes']['preload']; ?>"
            data-sizes="auto"
            data-srcset="<?php echo $image['sizes']['preload']; ?> 64w,
              <?php echo $image['url']; ?> 65w
            "
          />
        <?php
          endwhile;
        else: // If ACFs are not set, use a fallback
          for( $i=0; $i<$images; $i++):
        ?>
          <img data-img="spotlight-<?php echo $i; ?>"
            class="m-spotlightSlider__thumbnail <?php if($i<1){echo 'm-spotlightSlider__thumbnail--current';} ?> lazyload"
            src="<?php placeholder_img( 86, 129, ('text=slide ' . ($i+1)) ); ?>"
          />
        <?php
          endfor;
        endif;
      ?>
    </div>
  </div>
  <div class="o-productSpotlight__content">
    <div class="m-spotlightSlider">
      <?php // If ACFs are set, use those
        if( $imagesFallback == false ):
          while( have_rows($images) ): the_row();
            $image = get_sub_field('image');
            $row = get_row_index();
        ?>
          <img class="m-spotlightSlider__image <?php if($row==1){echo'm-spotlightSlider__image--current';} ?> lazyload"
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
        <?php
          endwhile;
        else: // If ACFs are not set, use a fallback
          for( $i=0; $i<$images; $i++):
      ?>
        <img class="m-spotlightSlider__image <?php if($i<1){echo 'm-spotlightSlider__image--current';} ?> lazyload"
          id="spotlight-<?php echo $i; ?>"
          src="<?php placeholder_img( 431, 649, ('text=slide' . ($i+1)) ); ?>"
        />
      <?php
          endfor;
        endif;
      ?>
    </div>
  </div>
</section>
