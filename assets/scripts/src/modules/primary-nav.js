// Primary navigation scripts
jQuery(document).ready(function() {
  //Preload removal and initial hiding
  jQuery('.m-navBlock').hide();
  jQuery('.m-navBlock').addClass('--has-loaded');
  jQuery('.m-navBlock').removeClass('--preload');
  jQuery('.m-navMenu__label').addClass('--has-loaded');

  jQuery('.m-navMenu__label').click(function() {
    // If the menu is open, close it
    if( jQuery(this).hasClass('--active') ){
      jQuery('.m-navBlock').hide();
      jQuery('.m-navMenu__label').removeClass('--active');
    }
    else { // Otherwise, close other menus and open the selected one
      let menu = jQuery(this).data('menu');
      jQuery('.m-navBlock').hide();
      jQuery('.m-navMenu__label').removeClass('--active');
      jQuery('#menuToggle-' + menu).addClass('--active');
      jQuery('#menu-' + menu).slideToggle();
    }
  });

  // Close menus if user clicks outside of them
  jQuery(document).mouseup(function(e) {
    let target = e.target; // Record target div
    if( jQuery(target).parents('.o-primaryNav').length == 0 ) {
      jQuery('.m-navBlock').hide();
      jQuery('.m-navMenu__label').removeClass('--active');
    }
  });
});
