// Primary navigation scripts
jQuery(document).ready(function() {
  //Preload removal and initial hiding
  jQuery('.o-mobileMenu').hide();
  jQuery('.o-mobileMenu').addClass('o-mobileMenu--has-loaded');
  jQuery('.o-mobileMenu').removeClass('o-mobileMenu--preload');
  jQuery('.o-mobileMenu__block').hide();
  jQuery('.o-mobileMenu__block').addClass('o-mobileMenu__block--has-loaded');
  jQuery('.o-mobileMenu__block').removeClass('o-mobileMenu__block--preload');
  jQuery('.m-navBlock').hide();
  jQuery('.m-navBlock').addClass('m-navBlock--has-loaded');
  jQuery('.m-navBlock').removeClass('m-navBlock--preload');
  jQuery('.m-navMenu__label').addClass('m-navMenu__label--has-loaded');
  jQuery('.m-countrySelector').hide();
  jQuery('.m-countrySelector').addClass('m-countrySelector--has-loaded');
  jQuery('.m-countrySelector').removeClass('m-countrySelector--preload');
  jQuery('.m-searchForm').hide();
  jQuery('.m-searchForm').addClass('m-searchForm--has-loaded');
  jQuery('.m-searchForm').removeClass('m-searchForm--preload');

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
      // Hide search form
      jQuery('.m-searchForm').hide();
      jQuery('#mobile-search-toggle').removeClass('--open');

      jQuery(this).addClass('--open');
      jQuery('.m-countrySelector').slideToggle();
    }
  });

  jQuery('#nav-country-toggle').click(function() {
    //If the menu is open, close it
    if( jQuery(this).hasClass('--open') ){
      jQuery('.m-countrySelector').slideToggle();
      jQuery(this).removeClass('--open');
    } else {
      // Hide search form
      jQuery('.m-searchForm').hide();
      jQuery('#nav-search-toggle').removeClass('--open');

      jQuery(this).addClass('--open');
      jQuery('.m-countrySelector').slideToggle();
    }
  });

  jQuery('#mobile-search-toggle').click(function() {
    //If the menu is open, close it
    if( jQuery(this).hasClass('--open') ){
      jQuery('.m-searchForm').slideToggle();
      jQuery(this).removeClass('--open');
    } else {
      // Hide country selector
      jQuery('.m-countrySelector').hide();
      jQuery('#mobile-country-toggle').removeClass('--open');

      jQuery(this).addClass('--open');
      jQuery('.m-searchForm').slideToggle();
    }
  });

  jQuery('#nav-search-toggle').click(function() {
    //If the menu is open, close it
    if( jQuery(this).hasClass('--open') ){
      jQuery('.m-searchForm').slideToggle();
      jQuery(this).removeClass('--open');
    } else {
      // Hide country selector
      jQuery('.m-countrySelector').hide();
      jQuery('#nav-country-toggle').removeClass('--open');

      jQuery(this).addClass('--open');
      jQuery('.m-searchForm').slideToggle();
    }
  });

  //Controls the opening/closing of menu blocks in the mobile menu
  jQuery('.o-mobileMenu__label').click(function() {
    let menu = jQuery(this).data('menu');
    // If the menu is open, close it
    if( jQuery(this).hasClass('--active') ){
      jQuery(this).removeClass('--active');
      jQuery(this).children('.o-mobileMenu__toggle').removeClass('o-mobileMenu__toggle--is-clicked');
      jQuery('#mobileMenu-' + menu).slideToggle();
    } else {
      jQuery(this).addClass('--active');
      jQuery(this).children('.o-mobileMenu__toggle').addClass('o-mobileMenu__toggle--is-clicked');
      jQuery('#mobileMenu-' + menu).slideToggle();
    }
  });

  jQuery('.m-navMenu__label').click(function() {
    // If the menu is open, close it
    if( jQuery(this).hasClass('--active') ){
      jQuery('.m-navBlock').hide();
      jQuery('.m-navMenu__label').removeClass('--active');
    }
    else { // Otherwise, close other menus and open the selected one
      jQuery('.m-navBlock').hide();
      jQuery('.m-navMenu__label').removeClass('--active');
      jQuery(this).addClass('--active');
      jQuery(this).next().slideToggle();
    }
  });

  // Close menus if user clicks outside of them
  jQuery(document).mouseup(function(e) {
    let target = e.target; // Record target div
    if( jQuery(target).parents('.o-primaryNav').length == 0 ) {
      jQuery('#mobile-navigation-toggle').removeClass('--active');
      jQuery('#mobile-search-toggle').removeClass('--active');
      jQuery('#nav-country-toggle').removeClass('--open');
      jQuery('#mobile-country-toggle').removeClass('--active');
      jQuery('.m-navMenu__label').removeClass('--active');
      jQuery('.o-mobileMenu').hide();
      jQuery('.m-countrySelector').hide();
      jQuery('.m-searchForm').hide();
      jQuery('.m-navBlock').hide();
    }
  });
});
