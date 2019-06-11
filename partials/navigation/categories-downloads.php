<?php
// A list of category links arranged in blocks
/**
 * Blocks of linked Download categories
 *
 * A list of the download categories taxonomy terms, set in the admin and displayed in
 * a set order as link blocks
 *
 * @param array $subjects     The FAQ subjects to display
 */

if( function_exists('get_field') ):
  $subjects = get_field('navigation_categoriesDownloads_categories');
endif;
?>
<section class="o-categoryNav o-categoryNav--faq">
  <?php
    foreach( $subjects as $subject ):
  ?>
    <a class="o-categoryNav__link o-categoryNav__link--faq" href="#faq-<?php echo $subject->slug; ?>">
      <div class="o-categoryNav__block o-categoryNav__block--faq">
        <?php echo $subject->name; ?>
      </div>
    </a>
  <?php
    endforeach;
    //search pages that have downloads
    $args = array(
        'post_type' => 'page',
        'posts_per_page' => -1,
        'post_status' => 'publish',
        'meta_query' => array(
            array(
                'key' => '_wp_page_template',
                'value' => 'page-templates/product-single.php'
            )
        )
    );

  //need to find a way to create the anchor tag from the post name.
  $product_pages = new WP_Query($args);
  if ($product_pages->have_posts()) {
      while ($product_pages->have_posts()) {
          $product_pages->the_post();
          $slug = get_post_field('post_name', get_the_ID());
?>
    <a class="o-categoryNav__link o-categoryNav__link--faq" href="#toggle-<?php echo $slug; ?>">
      <div class="o-categoryNav__block o-categoryNav__block--faq">
        <?php the_title(); ?>
      </div>
    </a>
<?php
      }
  }
wp_reset_postdata();
  ?>
</section>

