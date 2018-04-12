<?php
/**
 * CTA with background image
 *
 * Call-to-action block with a prominent background image
 *
 * @var array $background     The background image for this section
 * @var string $headline      Header text for the CTA
 * @var string $description   CTA description content
 * @var string $label         Label text for the CTA button
 * @var string $page          The linked page for the button
 */

if( function_exists('get_field') ):
  $ID = get_the_ID();
  $background = get_field('media_ctaBackground_background', $ID);
  $headline = get_field('media_ctaBackground_headline', $ID);
  $description = get_field('media_ctaBackground_description', $ID);
  $label = get_field('media_ctaBackground_label', $ID);
  $page = get_field('media_ctaBackground_page', $ID);
endif;

if( !$background ):
  $background = array(
    'sizes' => array(
      'preload' => '//picsum.photos/g/64/64?blur',
      '2560w' => '//picsum.photos/g/2560/1493'
    ),
  );
endif;
?>
<section class="o-ctaBackground lazyload" data-bg="<?php echo $background['sizes']['2560w']; ?>" style="background-image:url('<?php echo $background['sizes']['preload']; ?>')">
  <h2 class="o-ctaBackground__headline"><?php echo $headline; ?></h2>
  <div class="o-ctaBackground__description">
    <?php echo $description; ?>
  </div>
  <a class="o-ctaBackground__button" href="<?php echo $page; ?>"><?php echo $label; ?></a>
</section>
