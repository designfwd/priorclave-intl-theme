<?php
// Interactive product finder
?>
<section>
  <form class="o-productFinder" action="#">
    <?php
      // Product finder placeholder array
      $productFinder = array(
        array(
          'title' => 'Uses',
          'headline' => 'How Will You Use It?',
          'type' => 'checkbox',
          'choices' => array(
            array(
              'name' => 'Sterilization',
              'preferred' => false,
            ),
            array(
              'name' => 'Accelerated Aging',
              'preferred' => false,
            ),
            array(
              'name' => 'Product Testing',
              'preferred' => false,
            ),
          ),
        ),
        array(
          'title' => 'Materials',
          'headline' => 'What Materials?',
          'type' => 'checkbox',
          'choices' => array(
            array(
              'name' => 'Waste',
              'preferred' => false,
            ),
            array(
              'name' => 'Glassware',
              'preferred' => false,
            ),
            array(
              'name' => 'Plastic',
              'preferred' => false,
            ),
            array(
              'name' => 'Media',
              'preferred' => false,
            ),
            array(
              'name' => 'Instruments',
              'preferred' => false,
            ),
            array(
              'name' => 'Dry Goods',
              'preferred' => false,
            ),
          ),
        ),
        array(
          'title' => 'Orientations',
          'headline' => 'What Orientation?',
          'type' => 'radio',
          'choices' => array(
            array(
              'name' => 'Benchtop',
              'preferred' => false,
            ),
            array(
              'name' => 'Front-Loading',
              'preferred' => false,
            ),
            array(
              'name' => 'Top-Loading',
              'preferred' => false,
            ),
            array(
              'name' => 'Double-Ended',
              'preferred' => false,
            ),
            array(
              'name' => 'Power Door',
              'preferred' => false,
            ),
          ),
        ),
        array(
          'title' => 'Capacities',
          'headline' => 'How Much Capacity?',
          'type' => 'radio',
          'choices' => array(
            array(
              'name' => '40L - 60L',
              'preferred' => false,
            ),
            array(
              'name' => '60L - 150L',
              'preferred' => false,
            ),
            array(
              'name' => '150L - 400L',
              'preferred' => false,
            ),
            array(
              'name' => '400L+',
              'preferred' => false,
            ),
          ),
        ),
        array(
          'title' => 'Heat Source',
          'headline' => 'What Heating Source?',
          'type' => 'radio',
          'choices' => array(
            array(
              'name' => 'Direct Steam',
              'preferred' => false,
            ),
            array(
              'name' => 'Electrical Heating in Chamber',
              'preferred' => true,
            ),
            array(
              'name' => 'Steam Generator',
              'preferred' => false,
            ),
          ),
        ),
      );

      for( $i=0; $i<count($productFinder); $i++ ):
        $product = $productFinder[$i];
        $slug = $product['title'];
    ?>
      <div class="o-productFinder__section <?php if( ($i % 2) != 0 ){echo 'o-productFinder__section--alternate';}?>">
        <div class="m-finderSection">
          <div class="m-finderSection__number">
            <?php echo $i+1; ?>
          </div>
          <div class="m-finderSection__headline">
            <?php echo $product['headline']; ?>
          </div>
          <div class="m-finderSection__choices">
            <?php
              for( $j=0; $j<count($product['choices']); $j++):
                $choice = $product['choices'][$j];
                $name = $product['name'];
            ?>
              <div class="a-finderChoice">
                <img class="a-finderChoice__image <?php  if($choice['preferred']==true){echo'a-finderChoice__image--preferred';} ?>" src="<?php placeholder_img(150,225,'text=image'); ?>" />
                <div class="a-finderChoice__label">
                  <?php echo $choice['name']; ?>
                  <?php
                    if( $choice['preferred'] == true ):
                  ?>
                    <div class="a-finderChoice__label--subtitle">
                      (Recommended)
                    </div>
                  <?php
                    endif;
                  ?>
                </div>
                <input class="a-finderChoice__input" type="<?php echo $product['type']; ?>" name="<?php echo $slug; ?>" value="<?php echo $name; ?>" />
              </div>
            <?php
              endfor;
            ?>
          </div>

        </div>
      </div>
    <?php
      endfor;
    ?>
    <div class="o-productFinder__section">
      <div class="m-finderSection">
        <input class="m-finderSection__submit" type="submit" value="Find Autoclave" />
        <input class="m-finderSection__reset" type="reset" value="Reset Form" />
      </div>
    </div>
  </form>
</section>
