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
?>
<section class="o-introContent o-introContent--inverted">
  <h1 class="o-introContent__headline">
    <?php echo $headline; ?>
  </h1>
  <div class="o-introContent__content">
    <?php echo $body; ?>
  </div>
</section>
