// Scripting for the product specifications module
jQuery(document).ready(function() {
  // Preload removal
  jQuery('.o-productSpecifications__table').hide();
  jQuery('.o-productSpecifications__table').removeClass('--preload');

  // If a product title is clicked, it toggles the visibility of its table
  jQuery('.o-productSpecifications__product').click( function() {
    let productSlug = jQuery(this).attr('id').replace('Title', 'Specs');
    jQuery('#' + productSlug).slideToggle();
    jQuery(this).toggleClass('o-productSpecifications__product--active');
  });

  // If the filler cell is full-width, hide it
  function cellHider() {
    let fillerWidth = jQuery('.m-specificationCell--filler').width();
    let tableWidth = jQuery('.o-productSpecifications__table').width() - 2; // accounts for margin
    if( fillerWidth >= tableWidth ) {
      jQuery('.m-specificationCell--filler').addClass('m-specificationCell--fillerHider');
    } else {
      jQuery('.m-specificationCell--filler').removeClass('m-specificationCell--fillerHider');
    }
  }
  cellHider();
  // Hides products on page load
  jQuery('.o-productSpecifications__table').hide();

  // Fires cellHider on window resize
  jQuery(window).resize(function() {
    cellHider();
  });
});
