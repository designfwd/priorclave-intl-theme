// Controls the switching of images shown in the product hero module
jQuery(document).ready(function() {
  jQuery('.m-heroSlider__thumbnail').click(function() {
    let heroCurrent = jQuery(this).attr('data-img');

    jQuery('.m-heroSlider__thumbnail').removeClass('m-heroSlider__thumbnail--current');
    jQuery('.m-heroSlider__image').removeClass('m-heroSlider__image--current');

    jQuery(this).addClass('m-heroSlider__thumbnail--current');
    jQuery('#'+heroCurrent).addClass('m-heroSlider__image--current');
  })
});
