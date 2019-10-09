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
  $options = 'hero_mapHomepage_options';
  $language = get_field('site_language', 'option')['value'];
endif;
if( !isset($language) || ($language == '') ):
  $language = 'en';
endif;
?>
<nav class="o-regionalNav">
  <div class="o-regionalNav__menu">
    <?php
      if( have_rows($options, $ID) ):
        while( have_rows( $options, $ID) ): the_row();
          $region = get_sub_field('region');
          $regionLink = get_site_url(1) . '/' . $language . '/' . $region['value'];
        ?>
          <div class="o-regionalNav__region">
            <a class="o-regionalNav__region--link" href="<?php echo $regionLink; ?>">
              <?php echo $region['label']; ?>
            </a>
          <?php
          if( have_rows('countries') ):
          ?>
            <div class="o-regionalNav__subList">
            <?php
            while( have_rows('countries') ): the_row();
              $country = get_sub_field('country');
              $separateCheck = get_sub_field('separate');
              if( $separateCheck == true ):
                $countryLink = get_site_url(1) . '/' . $language . '-' . $country['value'] . '/';
              else:
                $countryLink = get_site_url(1) . '/' . $language . '/' . str_replace(' ', '-', strtolower($country['label']));
              endif;
            ?>
              <div class="o-regionalNav__country">
                <a class="o-regionalNav__country--link" href="<?php echo $countryLink; ?>">
                  <?php echo $country['label']; ?>
                </a>
              </div>
            <?php
            endwhile;
            ?>
            </div>
          <?php
          endif;
          ?>
          </div>
          <?php
        endwhile;
      endif;
    ?>
  </div>
</nav>
