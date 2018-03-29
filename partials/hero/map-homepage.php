<?php
/**
 * Homepage navigation for multiregion sites
 *
 * Navigation-accompanying map for use on homepages that guide the user to country/region selection
 *
 * @var string $headline    Top-row text show above the country dropdown
 * @var string $subhead     Second-row text shown above the country dropdown
 * @var array $options      Countries and regions
 * @var string $language    The abbreviation of the language used throughout the site and its children
 */


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
          'name' => 'Australia'
        ),
        array(
          'abbreviation' => 'my',
          'name' => 'Malaysia'
        ),
        array(
          'abbreviation' => 'ph',
          'name' => 'Philippines'
        ),
      ),
    ),
    array(
      'slug' => 'europe',
      'name' => 'Europe',
      'countries' => array(
        array(
          'abbreviation' => 'gb',
          'name' => 'United Kingdom'
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
          'name' => 'Canada'
        ),
        array(
          'abbreviation' => 'us',
          'name' => 'United States'
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
<section class="o-homepageMap">
  <h1 class="o-homepageMap__headline">
    <?php echo $headline; ?><br />
    <span class="o-homepageMap__headline--subhead"><?php echo $subhead; ?></span>
  </h1>
  <div class="o-homepageMap__dropdown">
    <a id="homepageMap-dropdownMenu" class="a-dropdownLink" href="#">
      Select Your Country or Region <svg id="homepageMap-toggleIcon" class="a-dropdownLink a-dropdownLink--icon" viewBox="0 0 16 16"><?php get_svg('angle-down'); ?></svg>
    </a>
    <ul id="homepageMap-dropdownList" class="m-mapDropdown m-mapDropdown--hidden">
      <?php
        foreach( $options as $region ):
          $regionLink = get_site_url(1) . '/' . $language . '-' . $region['slug'];
      ?>
        <li class="m-mapDropdown__region">
          <a class="a-dropdownLink" href="<?php echo $regionLink; ?>">
            <?php echo $region['name']; ?>
          </a>
        </li>
        <?php // if there are countries, create items for them
          if( $region['countries'] ):
            foreach( $region['countries'] as $country ):
              $countryLink = get_site_url(1) . '/' . $language . '-' . $country['abbreviation'];
          ?>
            <li class="m-mapDropdown__country">
              <a class="a-dropdownLink" href="<?php echo $countryLink; ?>">
                <svg class="a-dropdownLink a-dropdownLink--flag" viewBox="0 0 640 480"><?php get_svg( 'flag/' . $country['abbreviation'] ); ?></svg><?php echo $country['name']; ?>
              </a>
            </li>
          <?php
            endforeach;
          endif;
        ?>
      <?php
        endforeach;
      ?>
    </ul>
  </div>
</section>
