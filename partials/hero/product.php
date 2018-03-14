<?php
// Product information area with credibility indicator badges and interactive gallery
?>
<section class="o-heroProduct">

  <div class="o-heroProduct__content">
    <div class="m-productHero">
      <h1 class="m-productHero__headline">
        <span class="m-productHero__headline--capacity">40L - 60L</span> Autoclave<br />
        <span class="m-productHero__headline--category">Benchtop</span>
      </h1>
      <div class="m-productHero__description">
        <p>
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
        </p>
      </div>
      <p class="m-productHero__price">
        &pound; 10,000 - 15,000
      </p>
      <div class="m-productHero__badges">
        <div class="a-productBadge">
          <?php // Product badges
            for( $i=0; $i<(rand(2,5)); $i++):
          ?>
            <img class="a-productBadge__image" src="<?php placeholder_img(75,100,'text=badge'); ?>" />
          <?php
            endfor;
          ?>
        </div>
      </div>
    </div>
  </div>

  <?php $heroSlides=rand(3,7); ?>
  <div class="o-heroProduct__slider">
    <div class="m-heroSlider">
      <?php // Main slider image
        for( $i=0; $i<$heroSlides; $i++):
      ?>
        <img class="m-heroSlider__image <?php if($i<1){echo 'm-heroSlider__image--current';} ?> lazyload"
          id="hero-<?php echo $i; ?>"
          src="<?php placeholder_img( 517, 517, ('text=image ' . ($i+1)) ); ?>"
        />
      <?php
        endfor;

        // Thumbnail images
        for( $i=0; $i<$heroSlides; $i++):
      ?>
          <img class="m-heroSlider__thumbnail <?php if($i<1){echo'm-heroSlider__thumbnail--current';} ?> lazyload"
            data-img="hero-<?php echo $i; ?>"
            src="<?php placeholder_img(48,54,('text=thumb ' . ($i+1)) ); ?>"
          />
      <?php
        endfor;
      ?>
    </div>
  </div>

</section>
