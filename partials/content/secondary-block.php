<?php
/**
 * General content block (secondary)
 *
 * General-purpose content block, containing only a single content area
 *
 * @var string $content       The content for this block
 */

if( function_exists('get_field') ):
  $ID = get_the_ID();
  $content = get_field('content_secondaryBlock_content', $ID);
endif;

if( $content ):
?>
<section class="o-secondaryBlock">
  <div class="o-secondaryBlock__content">
    <?php echo $content; ?>
  </div>
</section>
<?php
endif;
