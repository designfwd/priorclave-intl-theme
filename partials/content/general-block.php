<?php
/**
 * General content block
 *
 * General-purpose content block, containing only a single content area
 *
 * @var string $content       The content for this block
 */

if( function_exists('get_field') ):
  $ID = get_the_ID();
  $content = get_field('content_generalBlock_content', $ID);
endif;
?>
<section class="o-generalBlock">
  <div class="o-generalBlock__content">
    <?php echo $content; ?>
  </div>
</section>
