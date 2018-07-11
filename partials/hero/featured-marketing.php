<?php
/**
 * Hero area message with image and conditional contact capability
 *
 * Single-slide marketing message with image and optional distributor contact
 *
 * @var array $background     Background image to use for this area
 * @var array $headline       Lines of text to use in the headline
 * @var string $subtitle      Text to display below the headline
 * @var array $image          Image to feature in this area
 * @var boolean $link         Whether or not the contact link should be shown
 */

// If ACF is installed, set variables
if( function_exists('get_field') ):
  $ID = get_the_ID();
  $background = get_field('hero_featuredMarketing_background', $ID);
  $headline = 'hero_featuredMarketing_headline';
  $subtitle = get_field('hero_featuredMarketing_subtitle', $ID);
  $image = get_field('hero_featuredMarketing_image', $ID);
  $link = get_field('hero_featuredMarketing_link', $ID);

  // Fallbacks if variables are not set for the page
  if( !$background ):
    $background = get_field('default_hero_backgroundImage', 'option');
  endif;
  if( !$image ):
    $image = get_field('default_hero_image', 'option');
  endif;
endif;

if( !$background ):
  $background = array(
    'url' => '//picsum.photos/g/2400/800',
    'sizes' => array(
      'preload' => '//picsum.photos/g/64/64?blur'
    ),
  );
endif;

if( !$image ):
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
<section class="o-heroMarketing lazyload"
  data-bg="<?php echo $background['url']; ?>" style="background-image:url('<?php echo $background['sizes']['preload']; ?>')">
  <h1 class="o-heroMarketing__content">
    <?php // Lines of text
      if( have_rows($headline, $ID) ):
        while( have_rows($headline, $ID) ): the_row();
          $rows = count(get_field($headline, $ID));
          $text = get_sub_field('text');
          // Displays feature text on bottom line
          if( get_row_index() == $rows ):
          ?>
            <span class="o-heroMarketing__content--feature">
              <?php echo $text;?>
            </span>
          <?php
          // All lines above bottom appear normally with a line break
          else:
            echo $text . '<br />';
          endif;
        endwhile;
      else:
      ?>
        Lorem <br/>
        Ipsum <br/>
        <span class="o-heroMarketing__content--feature">
          Dolor Sit
        </span>
      <?php
      endif;
    ?>
    <div class="o-heroMarketing__content--subtitle">
      <?php echo $subtitle; ?>
    </div>
  </h1>
  <img class="o-heroMarketing__image lazyload lazyload--blurUp"
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

  <?php
    if( $link == true ):
      $url = get_field('site_contactPage', 'option');
  ?>
    <a class="o-heroMarketing__button" href="<?php echo $url; ?>">
      <span class="a-circleIcon"><svg class="a-circleIcon__svg a-circleIcon__svg--phone" viewBox="0 0 16 16"><?php get_svg('icon-phone'); ?></svg></span>
      Contact Local Distributor
    </a>
  <?php
    endif;
  ?>
</section>
