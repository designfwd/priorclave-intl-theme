// Handles URL switching based on dropdown options on the multiregion homepage map

document.body.addEventListener('click', function (e) {
  const countrySelector = document.getElementById('homepageMap-dropdownList');
  if (countrySelector.offsetParent) {

    var rect = countrySelector.getBoundingClientRect();
    var clickedIn = rect.top <= e.clientY && e.clientY <= rect.top + rect.height
      && rect.left <= e.clientX && e.clientX <= rect.left + rect.width;


    if (!clickedIn){
      jQuery('#homepageMap-toggleIcon').toggleClass('a-dropdownLink--icon--toggled');
      jQuery('#homepageMap-dropdownList').fadeToggle();
    }

  } else {
    const countrySelectorDropdown = document.getElementById('homepageMap-dropdownMenu');
    rect = countrySelectorDropdown.getBoundingClientRect();
    clickedIn = rect.top <= e.clientY && e.clientY <= rect.top + rect.height
      && rect.left <= e.clientX && e.clientX <= rect.left + rect.width;
    if(clickedIn){
      jQuery('#homepageMap-toggleIcon').toggleClass('a-dropdownLink--icon--toggled');
      jQuery('#homepageMap-dropdownList').fadeToggle();
    }

  }
});