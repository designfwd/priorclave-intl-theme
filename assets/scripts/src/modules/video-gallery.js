// Video Gallery Modal
jQuery(document).ready(function () {
  jQuery('.o-videoGrid__video').on('click', (e) => {
    const dialogId = 'dialog-' + e.currentTarget.dataset.dialog;
    e.stopPropagation();
    const videoURL = jQuery('#'+dialogId+' iframe').attr('data-src');
    jQuery('#'+dialogId+' iframe').attr('src', videoURL);
    document.getElementById(dialogId).showModal();
  });

  jQuery('.m-videoDialog__button').on('click', (e)=> {
    e.currentTarget.nextElementSibling.src = '';
    const dialogBox = e.currentTarget.parentElement;
    dialogBox.close();
  });
});

// Maintains video description height across the entire grid
jQuery(document).ready(function() {

  // Grab the heights of items and set them to be equal
  function setDescHeight() {
    let height = 0;

    jQuery('.m-videoGrid__description').each(function() {
      if( jQuery(this).outerHeight() > height ) {
        height = jQuery(this).outerHeight();
      }
    });

    jQuery('.m-videoGrid__description').outerHeight(height);
  }

  setDescHeight();
  jQuery(window).resize( setDescHeight() );

});
