// Controls the switching of images shown in the product spotlight module
jQuery(document).ready(function() {
  jQuery('.m-spotlightSlider__thumbnail').click(function() {
    let spotlightCurrent = jQuery(this).attr('data-img');

    jQuery('.m-spotlightSlider__thumbnail').removeClass('m-spotlightSlider__thumbnail--current');
    jQuery('.m-spotlightSlider__image').removeClass('m-spotlightSlider__image--current');

    jQuery(this).addClass('m-spotlightSlider__thumbnail--current');
    jQuery('#'+spotlightCurrent).addClass('m-spotlightSlider__image--current');
  })
});
