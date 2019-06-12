// Video Gallery Modal
jQuery(document).ready(function () {
  jQuery('.o-videoGrid__video').on('click', (e) => {
    const dialogId = 'dialog-' + e.currentTarget.dataset.dialog;
    e.stopPropagation();
    document.getElementById(dialogId).showModal();
  });

  jQuery('.m-videoDialog__button').on('click', (e)=> {
    
    const dialogBox = e.currentTarget.parentElement;
    console.log('here');
    dialogBox.close();
  });
});
