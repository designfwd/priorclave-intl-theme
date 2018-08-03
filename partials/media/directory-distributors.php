<?php
/**
 * Collapsible directory of distributors
 */

// If the current page is not part of the parent site, switch the context
if( get_current_blog_id() != 1 ):
  switch_to_blog(1);
endif;

// Gets the list of regions registered with the site
$regions = get_terms( array(
  'taxonomy' => 'region',
  'hide_empty' => true
));

// If necessary, switch context back to original site
if( get_current_blog_id() != 1 ):
  restore_current_blog();
endif;
?>
<section class="o-distributors">
  <?php
    if( $regions != ''):
      foreach ( $regions as $region ):
      ?>
        <div id="region-<?php echo $region->slug; ?>" class="o-distributors__region">
          <?php echo $region->name; ?>
        </div>
        <?php
        // Gets distributors tagged with this region
        $distributors = get_posts(array(
          'post_type' => 'distributor',
          'numberposts' => -1,
          'tax_query' => array(
            array(
              'taxonomy' => 'region',
              'field' => 'id',
              'terms' => $region->term_id,
            )
          )
        ));

        // Builds the array of countries for this region
        $countries = array();
        foreach( $distributors as $distributor ):
          // Gets the countries assigned to this distributor
          $taggedCountries = wp_get_post_terms( $distributor->ID, 'country' );

          // If the countries are not in the array, add them
          foreach( $taggedCountries as $country ):
            if( !in_array( $country->name, $countries ) ):
              $countries[] = $country->name;
            endif;
          endforeach;
        endforeach;
        // Sorts array alphabetically
        asort( $countries );

        foreach( $countries as $country ):
          $slug = str_replace(array(' ', '&amp;'), '-', $country); // URL-safe version of country name
        ?>
          <div id="toggle-<?php echo $slug; ?>" class="m-distributorToggle">
            <div class="m-distributorToggle__icon" data-country="<?php echo $slug; ?>">
              <svg viewBox="0 0 8 16">
                <polygon points="0,0 0,16 8,8" />
              </svg>
            </div>
            <h3 class="m-distributorToggle__country"><?php echo $country; ?></h3>
          </div>
          <?php
          // Gets the distributors assigned to this country
          $distributors = get_posts(array(
            'post_type' => 'distributor',
            'numberposts' => -1,
            'tax_query' => array(
              array(
                'taxonomy' => 'country',
                'field' => 'name',
                'terms' => $country
              )
            )
          ));
          ?>
          <div id="content-<?php echo $slug; ?>" class="m-distributorCountry --preload">
            <?php
            foreach( $distributors as $distributor):
              $company = get_field('company', $distributor->ID);
              $companySlug = get_post_field( 'post_name', get_post($distributor->ID) );
              $address = 'address';
              ?>
              <div class="m-distributorCountry__content">
                <h4 class="m-distributorCountry__content--company"><?php echo $company; ?></h4>
                <address class="m-distributorCountry__content--address">
                  <?php
                  if( have_rows( $address, $distributor->ID) ):
                    while( have_rows($address, $distributor->ID) ): the_row();
                      echo get_sub_field('text') . '<br/>';
                    endwhile;
                  endif;
                  if( get_field('city', $distributor->ID) ):
                    echo get_field('city', $distributor->ID);
                  endif;
                  if(
                    get_field('city', $distributor->ID) &&
                    (
                      get_field('state', $distributor->ID) ||
                      get_field('postal', $distributor->ID)
                    )
                  ):
                    echo ', ';
                  endif;
                  if( get_field('state', $distributor->ID) ):
                    echo get_field('state', $distributor->ID) . '  ';
                  endif;
                  if( get_field('postal', $distributor->ID) ):
                    echo get_field('postal', $distributor->ID);
                  endif;
                  ?>
                  <br/>
                </address>
              </div>
              <div class="m-distributorCountry__contact">
                <div class="m-distributorCountry__contact--button" data-country="<?php echo $companySlug; ?>">
                Contact Distributor
                </div>
              </div>
              <dialog id="dialog-<?php echo $companySlug; ?>" class="m-distributorDialog">
                <div class="m-distributorDialog__description">
                  Contact distributor for <?php echo $country; ?>
                </div>
                <div class="m-distributorDialog__button">
                  Close
                </div>
              </dialog>
              <div class="m-distributorCountry__divider"></div>
            <?php
            endforeach;
            ?>
          </div>
        <?php
        endforeach;
      endforeach;
    endif;
  ?>
</section>
