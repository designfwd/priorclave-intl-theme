import dialogPolyfill from 'dialog-polyfill';
let dialog = document.querySelectorAll('dialog');
dialog.forEach(function(element) {
  dialogPolyfill.registerDialog(element);
});

document.body.addEventListener('click', function (e) {
  const openDialogId = $('dialog[open]').attr('id');
  if (typeof(openDialogId) != "undefined"){
    let i = 0;
    
    for(i = 0; i < dialog.length; i++){
      if(dialog[i].id == openDialogId){
        break;
      }
    }
    
    var rect = dialog.item(i).getBoundingClientRect();
    var clickedIn = rect.top <= e.clientY && e.clientY <= rect.top + rect.height
      && rect.left <= e.clientX && e.clientX <= rect.left + rect.width;


    if (!clickedIn) {
      if($('dialog[open').parent().parent().hasClass('m-distributorCountry')){
        $('dialog[open]').parent().parent().slideToggle();
        $('.--toggled').removeClass('--toggled');
      }

      dialog.item(i).close();
    }

  }
});

