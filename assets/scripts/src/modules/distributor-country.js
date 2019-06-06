// Scripting for distributor country blocks
jQuery(document).ready(function() {
  // Hide and remove preload class from country content
  jQuery('.m-distributorCountry').hide();
  jQuery('.m-distributorCountry').removeClass('--preload');

  jQuery('.m-distributorToggle').click(function() {
    jQuery(this).children('.m-distributorToggle__icon').toggleClass('--toggled');
    let country = jQuery(this).data('country');
    jQuery('#toggle-' + country).toggleClass('--toggled');
    jQuery('#content-' + country).slideToggle();
  });

  jQuery('.m-distributorCountry__contact--button').click(function() {
    let country = jQuery(this).data('country');
    document.getElementById('dialog-' + country).showModal();
  });

  jQuery('.m-distributorDialog__button').click(function() {
    let button = jQuery(this).parent().attr('id');
    document.getElementById(button).close();
    jQuery(this).parent().parent().parent().slideToggle();
  });

  jQuery(document).on('click', '.o-distributorMap__button', function() {

    let country = jQuery(this).data('country');
    jQuery('#toggle-' + country).toggleClass('--toggled');
    jQuery('#toggle-' + country).children('.m-distributorToggle__icon').toggleClass('--toggled');
    jQuery('#content-' + country).slideToggle();

    let distributor = jQuery(this).data('slug');
    document.getElementById('dialog-' + distributor).showModal();
  });
});
