// Scripting for the product options module
jQuery(document).ready(function() {
  // Preload removal
  jQuery('#productOptions-list').hide();
  jQuery('#productOptions-list').removeClass('--preload');

  jQuery('#productOptions-toggle').click(function() {
    jQuery('#productOptions-list').slideToggle('5000', "linear", function () {
      // Animation complete.
    });
  });

  jQuery('.m-featuredOption').click(function(e) {
    e.stopPropagation();
    let optionID = jQuery(this).attr('id').replace('productOption-','');
    document.getElementById('optionDialog-' + optionID).showModal();
  });

  jQuery('.o-productOptions__item').click(function (e) {
    e.stopPropagation();
    let optionID = jQuery(this).attr('id').replace('productOption-','');
    document.getElementById('optionDialog-' + optionID).showModal();
  });

  jQuery('.m-optionsDialog__button').click(function() {
    let button = jQuery(this).parent().attr('id');
    document.getElementById(button).close();
  });
});
