/**
 * Cookie consent settings
 */
import 'cookieconsent';

window.addEventListener("load", function(){
  window.cookieconsent.initialise({
    "palette": {
      "popup": {
        "background": "#39383d",
        "text": "#ffffff"
      },
      "button": {
        "background": "#ffffff",
        "text": "#030303"
      }
    },
    "theme": "classic",
    "content": {
      "dismiss": "Got it!",
      "link": "Privacy Policy",
      "href": "priorclaveintl.wpengine.com/privacy-policy"
    }
  })
});