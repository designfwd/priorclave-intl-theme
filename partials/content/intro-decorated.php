<?php
/**
 * Intro content with image at bottom
 *
 * Introductory content block with decorative image at the bottom
 *
 * @var string $headline    Descriptor for the section
 * @var string $content     Block of paragraph content
 * @var array $decoration   Image object to display below content
 */

// Sets variables, with fallbacks if ACF is not installed or if variables are empty
if( function_exists('get_field') ):
  $ID = get_the_ID();
  $headline = get_field('content_introDecorated_headline', $ID);
  $content = get_field('content_introDecorated_content', $ID);
  $decoration = get_field('content_introDecorated_decoration', $ID);
endif;

if(
  !isset($headline) &&
  !isset($content) &&
  !isset($decoration)
):
  $headline = 'Placeholder Headline';
  $content = '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>';
  $decoration = array(
    'alt' => 'Decoration',
    'sizes' => array(
      'preload' => '//via.placeholder.com/64x35?text=Decoration',
      '128w' => '//via.placeholder.com/128x70?text=Decoration'
    )
  );
endif;
?>
<section class="o-introContent">
  <h1 class="o-introContent__headline"><?php echo $headline; ?></h1>
  <div class="o-introContent__content">
    <?php echo $content; ?>
  </div>
  <img class="o-introContent__icon lazyload lazyload--blurUp"
    alt="<?php echo $decoration['alt']; ?>"
    src="<?php echo $decoration['sizes']['preload']; ?>"
    data-sizes="auto"
    data-srcset="<?php echo $decoration['sizes']['preload']; ?> 64w,
      <?php echo $decoration['sizes']['128w']; ?> 128w
    "
  />
</section>
