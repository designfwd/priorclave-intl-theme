<?php
// Call-to-action grid with image-enhanced links
?>
<section class="o-ctaGrid">
  <?php // Creates random number of CTA grid boxes for testing purposes
    $ctaGrid = array(
      array(
        "headline" => "Find",
        "subhead" => "Find the perfect autoclave fast"
      ),
      array(
        "headline" => "Why Us?",
        "subhead" => "Why is Priorclave the right choice?"
      ),
      array(
        "headline" => "Technical Support",
        "subhead" => "Contact a technical support expert"
      ),
      array(
        "headline" => "Service & Maintenance",
        "subhead" => "Request service and maintenance for your autoclave"
      ),
      array(
        "headline" => "Autoclave Calibration",
        "subhead" => "Request calibration and testing for you autoclave"
      ),
      array(
        "headline" => "Parts & Consumables",
        "subhead" => "Order parts and consumables for your autoclave"
      ),
      array(
        "headline" => "Warranty",
        "subhead" => "Lean about your Priorclave warranty"
      ),
      array(
        "headline" => "FAQ",
        "subhead" => "Find answers to your questions"
      ),
      array(
        "headline" => "Downloads",
        "subhead" => "Download resources from our website"
      ),
      array(
        "headline" => "Video Gallery",
        "subhead" => "View helpful videos from experts"
      )
    );

    for( $i=0; $i<2; $i++):
  ?>
    <a class="o-ctaGrid__item o-ctaGrid__item--large" href="#">
      <div class="m-ctaGridItem">
        <h3 class="m-ctaGridItem__headline m-ctaGridItem__headline--large"><?php echo $ctaGrid[$i]["headline"]; ?></h3>
        <h4 class="m-ctaGridItem__subhead m-ctaGridItem__subhead--large"><?php echo $ctaGrid[$i]["subhead"]; ?></h4>
        <img class="m-ctaGridItem__image" src="<?php placeholder_img(267, 247, ('text=item ' . ($i+1))); ?>" />
      </div>
    </a>
  <?php
    endfor;
  ?>
</section>
