<?php
/**
 * Homepage navigation for multiregion sites
 *
 * Navigation-accompanying map for use on homepages that guide the user to
 * country/region selection
 *
 * @var string $headline    Top-row text show above the country dropdown
 * @var string $subhead     Second-row text shown above the country dropdown
 * @var array $options      Countries and regions
 * @var string $language    The abbreviation of the language used
 *                          to target regions and countries
 */

// Sets variables
if( function_exists('get_field') ):
  $ID = get_the_ID();
  $headline = get_field('hero_mapHomepage_headline', $ID);
  $subhead = get_field('hero_mapHomepage_subhead', $ID);
  $options = 'hero_mapHomepage_options';
  $siteLang = get_field('site_language', 'option')['value'];
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
        if( have_rows($options, $ID) ):
          while( have_rows($options, $ID) ): the_row();
            $region = get_sub_field('region');
            $regionLang = get_sub_field('language')['value'];
            $regionLink = get_site_url(1) . '/' . $regionLang . '/' . $region['value'];
          ?>
            <li class="m-mapDropdown__region">
              <a class="a-dropdownLink" href="<?php echo $regionLink; ?>">
                <?php echo $region['label']; ?>
              </a>
            </li>
            <?php
              if( have_rows('countries') ):
                while( have_rows('countries') ): the_row();
                  $country = get_sub_field('country');
                  $language = get_sub_field('language')['value'];
                  // If the language shouldn't be shown, set language to empty
                  if( !get_field('site_language_show', 'option') ):
                    $language = '';
                  endif;
                  $separateCheck = get_sub_field('separate');
                  if( $separateCheck == true ):
                    $countryLink = get_site_url(1) . '/' . $language . '-' . $country['value'] . '/';
                  else:
                    $countryLink = get_site_url(1) . '/' . $language . '/' . str_replace(' ', '-', strtolower($country['label']));
                  endif;
                ?>
                  <li class="m-mapDropdown__country">
                    <a class="a-dropdownLink" href="<?php echo $countryLink; ?>">
                      <svg class="a-dropdownLink a-dropdownLink--flag" viewBox="0 0 640 480"><?php get_svg( 'flag/' . $country['value'] ); ?></svg>
                      <?php
                        echo $country['label'];
                        // If the site language is different from the language  being linked to, display that value
                        if( $language != $siteLang ):
                          echo ' (' . $language . ')';
                        endif;
                      ?>
                    </a>
                  </li>
                <?php
                endwhile;
              endif;
            ?>
          <?php
          endwhile;
        endif;
      ?>
    </ul>
  </div>
</section>
