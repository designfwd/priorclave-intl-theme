<?php
/**
 * Link block with background
 *
 * Transparent block links with background imagery
 *
 * @var array $background   The image object to appear in the background of the section
 * @var string $headline    Headline text for the section
 * @var string $links       The ACF field to grab links from
 */

// Sets variables, with fallback if ACF is not installed or if variables are empty
if( function_exists('get_field') ):
  $ID = get_the_ID();
  $background = get_field('navigation_linkBlocks_background', $ID);
  $headline = get_field('navigation_linkBlocks_headline', $ID);
  $links = 'navigation_linkBlocks_links';
endif;

if( !isset($background) || ($background == '') ):
  $background = array(
    'sizes' => array(
      'preload' => '//picsum.photos/g/64/64'
    ),
    'url' => '//picsum.photos/g/2400/1600'
  );
endif;
?>
<section class="o-linkBlocks lazyload"
  data-bg="<?php echo $background['url']; ?>"
  style="background-image:url('<?php echo $background['sizes']['preload']; ?>');"
>
  <h2 class="o-linkBlocks__headline"><?php echo $headline; ?></h2>
  <div class=o-linkBlocks__links>
    <?php
      if( have_rows($links, $ID) ):
        while( have_rows($links, $ID) ): the_row();
          $label = get_sub_field('label');

          $icon = get_sub_field('icon');
          if( !isset($icon) || ($icon == '') ):
            $icon = array(
              'sizes' => array(
                'preload' => '//via.placeholder.com/64x64?text=icon',
                '128w' => '//via.placeholder.com/128x128?text=icon'
              ),
            );
          endif;

          $linkType = get_sub_field('linkType');
          if( $linkType == true ):
            $link = get_sub_field('page');
          else:
            $link = get_sub_field('url');
          endif;
      ?>
        <a class="m-blockLink" href="<?php echo $link; ?>">
          <img class="m-blockLink__icon lazyload"
            alt="<?php echo $icon['alt']; ?>"
            src="<?php echo $icon['sizes']['preload']; ?>"
            data-sizes="auto"
            data-srcset="<?php echo $icon['sizes']['preload']; ?> 64w,
              <?php echo $icon['sizes']['128w']; ?> 65w
            "
          />
          <h3 class="m-blockLink__text"><?php echo $label; ?></h3>
        </a>
      <?php
        endwhile;
      endif;
    ?>
  </div>
</section>
