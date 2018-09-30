// Primary navigation scripts
jQuery(document).ready(function() {
  //Preload removal and initial hiding
  jQuery('.o-mobileMenu').hide();
  jQuery('.o-mobileMenu').addClass('o-mobileMenu--has-loaded');
  jQuery('.o-mobileMenu').removeClass('o-mobileMenu--preload');
  jQuery('.m-navBlock').hide();
  jQuery('.m-navBlock').addClass('m-navBlock--has-loaded');
  jQuery('.m-navBlock').removeClass('m-navBlock--preload');
  jQuery('.m-navMenu__label').addClass('m-navBlock--has-loaded');
  jQuery('.m-countrySelector').hide();
  jQuery('.m-countrySelector').addClass('m-countrySelector--has-loaded');
  jQuery('.m-countrySelector').removeClass('m-countrySelector--preload');

  jQuery('#mobile-navigation-toggle').click(function() {
    // If the menu is open, close it
    if( jQuery(this).hasClass('--open') ){
      jQuery('.o-mobileMenu').slideToggle();
      jQuery(this).removeClass('--open');
    } else {
      jQuery(this).addClass('--open');
      jQuery('.o-mobileMenu').slideToggle();
    }
  });

  jQuery('#mobile-country-toggle').click(function() {
    //If the menu is open, close it
    if( jQuery(this).hasClass('--open') ){
      jQuery('.m-countrySelector').slideToggle();
      jQuery(this).removeClass('--open');
    } else {
      jQuery(this).addClass('--open');
      jQuery('.m-countrySelector').slideToggle();
    }
  })

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
