// Scripting for distributor question blocks
jQuery(document).ready(function() {
  // Hide and remove preload class from question content
  jQuery('.m-faqAnswer').hide();
  jQuery('.m-faqAnswer').removeClass('--preload');

  jQuery('.m-faqToggle').click(function() {
    jQuery(this).toggleClass('--toggled');
    let question = jQuery('.m-faqToggle__icon', this).data('question');
    jQuery('#toggle-' + question).toggleClass('--toggled');
    jQuery('#content-' + question).slideToggle();
  });

  jQuery('a.o-categoryNav__link--faq').on('click', (e) => {
    e.preventDefault();
    const navHeight = jQuery('.o-primaryNav').height();
    let navLink = e.currentTarget.hash;

    linkHeight = jQuery(navLink).position();
    scrollAmount = linkHeight.top-navHeight;

    window.scrollTo({top:scrollAmount, left: 0, behavior: 'smooth'});
  });
});
