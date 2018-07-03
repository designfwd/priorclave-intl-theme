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
  $ID = get_the_ID();
  $headline = get_field('content_introBlock_headline', $ID);
  $body = get_field('content_introBlock_body', $ID);
endif;
if(
  !isset($headline) &&
  !isset($body)
):
  $headline = 'Placeholder Headline';
  $body = '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>';
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
