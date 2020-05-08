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
if( !isset($content) ):
  $content = '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>';
endif;
?>
<section class="o-secondaryBlock">
  <div class="o-secondaryBlock__content">
    <?php echo $content; ?>
  </div>
</section>
