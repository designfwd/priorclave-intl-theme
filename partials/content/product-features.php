<?php
/**
 * Product features section
 *
 * Content block with product description and standard features
 *
 * @var string $description       Short description of this autoclave type
 * @var array $models             The list of autoclave models associated with
 *                                this autoclave type
 * @var string $extras            ACF associated with extra info blocks, such
 *                                as heating source and vacuum/dry
 * @var string $features          ACF to reference list of standard features
 *
 */

if( function_exists('get_field') ):
  $ID = get_the_ID();
  $description = get_field('content_productFeatures_description', $ID);
  $models = get_field('content_productFeatures_models', $ID);
  $extras = 'content_productFeatures_extras';
  $features = 'content_productFeatures_features';
endif;
if( !isset($description) ):
  $description = '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>';
endif;
?>
<section id="productFeatures" class="o-productFeatures">

  <div class="o-productFeatures__content">
    <div class="m-productDescription">
      <h2 class="m-productDescription__headline">
        Product Description
      </h2>
      <div class="m-productDescription__description">
        <?php echo $description; ?>
      </div>
      <div class="m-productDescription__sections">
        <?php
        if( $models ):
        ?>
          <div class="a-productSection">
            <h3 class="a-productSection__headline">
              Models
            </h3>
            <ul class="a-productSection__list">
              <?php
              foreach( $models as $model ):
                // If model names are set for each product, display them.
                if( have_rows('autoclave_models', $model->ID) ):
                  while( have_rows('autoclave_models', $model->ID) ): the_row();
                  $modelName = get_sub_field('model');
                  ?>
                    <li class="a-productSection__item">
                      Model: <?php echo $modelName; ?>
                    </li>
                  <?php
                  endwhile;
                endif;
              endforeach;
              ?>
            </ul>
          </div>
        <?php
        endif;

        if( have_rows($extras, $ID) ):
          while( have_rows($extras, $ID) ): the_row();
            $headline = get_sub_field('headline');
            $items = 'items'; // Nested repeater
          ?>
            <div class="a-productSection">
              <h3 class="a-productSection__headline">
                <?php echo $headline; ?>
              </h3>
              <ul class="a-productSection__list">
                <?php
                while( have_rows( $items ) ): the_row();
                  $item = get_sub_field('item');
                ?>
                  <li class="a-productSection__item">
                    <?php echo $item; ?>
                  </li>
                <?php
                endwhile;
                ?>
              </ul>
            </div>
          <?php
          endwhile;
        endif;
        ?>
      </div>
    </div>
  </div>

  <div class="o-productFeatures__content">
    <div class="m-productStandards">
      <h2 class="m-productStandards__headline">
        Standard Features
      </h2>
      <ul class="m-productStandards__list">
        <?php // Standard Features list
        if( have_rows($features, $ID) ):
          while( have_rows($features, $ID) ): the_row();
            $feature = get_sub_field('feature');
          ?>
            <li class="m-productStandards__item">
              <svg class="a-inlineIcon" viewBox="0 0 16 16"><?php get_svg('icon-check-circle'); ?></svg>
              <?php echo $feature; ?>
            </li>
          <?php
          endwhile;
        else: // If no features are set, use placeholders
        ?>
          <li class="m-productStandards__item">
            <svg class="a-inlineIcon" viewBox="0 0 16 16"><?php get_svg('icon-check-circle'); ?></svg>
            Placeholder Item #1
          </li>
          <li class="m-productStandards__item">
            <svg class="a-inlineIcon" viewBox="0 0 16 16"><?php get_svg('icon-check-circle'); ?></svg>
            Placeholder Item #2
          </li>
        <?php
        endif;
        ?>
      </ul>
    </div>
  </div>

</section>
