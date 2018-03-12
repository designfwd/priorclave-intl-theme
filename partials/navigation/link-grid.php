<?php
// Grid of linked pages with background imagery and rollover interaction
?>
<section class="o-linkGrid">
  <?php
    $grid = array(
      'Education & Academia',
      'Food & Beverage',
      'Health & Personal Care',
      'Test Laboratories',
      'Life Science & Pharmaceutical',
      'Veterinary Hospitals',
      'Agriculture & Environment Research',
      'Government Agencies',
      'Manufacturing & Industry'
    );

    foreach ($grid as $item):
  ?>
  <a class="o-linkGrid__item" href="#" style="background-image:url('<?php get_picsum(854,591,'grayscale'); ?>')">
    <div class="m-linkGridItem">
      <h3 class="m-linkGridItem__title"><?php echo $item; ?></h3>
      <div class="m-linkGridItem__overlay"></div>
    </div>
  </a>
  <?php
    endforeach;
  ?>
</section>
