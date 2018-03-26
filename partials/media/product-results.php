<?php
// Image-enhanced products resulting from use of product finder
?>
<section class="o-productResults">
  <?php // Creates random number of CTA grid boxes for testing purposes
    $products = array(
      array(
        "capacity" => "100L - 450L",
        "orientation" => "Front-Loading"
      ),
      array(
        "capacity" => "40L - 60L",
        "orientation" => "Benchtop"
      ),
    );

    foreach( $products as $product ):
  ?>
    <a class="o-productResults__item" href="#">
      <div class="m-resultOption">
        <img class="m-resultOption__image" src="<?php placeholder_img(300, 300, ('text=autoclave')); ?>" />
        <h3 class="m-resultOption__headline"><?php echo $product['capacity']; ?> <span class="m-resultOption__headline m-resultOption__headline--regular">Steam Autoclave</span></h3>
        <h2 class="m-resultOption__subhead"><?php echo $product['orientation']; ?></h2>
      </div>
    </a>
  <?php
    endforeach;
  ?>
</section>
