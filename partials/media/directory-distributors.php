<?php
// Collapsible directory of distirbutors
?>
<section class="o-distributors">
  <?php
    $regions = get_query_var('regions'); // Retrieve var from other module;
    if( $regions != ''):
      foreach ( $regions as $region ):
    ?>
      <div id="region-<?php echo urlencode($region); ?>" class="o-distributors__region">
        <?php echo $region; ?>
      </div>
      <?php // Placeholder countries
        $countries = array(
          'Country Name 01',
          'Country Name 02',
          'Country Name 03',
          'Country Name 04',
        );

        foreach( $countries as $country ):
          $countryID = str_replace(' ', '-', $country); // Creates a jQuery-friendly ID
      ?>
        <div id="toggle-<?php echo $countryID; ?>" class="m-distributorToggle">
          <div class="m-distributorToggle__icon" data-country="<?php echo $countryID; ?>">
            <svg viewBox="0 0 8 16">
              <polygon points="0,0 0,16 8,8" />
            </svg>
          </div>
          <h3 class="m-distributorToggle__country"><?php echo $country; ?></h3>
        </div>
        <div id="content-<?php echo $countryID; ?>" class="m-distributorCountry --preload">
          <div class="m-distributorCountry__content">
            <h4 class="m-distributorCountry__content--company">Company Name</h4>
            <address class="m-distributorCountry__content--address">
              B39-41/28 1st New Motachi Road<br />
              Off Nsawam Road<br />
              Neoplan Service Center<br />
              P.O. Box 1234<br />
              County Name, Country Name<br />
              <br />
              Web: <a class="m-distributorCountry__content--link" href="#">https://www.website.com</a>
            </address>
          </div>
          <div class="m-distributorCountry__contact">
            <div class="m-distributorCountry__contact--button" data-country="<?php echo $countryID; ?>">
              Contact Distributor
            </div>
          </div>
        </div>
        <dialog id="dialog-<?php echo $countryID; ?>" class="m-distributorDialog">
          <div class="m-distributorDialog__description">
            Contact distributor for <?php echo $country; ?>
          </div>
          <div class="m-distributorDialog__button">
            Close
          </div>
        </dialog>
      <?php
        endforeach;
      endforeach;
    endif;
  ?>
</section>
