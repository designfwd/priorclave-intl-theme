<?php
// Primary navigation system
?>
<section class="o-mobileNav">
  <a class="o-mobileNav__menuToggle" href="#">
    <svg id="mobileNav--toggleIcon" class="a-navIcon" viewBox="0 0 16 16">
      <?php get_svg('icon-bars'); ?>
    </svg>
  </a>
  <a class="o-mobileNav__logo" href="#">
    <img class="o-mobileNav__logo--image" src="<?php placeholder_img(219,57,'text=logo'); ?>" />
  </a>
  <a class="o-mobileNav__iconLink" href="#">
    <svg class="a-navIcon" viewBox="0 0 16 16">
      <?php get_svg('icon-search'); ?>
    </svg>
  </a>
</section>

<section class="o-desktopNav">
  <a class="o-desktopNav__logo" href="#">
    <img class="o-dekstopNav__logo--image" src="<?php placeholder_img(219,57,'text=logo'); ?>" />
  </a>
  <nav class="o-desktopNav__menu" style="display:inline">
    Autoclaves  Customers  Why Priorclave?  Support  Contact
  </nav>
  <div class="o-desktopNav__quicklinks">

    <div class="m-navLocations">
      <a class="m-navLocations__link" href="#">CALL +12 34 5678 9012</a>
      <a class="m-navLocations__flag" href="#">
        <svg id="desktopNav--toggleIcon" class="a-dropdownLink a-dropdownLink--icon" viewBox="0 0 640 480">
          <?php get_svg('flag/gb'); ?>
        </svg>
      </a>
    </div>

    <div class="m-navButtons">
      <a class="m-navButtons__iconLink" href="#">
        <svg class="a-navIcon" viewBox="0 0 16 16">
          <?php get_svg('icon-search'); ?>
        </svg>
      </a>
      <a class="m-navButtons__button" href="#">
        Request Quote
      </a>
    </div>

  </div>
</section>
