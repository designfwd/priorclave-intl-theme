<?php
// Collapsible directory of frequently asked questions
/**
 * List of FAQs, separated by subject
 *
 * A collapsible directory of frequently asked questions, grouped by the
 * 'subject' taxonomy
 *
 * @param array $subjects     The FAQ subjects to display
 */

if( function_exists('get_field') ):
  $subjects = get_field('navigation_categoriesDownloads_categories');
endif;
?>
<section class="o-faq">
  <?php
  // Creates a block for each subject, with FAQs for each nested within
  foreach( $subjects as $subject ):
  ?>
    <div id="faq-<?php echo $subject->slug; ?>" class="o-faq__category">
      <?php echo $subject->name; ?>
    </div>
    <?php
    $faqs = get_posts(array(
      'post_type' => 'downloads',
      'numberposts' => '-1',
      'tax_query' => array(
        array(
          'taxonomy' => 'download',
          'field' => 'id',
          'terms' => $subject->term_id,
        )
      )
    ));
    foreach( $faqs as $faq ):
      $slug = $faq->post_name;
      $question = $faq->post_title;
      $answer = $faq->post_content;
      $file = get_field('cpt_downloads_file', $faq->ID);
    ?>
      <div id="toggle-<?php echo $slug; ?>" class="m-faqToggle">
        <div class="m-faqToggle__icon" data-question="<?php echo $slug; ?>">
          <svg viewBox="0 0 8 16">
            <polygon points="0,0 0,16 8,8" />
          </svg>
        </div>
        <h3 class="m-faqToggle__category"><?php echo $question; ?></h3>
      </div>
      <div id="content-<?php echo $slug; ?>" class="m-faqAnswer --preload">
        <div class="m-faqAnswer__content">
          <?php echo $answer; ?>
          <a class="m-productDownload" href="<?php echo $file; ?>" target="_blank" rel="noopener noreferrer">
            <div class="m-productDownload__icon">
              <svg class="m-productDownload__icon--svg" viewBox="0 0 16 16">
                <?php get_svg('icon-file-alt'); ?>
              </svg>
            </div>
            <div class="m-productDownload__title">
              <?php echo $question; ?>
            </div>
          </a>          
        </div>
      </div>
    <?php
    endforeach;
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
?>

          <div class="o-faq__category">
      Autoclaves
    </div>
    <?php
  //need to find a way to create the anchor tag from the post name.
  $product_pages = new WP_Query($args);
  if ($product_pages->have_posts()) {
      while ($product_pages->have_posts()) {
          $product_pages->the_post();
          $slug = get_post_field('post_name', get_the_ID());
          $ID = get_the_ID();
          $models = get_field('content_productFeatures_models', $ID);
          $downloads = 'navigation_productDownloads_downloads';

?>
      <div id="toggle-<?php echo $slug; ?>" class="m-faqToggle">
        <div class="m-faqToggle__icon" data-question="<?php echo $slug; ?>">
          <svg viewBox="0 0 8 16">
            <polygon points="0,0 0,16 8,8" />
          </svg>
        </div>
        <h3 class="m-faqToggle__category"><?php the_title(); ?></h3>
      </div>
      <div id="content-<?php echo $slug; ?>" class="m-faqAnswer --preload">
        <div class="m-faqAnswer__content">
          <?php 
            if( have_rows($downloads,$ID) ):
              ?>
              <div class="o-productDownloads__grid o-productDownloads__grid--other">
                <?php // TODO: commented out for now - may add back later if scale requires ?>
                <!-- <h3 class="o-productDownloads__subhead">
                  Other Downloads
                </h3> -->
                <?php
                    while( have_rows($downloads,$ID) ): the_row();
                      $label = get_sub_field('label',$ID);
                      $file = get_sub_field('file',$ID)['url'];
                    ?>
                      <a class="m-productDownload" href="<?php echo $file; ?>" target="_blank" rel="noopener noreferrer">
                        <div class="m-productDownload__icon">
                          <svg class="m-productDownload__icon--svg" viewBox="0 0 16 16">
                            <?php get_svg('icon-file-alt'); ?>
                          </svg>
                        </div>
                        <div class="m-productDownload__title">
                          <?php echo $label; ?>
                        </div>
                      </a>
                    <?php
                    endwhile;
                  ?>
                  </div>
                  <?php
                endif;
                    ?>
        </div>
      </div>
<?php
      }
  }
wp_reset_postdata();
  ?>
</section>
