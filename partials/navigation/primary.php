<?php
// Primary navigation system
?>
<section class="o-primaryNav">
  <a href="#">
    <img class="o-primaryNav__logo" src="<?php placeholder_img(219,57,'text=logo'); ?>" />
  </a>

  <nav class="o-primaryNav__menu">
    <?php
      wp_nav_menu(
        array(
          'menu' => 'Primary Navigation',
          'menu_class' => 'm-primaryNav',
          'walker' => new primaryNavWalker,
        )
      );
    ?>
  </nav>

  <div class="o-primaryNav__quicklinks">
      <a class="" href="#">CALL +12 34 5678 9012</a>
      <a class="" href="#">
        <svg id="" class="a-dropdownLink a-dropdownLink--icon" viewBox="0 0 640 480">
          <?php get_svg('flag/gb'); ?>
        </svg>
      </a>

      <a href="#">
        <svg class="a-navIcon" viewBox="0 0 16 16">
          <?php get_svg('icon-search'); ?>
        </svg>
      </a>
      <a class="a-navButton a-navButton--primary" href="#">
        Request Quote
      </a>
  </div>
</section>
