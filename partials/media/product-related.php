<?php
/**
 * Related Info Block
 *
 * Content block to promote another page, with linked button
 *
 * @var string $headline      The header text for this section
 * @var string $content       The content related to this section
 * @var array $image          The image associated with this content
 * @var string $label         Label for the section's button
 * @var string $page          The URL of the linked page
 */

if( function_exists('get_field') ):
  $ID = get_the_ID();
  $headline = get_field('media_productRelated_headline', $ID);
  $content = get_field('media_productRelated_content', $ID);
  $image = get_field('media_productRelated_image', $ID);
  $label = get_field('media_productRelated_label', $ID);
  $page = get_field('media_productRelated_page', $ID);

  // If variables are not set for this page, use site defaults
  if( !$headline && !$content && !$image && !$page && !$label ):
    $headline = get_field('default_related_headline', 'option');
    $content = get_field('default_related_content', 'option');
    $image = get_field('default_related_image', 'option');
    $label = get_field('default_related_label', 'option');
    $page = get_field('default_related_page', 'option');
  endif;
endif;

// If $image is not set for the page or the site, use a fallback
if( !$image ):
  $image = array(
    'alt' => '',
    'sizes' => array(
      'preload' => '//picsum.photos/64/96',
      '128w' => '//picsum.photos/128/191',
      '240w' => '//picsum.photos/240/358',
      '320w' => '//picsum.photos/320/478',
      '360w' => '//picsum.photos/360/537',
    ),
  );
endif;
?>
<section class="o-relatedProduct">
  <?php
    if($headline) :
  ?>
  <h2 class="o-relatedProduct__headline">
    <?php echo $headline; ?>
  </h2>
  <?php endif;?>
  <div class="o-relatedProduct__content">
    <div class="m-relatedContent">
  <?php
    if($content) :
  ?>      
      <div class="m-relatedContent__body">
        <?php echo $content; ?>
      </div>
  <?php endif;?>      
      <a class="m-relatedContent__button" href="<?php echo $page; ?>">
        <div class="m-relatedContent__buttonText">
          <?php echo $label; ?>
        </div>
      </a>
    </div>
    <a class="m-relatedContent__link" href="<?php echo $page; ?>">
      <img
        class="m-relatedContent m-relatedContent--image lazyload lazyload--blurUp"
        alt="<?php echo $image['alt']; ?>"
        src="<?php echo $image['sizes']['preload']; ?>"
        data-sizes="auto"
        data-srcset="<?php echo $image['sizes']['preload']; ?> 64w,
          <?php echo $image['sizes']['128w']; ?> 65w,
          <?php echo $image['sizes']['240w']; ?> 129w,
          <?php echo $image['sizes']['320w']; ?> 241w,
          <?php echo $image['sizes']['360w']; ?> 321w,
          <?php echo $image['sizes']['375w']; ?> 361w,
          <?php echo $image['sizes']['480w']; ?> 376w,
          <?php echo $image['sizes']['540w']; ?> 481w,
          <?php echo $image['sizes']['640w']; ?> 541w
        "
      />
    </a>
  </div>
</section>
