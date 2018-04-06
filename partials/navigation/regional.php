<?php
/**
 * Regional navigation
 *
 * Regional navigation for use to link to a particular country or region
 *
 * @var array $options      Countries and regions
 * @var string $language    The abbreviation of the language used
 *                          throughout the site and its children
 */

// Sets variables with fallbacks if they're unset or if ACF is not in use
if( function_exists('get_field') ):
  $ID = get_the_ID();
  $options = get_field('hero_mapHomepage_options', $ID);
  $language = get_field('site_language', 'option')['value'];
endif;

if( !isset($headline) || ($headline == '') ):
  $headline = 'Reliable. Flexible. Programmable. Affordable';
endif;

if( !isset($subhead) || ($subhead == '') ):
  $subhead = 'Autoclaves Worldwide';
endif;

if( !isset($options) || ($options == '') ):
  $options = array(
    array(
      'slug' => 'africa',
      'name' => 'Africa',
    ),
    array(
      'slug' => 'asia-pacific',
      'name' => 'Asia Pacific',
      'countries' => array(
        array(
          'abbreviation' => 'au',
          'name' => 'Australia',
          'external_site' => false,
        ),
        array(
          'abbreviation' => 'my',
          'name' => 'Malaysia',
          'external_site' => false,
        ),
        array(
          'abbreviation' => 'ph',
          'name' => 'Philippines',
          'external_site' => false,
        ),
      ),
    ),
    array(
      'slug' => 'europe',
      'name' => 'Europe',
      'countries' => array(
        array(
          'abbreviation' => 'gb',
          'name' => 'United Kingdom',
          'external_site' => true
        ),
      ),
    ),
    array(
      'slug' => 'middle-east',
      'name' => 'Middle East',
    ),
    array(
      'slug' => 'north-america',
      'name' => 'North America',
      'countries' => array(
        array(
          'abbreviation' => 'ca',
          'name' => 'Canada',
          'external_site' => false,
        ),
        array(
          'abbreviation' => 'us',
          'name' => 'United States',
          'external_site' => true,
        ),
      ),
    ),
    array(
      'slug' => 'south-america',
      'name' => 'South America'
    )
  );
endif;

if( !isset($language) || ($language == '') ):
  $language = 'en';
endif;
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
