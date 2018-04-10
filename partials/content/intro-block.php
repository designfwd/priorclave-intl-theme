<?php
/**
 * Intro block
 *
 * Introductory content block with a headline and body content
 *
 * @var string $headline    Header text for this section
 * @var string $body        Text content for this section
 */

if( function_exists('get_field') ):
  $headline = get_field('content_introBlock_headline');
  $body = get_field('content_introBlock_body');
endif;
?>
<section class="o-introContent">
  <h1 class="o-introContent__headline">
    <?php echo $headline; ?>
  </h1>
  <div class="o-introContent__content">
    <?php echo $body; ?>
  </div>
</section>
