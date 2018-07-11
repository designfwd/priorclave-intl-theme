<?php
/**
 * Simple Call to Action
 *
 * Simple call-to-action with a headline, body, and page-linked button
 *
 * @var string $headline      Headline text for this area
 * @var string $description   Descriptive text to include for this CTA
 * @var string $label         Label text for the button
 * @var string $url           URL of linked page for button
 */

if( function_exists('get_field') ):
  $ID = get_the_ID();
  $headline = get_field('media_ctaSimple_headline', $ID);
  $description = get_field('media_ctaSimple_description', $ID);
  $label = get_field('media_ctaSimple_label', $ID);
  $url = get_field('media_ctaSimple_url', $ID);
endif;

if( !$headline ):
  $headline = 'No Headline Set';
endif;

if( !$url ):
  $label = 'No Link Set';
endif;
?>
<section class="o-ctaSimple">
  <h2 class="o-ctaSimple__headline"><?php echo $headline; ?></h2>
  <div class="o-ctaSimple__description">
    <?php echo $description; ?>
  </div>
  <a class="o-ctaSimple__button" href="<?php echo $url; ?>"><?php echo $label; ?></a>
</section>
