<?php
// Interactive product finder
?>
<section class="o-productFinder">
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
  ?>
</section>
