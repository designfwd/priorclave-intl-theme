<?php
// Product specifications table
?>
<section id="productSpecifications" class="o-productSpecifications">
  <h2 class="o-productSpecifications__headline">Specifications</h2>
  <?php // Product specifications table
    $products = array(
      '40L Compact',
      '60L Compact',
    );
    foreach ($products as $product):
      $productSlug = str_replace(' ', '-', strtolower($product)); // creates a lowercase, JS-able slug
  ?>
    <div id="<?php echo $productSlug . '-productTitle'; ?>" class="o-productSpecifications__product">
      <?php echo $product; ?> Specifications
    </div>
    <div id="<?php echo $productSlug . '-productSpecs'; ?>" class="o-productSpecifications__table --preload">
      <?php // Sample product specs
        $specifications = array(
          array(
            'title' => 'Working Volume',
            'subtitle' => '',
            'description' => '40 liters',
          ),
          array(
            'title' => 'Operating Range',
            'subtitle' => '',
            'description' => 'Up to 138°C, 2.4 Bar (280°F, 34.8 psi)',
          ),
          array(
            'title' => 'Loading Format',
            'subtitle' => '',
            'description' => 'Front Loading',
          ),
          array(
            'title' => 'Loading Height',
            'subtitle' => 'w x d x h (and Door Swing)',
            'description' => 'Front Loading',
          ),
          array(
            'title' => 'Heating',
            'subtitle' => '',
            'description' => 'Electrical',
          ),
          array(
            'title' => 'Heat Input',
            'subtitle' => '',
            'description' => '3kW Single Phase',
          ),
          array(
            'title' => 'Working Dimensions',
            'subtitle' => 'diameter x depth',
            'description' => '350mm x 420mm 13.8" x 16.5"',
          ),
          array(
            'title' => 'Bottom Shelf Dimensions',
            'subtitle' => 'w x d x h',
            'description' => '9.7"W x 16.5"D with 11.6" clearance (upper shelf removed)',
          ),
          array(
            'title' => 'Working Volume',
            'subtitle' => '',
            'description' => '13.6"W x 16.5"D with 6.9" clearance',
          ),
          array(
            'title' => 'Operating Range',
            'subtitle' => '',
            'description' => '520mm x 610mm x 640mm 20.5" x 24" x 25.2"',
          ),
          array(
            'title' => 'Loading Format',
            'subtitle' => '',
            'description' => '70kg (154.3lbs)',
          ),
          array(
            'title' => 'Loading Height',
            'subtitle' => ' w x d x h (and Door Swing)',
            'description' => '826mm x 762mm x 796mm 32.5" x 30" x 31.2" (520mm, 20.5")',
          ),
        );
        foreach( $specifications as $specification ):
      ?>
        <div class="m-specificationCell">
          <div class="m-specificationCell__header">
            <?php
              echo $specification['title'];

              // If there's a subtitle, show it
              if( $specification['subtitle'] != '' ):
            ?>
              <br />
              <span class="m-specificationCell__header--subtitle">
                <?php echo $specification['subtitle']; ?>
              </span>
            <?php
              endif;
            ?>
          </div>
          <div class="m-specificationCell__contents">
            <?php echo $specification['description']; ?>
          </div>
        </div>
      <?php
        endforeach;
      ?>
      <div class="m-specificationCell m-specificationCell--filler">
        <div class="m-specificationCell__header"></div>
        <div class="m-specificationCell__contents"></div>
      </div>
    </div>
  <?php
    endforeach;
  ?>
</section>
