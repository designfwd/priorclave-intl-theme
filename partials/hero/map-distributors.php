<?php
/**
 * Interactive Google map of autoclave distributors
 *
 * Interactive map, using Google Maps plugin, to display worldwide autoclave
 * distributors and their locations.
 *
 * @param string $map     The ID of the map to use
 */

if( function_exists('get_field') ):
  $map = get_field('hero_mapDistributors_id');
endif;
?>
<section class="o-distributorsMap">
<?php var_dump($map); ?>
</section>
