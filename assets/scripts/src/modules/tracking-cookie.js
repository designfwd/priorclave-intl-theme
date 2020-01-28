// cookie to track
jQuery(document).ready(function() {
  //if not coming from within site, delete all cookies so they can be reset
  const referrerProtocol = document.referrer.split('/')[2];
  console.log(referrerProtocol);
  if(referrerProtocol != "www.priorclave.com"){
    eraseCookie('pc_utm_source');
    eraseCookie('pc_utm_medium');
    eraseCookie('pc_utm_campaign');
    eraseCookie('pc_utm_term');    
  }

  // set the cookie with the values from the URL
  let source = getCookie('pc_utm_source');
  let sourceValue = $.urlParam("utm_source");


  // if no URL value, get referrer
  if(!sourceValue)
    sourceValue = document.referrer;
  //if the cookie doesnt exists, create one and set value
  if(!source){
    setCookie('pc_utm_source',sourceValue,1);
  }

  let medium = getCookie('pc_utm_medium');
  let mediumValue = $.urlParam('utm_medium');
  if(!mediumValue)
    mediumValue = 'organic';

  if(!medium){
    setCookie('pc_utm_medium',mediumValue,1);
  }

  let campaign = getCookie('pc_utm_campaign');
  let campaignValue = $.urlParam('utm_campaign');
  if(!campaignValue)
    campaignValue = 'none';

  if(!campaign){
    setCookie('pc_utm_campaign',campaignValue,1);
  }

  let term = getCookie('pc_utm_term');
  let termValue = $.urlParam('utm_term')
  if(!termValue)
    termValue = 'none';
  termValue = decodeURIComponent(termValue);
  if(!term){
    setCookie('pc_utm_term',termValue,1);
  }

  //set hidden form values to send to salesforce
  if($('.utm_source div input').length){
    $('.utm_source div input').attr('value', getCookie('pc_utm_source'));
  }

  if($('.utm_medium div input').length){
    $('.utm_medium div input').attr('value', getCookie('pc_utm_medium'));
  }

  if($('.utm_campaign div input').length){
    $('.utm_campaign div input').attr('value', getCookie('pc_utm_campaign'));
  }

  if($('.utm_term div input').length){
    $('.utm_term div input').attr('value', getCookie('pc_utm_term'));
  }  

  //check if success query var is there. If it is, delete cookies
  const success = $.urlParam('success');
  if(success){
    eraseCookie('pc_utm_source');
    eraseCookie('pc_utm_medium');
    eraseCookie('pc_utm_campaign');
    eraseCookie('pc_utm_term');
  }
});

function setCookie(cookieName,value,days) {
  var expires = "";
  if (days) {
      var date = new Date();
      date.setTime(date.getTime() + (days*24*60*60*1000));
      expires = "; expires=" + date.toUTCString();
  }
  document.cookie = cookieName + "=" + (value || "")  + expires + "; path=/";
}

function getCookie(cookieName) {
  var nameEQ = cookieName + "=";
  var ca = document.cookie.split(';');
  for(var i=0;i < ca.length;i++) {
      var c = ca[i];
      while (c.charAt(0)==' ') c = c.substring(1,c.length);
      if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
  }
  return null;
}
function eraseCookie(cookieName) {
  document.cookie = cookieName+"=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
}

$.urlParam = function(cookieName){
  // eslint-disable-next-line no-useless-escape
  var results = new RegExp('[\?&]' + cookieName + '=([^&#]*)').exec(window.location.href);
  if (results==null){
     return null;
  }
  else{
     return results[1] || 0;
  }
}
