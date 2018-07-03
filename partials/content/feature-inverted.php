<?php
/**
 * Feature content block with inverted styles
 *
 * A block of content featured after hero and introductory content,
 * with inverted colors
 *
 * @var string $headline      Headline text for this section
 * @var string $content       Body content for this section
 */

if( function_exists('get_field') ):
  $ID = get_the_ID();
  $headline = get_field('content_featureBlock_headline', $ID);
  $content = get_field('content_featureBlock_content', $ID);
endif;
if(
  !isset( $headline) &&
  !isset( $content )
):
  $headline = 'Placeholder Headline';
  $content = '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>';
endif;
?>
<section class="o-featureBlock o-featureBlock--inverted">
  <h2 class="o-featureBlock__headline o-featureBlock__headline--inverted"><?php echo $headline; ?></h2>
  <div class="o-featureBlock__content">
    <?php echo $content; ?>
  </div>
</section>
