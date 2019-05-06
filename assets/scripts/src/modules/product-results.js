// Scripts for product results page items

jQuery(document).ready(function() {

  // Sets product result block height to be equal
  function productHeight() {
    let height = 0;

    jQuery('.m-resultOption').each(function() {
      if( jQuery(this).outerHeight() > height) {
        height = jQuery(this).outerHeight();
      }
    });

    jQuery('.m-resultOption').outerHeight(height);
  }

  productHeight();
  jQuery(window).resize( productHeight() );
});