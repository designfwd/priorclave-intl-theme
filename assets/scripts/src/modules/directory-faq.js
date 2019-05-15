// Scripting for distributor question blocks
jQuery(document).ready(function() {
  // Hide and remove preload class from question content
  jQuery('.m-faqAnswer').hide();
  jQuery('.m-faqAnswer').removeClass('--preload');

  jQuery('.m-faqToggle').click(function() {
    jQuery(this).toggleClass('--toggled');
    let question = jQuery('.m-faqToggle__icon', this).data('question');
    jQuery('#toggle-' + question).toggleClass('--toggled');
    jQuery('#content-' + question).slideToggle();
  });
});
