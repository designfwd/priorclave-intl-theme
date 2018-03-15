<?php
// Content block with product description and standard features
?>
<section id="productFeatures" class="o-productFeatures">

  <div class="o-productFeatures__content">
    <div class="m-productDescription">
      <h2 class="m-productDescription__headline">
        Product Description
      </h2>
      <div class="m-productDescription__description">
        <p>
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
        </p>
      </div>
      <div class="m-productDescription__sections">
        <div class="a-productSection">
          <h3 class="a-productSection__headline">
            Models
          </h3>
          <?php // Extra "2-up" modifier class, wich should be defined by an ACF choice ?>
          <ul class="a-productSection__list a-productSection__list--2up">
            <li class="a-productSection__item">
              Model: BTSD 40 Liter Capacity
            </li>
            <li class="a-productSection__item">
              Model: BTSD 40 Liter Capacity
            </li>
            <li class="a-productSection__item">
              Model: BTSD 60 Liter Capacity
            </li>
            <li class="a-productSection__item">
              Model: BTSD 60 Liter Capacity
            </li>
          </ul>
        </div>
        <div class="a-productSection">
          <h3 class="a-productSection__headline">
            Heat Source
          </h3>
          <ul class="a-productSection__list">
            <li class="a-productSection__item">
              Electrical available at no extra cost
            </li>
          </ul>
        </div>
        <div class="a-productSection">
          <h3 class="a-productSection__headline">
            Vacuum & Dry
          </h3>
          <ul class="a-productSection__list">
            <li class="a-productSection__item">
              Vacuum available as option
            </li>
            <li class="a-productSection__item">
              Drying available as option
            </li>
          </ul>
        </div>
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
          $features = array(
            'Flexible TACTROL® 2 Control System',
            'Multi-Program Memory (5 & 10 programs available)',
            'Vacuum, Drying, Heating options available',
            'One-Button Start, Media Warmin, Delayed Start',
            'Biomaster® Antimicrobial Services',
            '316L ASME-Certified Stainless Steel Chamber & Door',
            '2-Year Warranty on Installation, Maintenance, Parts',
          );
          foreach( $features as $feature ):
        ?>
          <li class="m-productStandards__item">
            <svg class="a-inlineIcon" viewBox="0 0 16 16"><?php get_svg('icon-check-circle'); ?></svg>
            <?php echo $feature; ?>
          </li>
        <?php
          endforeach;
        ?>
      </ul>
    </div>
  </div>

</section>
