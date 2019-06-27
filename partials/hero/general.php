<?php
/**
 * General hero area
 *
 * Default hero content for internal pages, with page title and breadcrumbs
 *
 * @var array $background     Background image to use for this area
 * @var array $headline       Lines of text to use in the headline
 * @var array $image          Image to feature in this area
 */

if(function_exists('get_field') ):
  $ID = get_the_ID();
  $background = get_field('hero_general_background', $ID);
  $headline = 'hero_general_headline';
  $image = get_field('hero_general_image', $ID);

  // Defaults if variables are not set for the page
  if( !$background ):
    $background = get_field('default_hero_backgroundImage', 'option');
  endif;
  if( !$image ):
    $image = get_field('default_hero_image', 'option');
  endif;
endif;

// Creates fallbacks if no defaults are set
if( !$background || $background == '' ):
  $background = array(
    'alt' => 'background',
    'sizes' => array(
      'preload' => '//picsum.photos/g/64/21?blur',
      '128w' => '//picsum.photos/g/128/43',
      '240w' => '//picsum.photos/g/240/80',
      '320w' => '//picsum.photos/g/320/107',
      '360w' => '//picsum.photos/g/360/120',
      '375w' => '//picsum.photos/g/375/125',
      '480w' => '//picsum.photos/g/480/160',
      '540w' => '//picsum.photos/g/540/180',
      '640w' => '//picsum.photos/g/640/213',
      '720w' => '//picsum.photos/g/720/240',
      '768w' => '//picsum.photos/g/768/256',
      '800w' => '//picsum.photos/g/800/267',
      '960w' => '//picsum.photos/g/960/320',
      '1024w' => '//picsum.photos/g/1024/341',
      '1280w' => '//picsum.photos/g/1280/427',
      '1366w' => '//picsum.photos/g/1366/455',
      '1440w' => '//picsum.photos/g/1440/480',
      '1600w' => '//picsum.photos/g/1600/533',
      '1920w' => '//picsum.photos/g/1920/640',
      '2560w' => '//picsum.photos/g/2560/853',
      '3840w' => '//picsum.photos/g/3840/1280'
    ),
  );
endif;

if( !$image || $image == '' ):
  $image = array(
    'alt' => 'image',
    'sizes' => array(
      'preload' => '//via.placeholder.com/64x45?text=image',
      '128w' => '//via.placeholder.com/128x90?text=image',
      '240w' => '//via.placeholder.com/240x168?text=image',
      '320w' => '//via.placeholder.com/320x225?text=image',
      '360w' => '//via.placeholder.com/360x253?text=image',
      '375w' => '//via.placeholder.com/375x263?text=image',
      '480w' => '//via.placeholder.com/480x337?text=image',
      '540w' => '//via.placeholder.com/540x379?text=image',
      '640w' => '//via.placeholder.com/640x449?text=image',
      '720w' => '//via.placeholder.com/720x505?text=image',
      '768w' => '//via.placeholder.com/768x539?text=image',
      '800w' => '//via.placeholder.com/800x562?text=image',
      '960w' => '//via.placeholder.com/960x674?text=image',
      '1024w' => '//via.placeholder.com/1024x719?text=image',
      '1280w' => '//via.placeholder.com/1280x898?text=image',
      '1366w' => '//via.placeholder.com/1366x959?text=image',
    ),
  );
endif;
?>
<section class="o-heroGeneral">
  <img class="o-heroGeneral__background lazyload lazyload--blurUp"
      alt="<?php echo $background['alt']; ?>"
      src="<?php echo $background['sizes']['preload']; ?>"
      data-sizes="auto"
      data-srcset="<?php echo $background['sizes']['preload']; ?> 64w,
        <?php echo $background['sizes']['128w']; ?> 65w,
        <?php echo $background['sizes']['240w']; ?> 129w,
        <?php echo $background['sizes']['320w']; ?> 241w,
        <?php echo $background['sizes']['360w']; ?> 321w,
        <?php echo $background['sizes']['375w']; ?> 361w,
        <?php echo $background['sizes']['480w']; ?> 376w,
        <?php echo $background['sizes']['540w']; ?> 481w,
        <?php echo $background['sizes']['640w']; ?> 541w,
        <?php echo $background['sizes']['720w']; ?> 641w,
        <?php echo $background['sizes']['768w']; ?> 721w,
        <?php echo $background['sizes']['800w']; ?> 769w,
        <?php echo $background['sizes']['960w']; ?> 801w,
        <?php echo $background['sizes']['1024w']; ?> 961w,
        <?php echo $background['sizes']['1280w']; ?> 1025w,
        <?php echo $background['sizes']['1366w']; ?> 1281w,
        <?php echo $background['sizes']['1440w']; ?> 1367w,
        <?php echo $background['sizes']['1600w']; ?> 1441w,
        <?php echo $background['sizes']['1920w']; ?> 1601w,
        <?php echo $background['sizes']['2560w']; ?> 1921w,
        <?php echo $background['sizes']['3840w']; ?> 2561w,
      "
    />
  <div class="o-heroGeneral__wrapper">
    <h1 class="o-heroGeneral__content">
      <?php // Lines of text
        if( have_rows($headline, $ID) ):
          while( have_rows($headline, $ID) ): the_row();
            $rows = count(get_field($headline, $ID));
            $text = get_sub_field('text');
            // Displays feature text on bottom line
            if( get_row_index() == $rows ):
            ?>
              <span class="o-heroGeneral__content--feature">
                <?php echo $text . '<br />';?>
              </span>
            <?php
            // All lines above bottom appear normally with a line break
            else:
              echo $text . '<br />';
            endif;
          endwhile;
        endif;
      ?>
      <div class="breadcrumbs o-heroGeneral__breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
      <?php
        if(function_exists('bcn_display')):
          bcn_display();
        else:
          echo 'Priorclave / Autoclaves / Horizontal Autoclaves';
        endif;
      ?>
      </div>
    </h1>
    <img class="o-heroGeneral__image lazyload lazyload--blurUp"
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
        <?php echo $image['sizes']['640w']; ?> 541w,
        <?php echo $image['sizes']['720w']; ?> 641w,
        <?php echo $image['sizes']['768w']; ?> 721w,
        <?php echo $image['sizes']['800w']; ?> 769w,
        <?php echo $image['sizes']['960w']; ?> 801w,
        <?php echo $image['sizes']['1024w']; ?> 961w,
        <?php echo $image['sizes']['1280w']; ?> 1025w,
        <?php echo $image['sizes']['1366w']; ?> 1281w,
      "
    />
  </div>
</section>
