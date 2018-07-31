<?php
/**
 * A list of regional links arranged in blocks
 *
 * Regions, sourced from the parent site, displayed in blocks and linked to
 * body content divs
 */


?>
<section class="o-categoryNav">
  <?php
  // If the current page is not part of the parent site, switch the context
  if( get_current_blog_id() != 1 ):
    switch_to_blog(1);
  endif;

  // Gets the list of regions registered with the site
  $regions = get_terms( array(
    'taxonomy' => 'region',
    'hide_empty' => true
  ));

  // If necessary, switch context back to original site
  if( get_current_blog_id() != 1 ):
    restore_current_blog();
  endif;

  foreach( $regions as $region ):
  ?>
    <a class="o-categoryNav__link" href="#region-<?php echo $region->slug; ?>">
      <div class="o-categoryNav__block">
        <?php echo $region->name; ?>
      </div>
    </a>
  <?php
    endforeach;
  ?>
</section>
