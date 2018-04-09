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

if( !isset($decoration) || ($decoration == '') ):
  $decoration = array(
    'alt' => 'Decoration',
    'url' => '//via.placeholder.com/139x76?text=Decoration'
  );
endif;
?>
<section class="o-introContent">
  <h1 class="o-introContent__headline"><?php echo $headline; ?></h1>
  <div class="o-introContent__content">
    <?php echo $content; ?>
  </div>
  <img class="o-introContent__icon" src="<?php echo $decoration['url'] ?>" alt="<?php echo $decoration['alt']; ?>" />
</section>
