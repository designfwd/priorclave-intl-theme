<?php
// Image-enhanced products resulting from use of product finder
/**
 * Product results page using input from product finder form
 *
 * Image-enhanced products reulsting from us of product finder. These results
 * are not only displayed as traditional results, but query variables set from
 * the $_POST variable as well.
 *
 * @var array $results      The results of the product finder form
 */

// Set the results from product finder form
$results = $_POST;

// For items that are arrays, flatten them
function flatten_result($array) {
  $result = '';
  if( is_array($array) ):
    foreach($array as $item):
      $result .= $item . ', ';
    endforeach;
    $result = substr( $result, 0, (strlen($result)-2));
  else:
    $result = $array;
  endif;
  return $result;
}

// Assigns and flattens the values in $results
$uses = flatten_result($results['uses']);
$materials = flatten_result($results['materials']);
$orientation = flatten_result($results['orientation']);
$capacity = flatten_result($results['capacity']);
$heating = flatten_result($results['heating']);

// Sets query variables for passing to forms later in the page
set_query_var( 'autoclave_uses', $uses );
set_query_var( 'autoclave_materials', $materials );
set_query_var( 'autoclave_orientation', $orientation );
set_query_var( 'autoclave_capacity', $capacity );
set_query_var( 'autoclave_heating', $heating );

// Set up the values for related autoclaves
$autoclaves = get_posts( array(
  'fields' => 'ids',
  'post_type' => 'autoclave',
  'posts_per_page' => 99,
  'tax_query' => array(
    'relation' => 'AND',
    array(
      'taxonomy' => 'orientation',
      'field' => 'name',
      'terms' => $orientation
    ),
    array(
      'taxonomy' => 'capacity',
      'field' => 'name',
      'terms' => $capacity
    )
  )
) );

// Find which page(s) include the results
$pages = get_posts( array(
  'orderby' => 'rand',
  'post_type' => 'page',
  'posts_per_page' => 2,
  'meta_query' => array(
    array(
      'compare' => 'LIKE',
      'key' => 'content_productFeatures_models',
      'value' => $autoclaves
    )
  )
) );
?>
<section class="o-productResults">
  <?php
  foreach( $pages as $page ):
  ?>
    <a class="o-productResults__item" href="<?php the_permalink($page); ?>">
      <div class="m-resultOption">
        <img class="m-resultOption__image lazyload lazyload--blurUp"
          data-sizes="auto" src="<?php echo get_the_post_thumbnail_url($page->ID, 'preload'); ?>"
          data-srcset="<?php echo get_the_post_thumbnail_url($page->ID, 'preload'); ?> 64w,
            <?php echo get_the_post_thumbnail_url($page->ID, '128w'); ?> 65w,
            <?php echo get_the_post_thumbnail_url($page->ID, '240w'); ?> 129w,
            <?php echo get_the_post_thumbnail_url($page->ID, '320w'); ?> 241w,
          "
        />
        <h3 class="m-resultOption__headline"><?php the_field('hero_product_capacity', $page->ID); ?> <span class="m-resultOption__headline m-resultOption__headline--regular">Steam Autoclave</span></h3>
        <h2 class="m-resultOption__subhead"><?php the_field('hero_product_category', $page->ID); ?></h2>
      </div>
    </a>
  <?php
    endforeach;
  ?>
</section>
