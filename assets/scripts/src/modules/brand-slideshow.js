jQuery(document).ready(function() {
  //Remove preload class and fade slider in
  jQuery('.m-logoSlider').hide();
  jQuery('.m-logoSlider').removeClass('--preload');
  jQuery('.m-logoSlider').fadeIn();

  jQuery('.m-logoSlider').slick({
    speed: 16000,
    autoplay: true,
    autoplaySpeed: 0,
    centerMode: true,
    cssEase: 'linear',
    slidesToShow: 1,
    slidesToScroll: 1,
    variableWidth: true,
    infinite: true,
    initialSlide: 1,
    arrows: false,
    buttons: false
  });
})
