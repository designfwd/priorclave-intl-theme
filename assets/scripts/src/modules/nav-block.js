// Scripts affecting nav block elements

// Constrains nav grid elements to always be square
function navSquare() {

  // Grabs the height and width of the nav grid elements
  let navHeight = jQuery('.m-navBlock--has-loaded').find('.a-navBlock--pictureGrid').outerHeight();
  let navWidth = jQuery('.m-navBlock--has-loaded').find('.a-navBlock--pictureGrid').outerWidth();

  // Defines the navSize to be the smallest of the two
  let navSize = 0;
  if( navHeight < navWidth ) {
    navSize = navHeight;
  }  else if( navWidth < navHeight ) {
    navSize = navWidth;
  }

  // Sets the height and width of the element to navSize
  jQuery('.a-navBlock--pictureGrid').height(navSize).width(navSize);
}

jQuery(document).ready(function() {
  // Runs the function on document load
  navSquare();

  // On window resize, resize the square
  jQuery(window).on('resize', function() {
    navSquare();
  });
});
