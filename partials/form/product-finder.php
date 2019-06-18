<?php
// Interactive product finder
/**
 * Interactive product finder
 *
 * Renders a product-finder form based on Autoclave options and passes this to
 * a results page
 *
 * @var array $productFinder      The product finder content
 */

$productFinder = get_field('form_productFinder');
  $results = $productFinder['form_productFinder_results'];
  $uses = $productFinder['form_productFinder_uses'];
  $materials = $productFinder['form_productFinder_materials'];
  $orientations = $productFinder['form_productFinder_orientations'];
  $capacities = $productFinder['form_productFinder_capacities'];
  $heating = $productFinder['form_productFinder_heating'];

// Creates the arrays for producing the form and starts an index
$index = 0;
$sections = array(
  'uses' => $uses,
  'materials' => $materials,
  'orientation' => $orientations,
  'capacity' => $capacities,
  'heating' => $heating
);
?>
<section class="o-productFinder">
  <?php
  ?>
  <form class="o-productFinder__form" action="<?php echo $results; ?>" method="POST" name="autoclave_finder">
    <?php
    // Creates the form sections
    foreach($sections as $taxonomy => $section):
      $index++;
      // For alternating sections, apply an 'alternate' modifier class
    ?>
      <div class="o-productFinder__section <?php if(($index % 2) == 0){echo 'o-productFinder__section--alternate';} ?>">
        <div class="m-finderSection">
          <?php // Section number ?>
          <div class="m-finderSection__number">
            <?php echo $index; ?>
          </div>
          <?php // Section headline ?>
          <div class="m-finderSection__headline">
            <?php echo $section['headline']; ?>
          </div>
          <?php
          // Section choices, as defined by the taxonomy

          $choices = get_terms( array(
            'hide_empty' => false,
            'taxonomy' => $taxonomy,
            'orderby'   => 'meta_value',
            'meta_query' => array(
                array(
                    'key' => 'autoclave_taxonomy_menu_order',
                )
              )
            ));

          // Sets the input type for this group
          $type = $section['style']['value'];
          ?>
          <fieldset name="autoclave_<?php echo $taxonomy; ?>">
            <div class="m-finderSection__choices">
              <?php
              foreach( $choices as $choice ):
                // Grabs data for the taxonomy choice
                $title = $choice->name;
                $description = $choice->description;
                $subtitle = get_field('autoclave_taxonomy_subtitle', $choice->taxonomy . '_' . $choice->term_id);
                $image = get_field('autoclave_taxonomy_image', $choice->taxonomy . '_' . $choice->term_id);

                // Sets fallback if no image is set
                if(!$image):
                  $image = array(
                    'sizes' => array(
                      'preload' => '//via.placeholder.com/64x96?text=image',
                      '128w' => '//via.placeholder.com/128x192?text=image',
                      '240w' => '//via.placeholder.com/240x360?text=image'
                    ),
                  );
                endif;
              ?>
                <div class="a-finderChoice">
                  <img class="a-finderChoice__image <?php if($subtitle=='(Recommended)'){echo'a-finderChoice__image--preferred';}; ?> lazyload lazyload--blurUp"
                    data-sizes="auto"
                    src="<?php echo $image['sizes']['preload']; ?>"
                    data-srcset="<?php echo $image['sizes']['preload']; ?> 64w,
                      <?php echo $image['sizes']['128w']; ?> 65w,
                      <?php echo $image['sizes']['240w']; ?> 129w
                    "
                  />
                  <div class="a-finderChoice__label">
                    <?php
                    echo $title;

                    if( $subtitle ):
                    ?>
                      <div class="a-finderChoice__label--subtitle">
                        <?php echo $subtitle; ?>
                      </div>
                    <?php
                    endif;
                    ?>
                  </div>
                  <input class="a-finderChoice__input" type="<?php echo $type; ?>" name="<?php echo $taxonomy; ?><?php if($type=='checkbox'){echo'[]';} ?>" value="<?php echo $title; ?>" />
                </div>
              <?php
              endforeach;
              ?>
            </div>
          </fieldset>
        </div>
      </div>
    <?php
    endforeach;
    ?>
    <div class="o-productFinder__section">
      <div class="m-finderSection">
        <input class="m-finderSection__submit" type="submit" value="Find Autoclave" />
        <input class="m-finderSection__reset" type="reset" value="Reset Form" />
      </div>
    </div>
  </form>
</section>
