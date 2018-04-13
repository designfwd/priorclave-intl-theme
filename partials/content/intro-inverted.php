<?php
/**
 * Intro block
 *
 * Introductory content block with a headline and body content, with inverted
 * colors from the primary
 *
 * @var string $headline    Header text for this section
 * @var string $body        Text content for this section
 */

if( function_exists('get_field') ):
 $ID = get_the_ID();
 $headline = get_field('content_introBlock_headline', $ID);
 $body = get_field('content_introBlock_body', $ID);
endif;
?>
<section class="o-introContent o-introContent--inverted">
  <h1 class="o-introContent__headline">
    <?php echo $headline; ?>
  </h1>
  <div class="o-introContent__content">
    <?php echo $body; ?>
  </div>
</section>
