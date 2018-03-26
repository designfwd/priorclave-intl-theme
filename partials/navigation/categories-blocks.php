<?php
// A list of category links arranged in blocks
?>
<section class="o-categoryNav">
  <?php
    // Options to be passed via ACF
    $category = 'region'; // Used as a modifier for IDs
    $options = array(
      'Africa',
      'Asia Pacific',
      'Europe',
      'Middle East',
      'North America',
      'South America',
    );

    foreach( $options as $option ):
  ?>
    <a class="o-categoryNav__link" href="#<?php echo $category . '-' . urlencode($option); ?>">
      <div class="o-categoryNav__block">
        <?php echo $option; ?>
      </div>
    </a>
  <?php
    endforeach;
  ?>
</section>
