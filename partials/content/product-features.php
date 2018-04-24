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
              foreach( $models as $post ):
                setup_postdata($post);
                $headline = get_field('autoclave_model', $post->ID);
                ?>
                <li class="a-productSection__item">
                  Model: <?php echo $headline; ?>
                </li>
                <?php
              endforeach;
              wp_reset_postdata();
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
        endif;
        ?>
      </ul>
    </div>
  </div>

</section>
