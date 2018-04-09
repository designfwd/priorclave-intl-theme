jQuery(document).ready(function() {
  //Remove preload class and fade slider in
  jQuery('.m-logoSlider').hide();
  jQuery('.m-logoSlider').removeClass('--preload');
  jQuery('.m-logoSlider').fadeIn();

  jQuery('.m-logoSlider').slick({
    arrows: false,
    autoplay: true,
    autoplaySpeed: 0,
    buttons: false,
    cssEase: 'linear',
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    speed: 16000,
    variableWidth: true,
  });
})
