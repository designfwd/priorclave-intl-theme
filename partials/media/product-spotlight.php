<?php
// Content block with images and information about a particular product or category
?>
<section class="o-productSpotlight">
  <h2 class="o-productSpotlight__headline">Priorclave Steam Autoclaves</h2>
  <div class="o-productSpotlight__content">
    <div>
      <p>
        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
      </p>
      <p>
        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
      </p>
      <p>
        Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat commodo consequat.
      </p>
    </div>
    <?php $slides=5; ?>
    <div class="m-spotlightSlider">
      <?php
        for( $i=0; $i<$slides; $i++):
      ?>
        <img data-img="spotlight-<?php echo $i; ?>"
          class="m-spotlightSlider__thumbnail <?php if($i<1){echo 'm-spotlightSlider__thumbnail--current';} ?> lazyload"
          src="<?php placeholder_img( 86, 129, ('text=slide ' . ($i+1)) ); ?>"
        />
      <?php endfor;?>
    </div>
  </div>
  <div class="o-productSpotlight__content">
    <?php
      for( $i=0; $i<$slides; $i++):
    ?>
    <div class="m-spotlightSlider">
      <img class="m-spotlightSlider__image <?php if($i<1){echo 'm-spotlightSlider__image--current';} ?> lazyload"
        id="spotlight-<?php echo $i; ?>"
        src="<?php placeholder_img( 431, 649, ('text=slide' . ($i+1)) ); ?>"
      />
    </div>
    <?php
      endfor;
    ?>
  </div>
</section>
