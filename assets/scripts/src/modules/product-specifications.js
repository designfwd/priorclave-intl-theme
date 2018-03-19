// Scripting for the product specifications module
jQuery(document).ready(function() {

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

  // Fires cellHider on window resize end
  let rtime;
  let timeout = false;
  let delta = 200;
  jQuery(window).resize(function() {
      rtime = new Date();
      if (timeout === false) {
          timeout = true;
          setTimeout(resizeend, delta);
      }
  });

  function resizeend() {
      if (new Date() - rtime < delta) {
          setTimeout(resizeend, delta);
      } else {
          timeout = false;
          cellHider();
      }
  }
});
