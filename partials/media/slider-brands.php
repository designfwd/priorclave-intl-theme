<?php
/**
 * Brand slider
 *
 * A continuously-running slideshow of showcased brands
 *
 * @var string $headline      Headline text for the section
 * @var string $description   Description for the slider blocks
 * @var string $sliders       The ACF field to draw logos from
 */

// Sets variables, with fallback if ACF is not installed or if variables are empty
if( function_exists('get_field') ):
  $ID = get_the_ID();
  $headline = get_field('media_sliderBrands_headline', $ID);
  $description = get_field('media_sliderBrands_description', $ID);
  $sliders = 'media_sliderBrands_sliders';
endif;
?>
<section class="o-brandSlider">
  <h2 class="o-brandSlider__headline"><?php echo $headline; ?></h2>
  <div class="o-brandSlider__description">
    <?php echo $description; ?>
  </div>
  <div class="o-brandSlider__sliders">
  <?php
    if( have_rows($sliders, $ID) ): // If ACF is installed, use that
      while( have_rows($sliders, $ID) ): the_row();
        $slides = 'slides';
    ?>
      <div class="m-logoSlider --preload">
        <?php
          while( have_rows($slides) ): the_row();
            $image = get_sub_field('image');
            if( !isset($image) || ($image == '') ):
              $row = get_row_index();
              $image = array(
                'alt' => 'Lorem Ipsum',
                'sizes' => array(
                  '320w' => '//via.placeholder.com/240x105?text=logo+' . $row,
                ),
              );
            endif;
        ?>
          <div class="m-logoSlider__slide">
            <img class="a-brandLogo"
              alt="<?php echo $image['alt']; ?>"
              src="<?php echo $image['sizes']['320w']; ?>"
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
      <div class="m-logoSlider --preload">
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
