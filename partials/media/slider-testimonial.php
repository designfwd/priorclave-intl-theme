<?php
/**
 * Testimonial slider
 *
 * Slides of testimonials with text and imagery
 *
 * @var string $headline        Header text for this section
 * @var array $testimonials     Collection of testimonials to display
 */
if( function_exists('get_field') ):
  $ID = get_the_ID();
  $headline = get_field('media_sliderTestimonial_headline', $ID);
  $testimonials = get_field('media_sliderTestimonial_testimonials', $ID);
endif;
?>
<section class="o-testimonialSlider">
  <h2 class="o-testimonialSlider__headline"><?php echo $headline; ?></h2>
  <div class="o-testimonialSlider__slides">
    <?php
      if( $testimonials ):
        foreach( $testimonials as $post ):
          setup_postdata($post);
          $content = get_field('testimonial_content', $post->ID);
          $credit = get_field('testimonial_credit', $post->ID);
          $image = get_field('testimonial_image', $post->ID);
          if( !$image ):
            $image = array(
              'sizes' => array(
                'preload' => '//via.placeholder.com/64x43?text=Logo',
                '128w' => '//via.placeholder.com/128x85?text=Logo',
                '240w' => '//via.placeholder.com/240x160?text=Logo',
                '320w' => '//via.placeholder.com/320x214?text=Logo',
              ),
            );
          endif;
        ?>
          <div class="o-testimonialSlider__slides--wrapper">
            <div class="m-testimonialSlide --preload">
              <img class="m-testimonialSlide__logo lazyload"
                src="<?php placeholder_img( 280, 187, ('text=Testimonial ' . ($i+1))); ?>"
              />
              <div class="m-testimonialSlide__content a-testimonial">
                <span class="a-testimonial__quote">&#8220;</span><?php echo $content; ?><span class="a-testimonial__quote">&#8221;</span>
                <div class="a-testimonial__credit">
                  - <?php echo $credit; ?>
                </div>
              </div>
            </div>
          </div>
        <?php
        endforeach;
        wp_reset_postdata();
      endif;
    ?>
  </div>
</section>
