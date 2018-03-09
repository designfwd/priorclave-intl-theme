// Handles the linking of article previews to the articles they represent
jQuery(document).ready(function() {
  jQuery('.m-articlePreview').click(function() {
    let articleURL = jQuery(this).data('href');
    jQuery(location).attr('href', articleURL);
  });
});
