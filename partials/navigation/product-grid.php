<?php
// Grid of linked product images
?>
<section class="o-productGrid">
  <h2 class="o-productGrid__headline">Steam Autoclaves</h2>
  <div class="o-productGrid__products">
    <?php // Products for the grid
      $products = array(
        "Top-Loading/Vertical Autoclaves",
        "Front-Loading Autoclaves",
        "Benchtop Autoclaves",
        "Rectangular Autoclaves",
        "Power Door Autoclaves",
        "Double-Ended/Pass-Through Autoclaves",
        "Horizontal Autoclaves",
        "Large Capacity Autoclaves",
        "Custom Autoclaves"
      );
      foreach( $products as $product ):
    ?>
      <a class="m-productGridItem" href="#">
        <img class="m-productGridItem__image" src="<?php placeholder_img(rand(220,280),rand(340,400),'text=Autoclave'); ?>" />
        <h3 class="m-productGridItem__title"><?php echo $product; ?></h3>
      </a>
    <?php
      endforeach;
    ?>
  </div>
</section>
