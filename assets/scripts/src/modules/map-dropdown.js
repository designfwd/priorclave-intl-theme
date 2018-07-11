// Handles URL switching based on dropdown options on the multiregion homepage map
jQuery(document).ready(function() {
  jQuery('#homepageMap-dropdownMenu').click(function(e) {
    e.preventDefault();
    jQuery('#homepageMap-toggleIcon').toggleClass('a-dropdownLink--icon--toggled');
    jQuery('#homepageMap-dropdownList').fadeToggle();
  });
});
