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
  $subjects = get_field('navigation_categoriesFAQ_subjects');
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
      'post_type' => 'faq',
      'numberposts' => '-1',
      'tax_query' => array(
        array(
          'taxonomy' => 'subject',
          'field' => 'id',
          'terms' => $subject->term_id,
        )
      )
    ));
    foreach( $faqs as $faq ):
      $slug = $faq->post_name;
      $question = $faq->post_title;
      $answer = $faq->post_content;
    ?>
      <div id="toggle-<?php echo $slug; ?>" class="m-faqToggle">
        <div class="m-faqToggle__icon" data-question="<?php echo $slug.'-'.$subject->term_id; ?>">
          <svg viewBox="0 0 8 16">
            <polygon points="0,0 0,16 8,8" />
          </svg>
        </div>
        <h3 class="m-faqToggle__category"><?php echo $question; ?></h3>
      </div>
      <div id="content-<?php echo $slug.'-'.$subject->term_id;; ?>" class="m-faqAnswer --preload">
        <div class="m-faqAnswer__content">
          <?php echo $answer; ?>
        </div>
      </div>
    <?php
    endforeach;
  endforeach;
  ?>
</section>
