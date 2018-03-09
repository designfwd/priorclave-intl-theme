<?php
// Slides of testimonials with text and imagery
?>
<section class="o-testimonialSlider">
  <h2 class="o-testimonialSlider__headline">Trusted All Over the World</h2>
  <div class="o-testimonialSlider__slides">
    <?php // Slide loop
      for( $i=0; $i<8; $i++):
    ?>
      <div class="o-testimonialSlider__slides--wrapper">
        <div class="m-testimonialSlide --preload">
          <img class="m-testimonialSlide__logo lazyload" src="<?php placeholder_img( 280, 187, ('text=Testimonial ' . ($i+1))); ?>" />
          <div class="m-testimonialSlide__content a-testimonial">
            <span class="a-testimonial__quote">&#8220;</span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea consequat.<span class="a-testimonial__quote">&#8221;</span>
            <div class="a-testimonial__credit">
              - John Smith, CEO
            </div>
          </div>
        </div>
      </div>
    <?php
      endfor;
    ?>
  </div>
</section>
