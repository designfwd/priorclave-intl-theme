// Scripts for the featured video module
jQuery(document).ready(function() {

  jQuery('#featured-video-preview').click(function() {
    document.getElementById('featured-video-dialog').showModal();
  });

  jQuery('#featured-video-close').click(function() {
    document.getElementById('featured-video-dialog').close();
  });
});