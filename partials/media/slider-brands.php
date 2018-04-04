<?php
/**
 * Brand slider
 *
 * A continuously-running slideshow of showcased brands
 *
 * @var string $headline      Headline text for the section
 * @var string $description   Description for the slider blocks
 * @var array $sliders        Rows of brand logos
 */

// Sets variables, with fallback if ACF is not installed or if variables are empty
if( function_exists('get_field') ):
  $ID = get_the_ID();
  $headline = get_field('media_slideBrands_headline', $ID);
  $description = get_field('media_slideBrands_description', $ID);
  $sliders = 'media_slideBrands_sliders';
endif;

if( !isset($headline) || $headline == '' ):
  $headline = 'Trusted All Over the World';
endif;

if( !isset($description) || $description == ''):
  $description = '<p>
    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
  </p>';
endif;

if(
  !function_exists('get_field') ||
  (function_exists('get_field') && !have_rows($sliders))
):
  $slidersFallback = true;
  $sliderRows = 2;
endif;
?>
<section class="o-brandSlider">
  <h2 class="o-brandSlider__headline"><?php echo $headline; ?></h2>
  <div class="o-brandSlider__description">
    <?php echo $description; ?>
  </div>
  <div class="o-brandSlider__sliders">
  <?php
    if( $slidersFallback == false ): // If ACF is installed, use that
      while( have_rows($sliders, $ID) ): the_row();
        $slides = get_sub_field('slides');
    ?>
      <div class="m-logoSlider">
        <?php
          while( have_rows($slides ) ): the_row();
            $image = get_sub_field('image');
        ?>
          <div class="m-logoSlider__slide">
            <img class="a-brandLogo lazyload"
              alt="<?php echo $image['alt']; ?>"
              src="<?php echo $image['sizes']['preload']; ?>"
              data-sizes="auto"
              data-srcset="<?php echo $image['sizes']['preload']; ?> 64w,
                <?php echo $image['sizes']['128w']; ?> 65w,
                <?php echo $image['sizes']['240w']; ?> 129w,
                <?php echo $image['sizes']['320w']; ?> 241w
              "
            />
          </div>
        <?php
          endwhile;
        ?>
      </div>
    <?php
      endwhile;
    else:
      for( $i=0; $i<$sliderRows; $i++ ):
    ?>
      <div class="m-logoSlider">
        <?php
          $slides = rand(7,10);
          for( $j=0; $j<$slides; $j++ ):
        ?>
          <div class="m-logoSlider__slide">
            <img class="a-brandLogo lazyload"
              src="<?php placeholder_img( rand(133, 275), rand(120, 160), ('text=slide-' . $j) ); ?>"
            />
          </div>
        <?php
          endfor;
        ?>
      </div>
    <?php
      endfor;
    endif;
    ?>
  </div>
</section>
