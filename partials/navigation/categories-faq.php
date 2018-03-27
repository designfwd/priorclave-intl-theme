<?php
// A list of category links arranged in blocks
?>
<section class="o-categoryNav o-categoryNav--faq">
  <?php
    // Options to be passed via ACF
    $category = 'faq'; // Used as a modifier for IDs
    $options = array(
      'Choosing an Autoclave',
      'Operation Questions',
      'Service Questions',
      'Technical Questions',
      'Maintenance Questions',
    );
    set_query_var('categories', $options); // Sets variable for access by other modules

    foreach( $options as $option ):
  ?>
    <a class="o-categoryNav__link o-categoryNav__link--faq" href="#<?php echo $category . '-' . urlencode($option); ?>">
      <div class="o-categoryNav__block o-categoryNav__block--faq">
        <?php echo $option; ?>
      </div>
    </a>
  <?php
    endforeach;
  ?>
</section>
