// Testimonial slider scripting
jQuery(document).ready(function() {
  jQuery('.m-testimonialSlide').removeClass('--preload');
  jQuery('.o-testimonialSlider__slides').slick({
    autoplay: true,
    autoplaySpeed: 7000,
    dots: true,
    speed: 1000,
  });
});
