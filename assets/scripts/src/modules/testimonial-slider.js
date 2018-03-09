// Testimonial slider scripting
jQuery(document).ready(function() {
  jQuery('.m-testimonialSlide').removeClass('--preload');
  jQuery('.o-testimonialSlider__slides').slick({
    dots: true,
    speed: 500,
  });
});
