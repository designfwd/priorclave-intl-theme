// Scripting for the product options module
jQuery(document).ready(function() {
  jQuery('#productOptions-toggle').click(function() {
    jQuery('#productOptions-list').toggle();
  });

  jQuery('.m-featuredOption').click(function() {
    let optionID = jQuery(this).attr('id').replace('productOption-','');
    document.getElementById('optionDialog-' + optionID).showModal();
  });

  jQuery('.o-productOptions__item').click(function() {
    let optionID = jQuery(this).attr('id').replace('productOption-','');
    document.getElementById('optionDialog-' + optionID).showModal();
  });

  jQuery('.m-optionsDialog__button').click(function() {
    let button = jQuery(this).parent().attr('id');
    document.getElementById(button).close();
  });
});
