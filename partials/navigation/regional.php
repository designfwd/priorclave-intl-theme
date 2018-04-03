<?php
// Regional navigation for use to link to a particular country or region
?>
<nav class="o-regionalNav">

  <?php
    // Rough multiregion navigation structure, mimicing WP div structure
    if( has_nav_menu('international_nav') ):
      $args = array(
        'menu' => 'international_nav',
        'menu_class' => 'o-regionalNav__menu',
        'fallback_cb' => false,
      );
      wp_nav_menu($args);
    else:
  ?>
    <div>
      <ul class="o-regionalNav__menu">
        <li class="menu-item-depth-0 menu-item">
          <a class="menu-link" href="#">Africa</a>
        </li>
        <li class="menu-item-depth-0 menu-item menu-item-has-children">
          <a class="menu-link" href="#">Asia Pacific</a>
          <ul class="sub-menu menu-depth-1">
            <li class="sub-menu-item menu-item-depth-1 menu-item">
              <a class="menu-link sub-menu-link" href="#">Australia</a>
            </li>
            <li class="sub-menu-item menu-item-depth-1 menu-item">
              <a class="menu-link sub-menu-link" href="#">Malaysia</a>
            </li>
            <li class="sub-menu-item menu-item-depth-1 menu-item">
              <a class="menu-link sub-menu-link" href="#">Philippines</a>
            </li>
          </ul>
        </li>
        <li class="menu-item-depth-0 menu-item menu-item-has-children">
          <a class="menu-link" href="#">Europe</a>
          <ul class="sub-menu menu-depth-1">
            <li class="sub-menu-item menu-item-depth-1 menu-item">
              <a class="menu-link sub-menu-link" href="#">United Kingdom</a>
            </li>
          </ul>
        </li>
        <li class="menu-item-depth-0 menu-item">
          <a class="menu-link" href="#">Middle East</a>
        </li>
        <li class="menu-item-depth-0 menu-item menu-item-has-children">
          <a class="menu-link" href="#">North America</a>
          <ul class="sub-menu menu-depth-1">
            <li class="sub-menu-item menu-item-depth-1 menu-item">
              <a class="menu-link sub-menu-link" href="#">Canada</a>
            </li>
            <li class="sub-menu-item menu-item-depth-1 menu-item">
              <a class="menu-link sub-menu-link" href="#">United States</a>
            </li>
          </ul>
        </li>
        <li class="menu-item-depth-0 menu-item">
          <a class="menu-link" href="#">South America</a>
        </li>
      </ul>
    </div>
  <?php
    endif;
  ?>
</nav>
