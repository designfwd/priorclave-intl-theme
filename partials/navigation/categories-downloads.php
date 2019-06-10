<?php
// A list of category links arranged in blocks
/**
 * Blocks of linked FAQ subjects
 *
 * A list of the FAQ subject taxonomy terns, set in the admin and displayed in
 * a set order as link blocks
 *
 * @param array $subjects     The FAQ subjects to display
 */

if( function_exists('get_field') ):
  $subjects = get_field('navigation_categoriesDownload_subjects');
endif;
?>
<section class="o-categoryNav o-categoryNav--faq">
  <?php
    //need to add product downloads here from the pages
    foreach( $subjects as $subject ):
  ?>
    <a class="o-categoryNav__link o-categoryNav__link--faq" href="#faq-<?php echo $subject->slug; ?>">
      <div class="o-categoryNav__block o-categoryNav__block--faq">
        <?php echo $subject->name; ?>
      </div>
    </a>
  <?php
    endforeach;
  ?>
</section>

