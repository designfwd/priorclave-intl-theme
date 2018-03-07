<?php
// A continuously-running slideshow of showcased brands
?>
<section class="o-brandSlider">
  <h2 class="o-brandSlider__headline">Trusted All Over the World</h2>
  <div class="o-brandSlider__description">
    <p>
      Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
    </p>
  </div>
  <div class="o-brandSlider__sliders">
  <?php // Rows of sliders, to be defined later by ACF
    $sliderRows = 2;
    for( $i=0; $i<$sliderRows; $i++ ):
  ?>
    <div class="m-logoSlider">
      <?php // Number of slides to be defined later by ACF
        $slides = 8;
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
  ?>
  </div>
</section>
