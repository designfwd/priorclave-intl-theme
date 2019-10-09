// Scripting for distributor country blocks
jQuery(document).ready(function() {
  // Hide and remove preload class from country content
  jQuery('.m-distributorCountry').hide();
  jQuery('.m-distributorCountry').removeClass('--preload');

  jQuery('.m-distributorToggle').click(function() {
    jQuery(this).children('.m-distributorToggle__icon').toggleClass('--toggled');
    let country = jQuery(this).data('country');
    jQuery('#toggle-' + country).toggleClass('--toggled');
    jQuery('#content-' + country).slideToggle();
    jQuery('#content-' + country).toggleClass('open');
  });

  jQuery('.m-distributorCountry__contact--button').click(function(e) {
    e.stopPropagation();
    //get address info for dialog box
    const addressContainer = $(this).parent().prev();
    const dialog = $('#dialog-form');
    const country = $(this).parent().parent().parent().prev().attr('data-country');
    $('h4.m-distributorDialog__title', dialog).text(addressContainer.children().first().text());
    $('address.m-distributorDialog__address', dialog).html(addressContainer.children().last().html());
    $('#input_14_11').val(addressContainer.children().first().text());
    $('#input_14_10').val(country);

    
    document.getElementById('dialog-form').showModal();
  });

  jQuery('.m-distributorDialog__button').click(function() {
    let button = jQuery(this).parent().attr('id');
    document.getElementById(button).close();
    jQuery('.--toggled').removeClass('--toggled');
    jQuery('.open').slideToggle();
    jQuery('.open').toggleClass('open');
  });

  jQuery(document).on('click', '.o-distributorMap__button', function() {
    const dialog = $('#dialog-form');
    let country = jQuery(this).parent().prev().text();
    jQuery('#toggle-' + country).toggleClass('--toggled');
    jQuery('#toggle-' + country).children('.m-distributorToggle__icon').toggleClass('--toggled');
    jQuery('#content-' + country).slideToggle();

    const address = jQuery(this).parent().parent().html();

  
    let distributor = jQuery(this).parent().parent().prev().text();
    $('h4.m-distributorDialog__title', dialog).text(distributor);
    $('address.m-distributorDialog__address', dialog).html(address);

    $('#input_14_11').val(distributor);
    $('#input_14_10').val(country);
    
    jQuery('.o-distributorMap__button', dialog).attr('style', 'display:none');
    document.getElementById('dialog-form').showModal();
  });

  //county nav scroll amount
  jQuery('a.o-categoryNav__link').on('click', (e) => {
    e.preventDefault();
    let navHeight = jQuery('.o-primaryNav').height();
    if(!navHeight)
      navHeight = jQuery('.o-simpleNav').height();
    let navLink = e.currentTarget.hash;
    
    linkHeight = jQuery(navLink).position();
    scrollAmount = linkHeight.top-navHeight;

    window.scrollTo({top:scrollAmount, left: 0, behavior: 'smooth'});
  });  
});
