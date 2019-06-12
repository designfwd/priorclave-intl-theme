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
