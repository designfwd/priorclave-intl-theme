// Primary navigation scripts
jQuery(document).ready(function() {
  //Preload removal and initial hiding
  jQuery('.m-navBlock').hide();
  jQuery('.m-navBlock').addClass('--has-loaded');
  jQuery('.m-navBlock').removeClass('--preload');
  jQuery('.m-navMenu__label').addClass('--has-loaded');

  jQuery('.m-navMenu__label').click(function() {
    let menu = jQuery(this).data('menu');
    jQuery('.m-navBlock').hide();
    jQuery('.m-navMenu__label').removeClass('--active');
    jQuery('#menuToggle-' + menu).addClass('--active');
    jQuery('#menu-' + menu).toggle();

    jQuery(this).click(function() {
      jQuery(this).toggleClass('--active');
    })
  });

});
