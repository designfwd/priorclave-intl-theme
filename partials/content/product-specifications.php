<?php
/**
 * Product specifications table
 *
 * Table of autoclave models with their associated specifications
 *
 * @var array $models       The list of autoclave models associated with
 *                          this autoclave type
 */

if( function_exists('get_field') ):
  $ID = get_the_ID();
  $models = get_field('content_productFeatures_models', $ID);
endif;
?>
<section id="productSpecifications" class="o-productSpecifications">
  <h2 class="o-productSpecifications__headline">Specifications</h2>
  <?php
  if( $models ):
    foreach( $models as $model ):
      $modelID = $model->ID;
      $shortName = get_field('autoclave_name', $modelID);
      $slug = str_replace(' ', '-', strtolower($shortName)); // creates a lowercase, JS-able slug
      $specifications = 'autoclave_specifications';
    ?>
    <div id="<?php echo $slug . '-productTitle'; ?>" class="o-productSpecifications__product">
      <?php echo $shortName; ?> Specifications
    </div>
    <div id="<?php echo $slug . '-productSpecs'; ?>" class="o-productSpecifications__table --preload">
      <?php
        while( have_rows('autoclave_specifications', $modelID) ): the_row();
          $title = get_sub_field('title');
          $subtitle = get_sub_field('subtitle');
          $content = get_sub_field('content');
      ?>
        <div class="m-specificationCell">
          <div class="m-specificationCell__header">
            <?php
              echo $title;

              // If there's a subtitle, show it
              if( $subtitle != '' ):
            ?>
              <br />
              <span class="m-specificationCell__header--subtitle">
                <?php echo $subtitle; ?>
              </span>
            <?php
              endif;
            ?>
          </div>
          <div class="m-specificationCell__contents">
            <?php echo $content; ?>
          </div>
        </div>
      <?php
        endwhile;
      ?>
      <div class="m-specificationCell m-specificationCell--filler">
        <div class="m-specificationCell__header"></div>
        <div class="m-specificationCell__contents"></div>
      </div>
    </div>
  <?php
    endforeach;
  else:
  ?>
    <h3 class="o-productSpecifications__headline">
      -- No Specifications Set For This Product --
    </h3>
  <?php
  endif;
  ?>
</section>
