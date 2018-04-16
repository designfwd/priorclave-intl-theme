<?php
/**
 * Location map
 *
 * Static Google map with specific location information
 *
 * @var string $map       The map ID to pass to WP Google Maps
 */

if( function_exists('get_field') ):
  $ID = get_the_ID();
  $map = get_field('media_locationMap_map', $ID);
endif;
?>
<section class="o-locationMap">
  <div class="o-locationMap__map">
    <?php
      if( shortcode_exists('wpgmza') ):
        echo do_shortcode("[wpgmza id=\"$map\"]");
      endif;
    ?>
  </div>
</section>
