// Video Gallery Modal
jQuery(document).ready(function () {
  jQuery('.o-videoGrid__video').on('click', (e) => {
    const dialogId = 'dialog-' + e.currentTarget.dataset.dialog;
    document.getElementById(dialogId).showModal();
  });
});
