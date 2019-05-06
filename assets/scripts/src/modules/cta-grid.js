// Scripts associated with CTA grids and their items

jQuery(document).ready(function() {

  // Grab the heights of items and set them to be equal
  function setItemHeight() {
    let mheight = 0;
    let oheight = 0;

    jQuery('.m-ctaGrid__item--small').each(function() {
      if( jQuery(this).outerHeight() > mheight ){
        mheight = jQuery(this).outerHeight();
      }
    });

    jQuery('.o-ctaGrid__item--small').each(function() {
      if( jQuery(this).outerHeight() > oheight ){
        oheight = jQuery(this).outerHeight();
      }
    });

    // Sets those heights to be equal
    jQuery('.m-ctaGrid__item--small').outerHeight(mheight);
    jQuery('.o-ctaGrid__item--small').outerHeight(oheight);
  }

  setItemHeight();
  jQuery(window).resize( setItemHeight() );


  // For large cta items, sets the height equal to the width
  function setCtaHeight() {
    let width = 0;
    let height = 0;

    jQuery('.m-ctaGridItem--large').each(function() {
      if( jQuery(this).outerHeight() > height ){
        height = jQuery(this).outerHeight();
      }
      if( jQuery(this).outerWidth() > width ){
        width = jQuery(this).outerWidth();
      }
      if( height < width ) {
        height = width;
      }

      jQuery('.m-ctaGridItem--large').outerHeight(height);
      jQuery('.o-ctaGrid__item--large').outerHeight(height);
    });
  }
  setCtaHeight();
  jQuery(window).resize( setCtaHeight() );
});
