<?php
/**
 * Feature content block
 *
 * A block of content featured after hero and introductory content
 *
 * @var string $headline      Headline text for this section
 * @var string $content       Body content for this section
 */

if( function_exists('get_field') ):
  $ID = get_the_ID();
  $headline = get_field('content_featureBlock_headline', $ID);
  $content = get_field('content_featureBlock_content', $ID);
endif;
?>
<section class="o-featureBlock">
  <h2 class="o-featureBlock__headline"><?php echo $headline; ?></h2>
  <div class="o-featureBlock__content">
    <?php echo $content; ?>
  </div>
</section>
