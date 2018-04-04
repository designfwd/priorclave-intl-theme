<?php
/**
 * Footer badges
 *
 * Group of credibility indicator badges for use in the page footer
 *
 * @var array $badges    Badges to include in the page footer
 */

// Sets variables, with fallbacks if ACF is not installed or if variables are empty
if( function_exists('get_field') ):
  $badges = get_field('footer_badges', 'option');
endif;

if( !isset($badges) || ($badges == '') ):
  $badges = array(
    array(
      'label' => 'Badge 1',
      'thumbnail' => array(
        'url' => '//via.placeholder.com/306x201?text=Badge+1',
        'sizes' => array(
          'preload' => '//via.placeholder.com/64x42?text=Badge+1',
          '128w' => '//via.placeholder.com/128x27?text=Badge+1',
          '240w' => '//via.placeholder.com/240x50?text=Badge+1',
        ),
      ),
    ),
    array(
      'label' => 'Badge 2',
      'thumbnail' => array(
        'url' => '//via.placeholder.com/306x201?text=Badge+2',
        'sizes' => array(
          'preload' => '//via.placeholder.com/64x42?text=Badge+2',
          '128w' => '//via.placeholder.com/128x27?text=Badge+2',
          '240w' => '//via.placeholder.com/240x50?text=Badge+2',
        ),
      ),
    ),
    array(
      'label' => 'Badge 3',
      'thumbnail' => array(
        'url' => '//via.placeholder.com/306x201?text=Badge+3',
        'sizes' => array(
          'preload' => '//via.placeholder.com/64x42?text=Badge+3',
          '128w' => '//via.placeholder.com/128x27?text=Badge+3',
          '240w' => '//via.placeholder.com/240x50?text=Badge+3',
        ),
      ),
    ),
    array(
      'label' => 'Badge 4',
      'thumbnail' => array(
        'url' => '//via.placeholder.com/306x201?text=Badge+4',
        'sizes' => array(
          'preload' => '//via.placeholder.com/64x42?text=Badge+4',
          '128w' => '//via.placeholder.com/128x27?text=Badge+4',
          '240w' => '//via.placeholder.com/240x50?text=Badge+4',
        ),
      ),
    ),
    array(
      'label' => 'Badge 5',
      'thumbnail' => array(
        'url' => '//via.placeholder.com/306x201?text=Badge+5',
        'sizes' => array(
          'preload' => '//via.placeholder.com/64x42?text=Badge+5',
          '128w' => '//via.placeholder.com/128x27?text=Badge+5',
          '240w' => '//via.placeholder.com/240x50?text=Badge+5',
        ),
      ),
    ),
  );
endif;
?>
<section class="o-footerBadges">
  <?php
    foreach( $badges as $post ):
      setup_postdata($post);

      // If ACF is set, use those values. Otherwise, use placeholders
      if(
        !function_exists('get_field') ||
        (function_exists('get_field') && !have_rows($badges))
      ):
        $label = $post['label'];
        $thumbnail = $post['thumbnail'];
      else:
        $label = get_field('badge_label');
        $thumbnail = get_field('badge_thumbnail');
      endif;
      ?>
        <img class="o-footerBadges__badge lazyload"
          alt="<?php echo $label; ?>"
          src="<?php echo $thumbnail['sizes']['preload']; ?>"
          data-sizes="auto"
          data-srcset="<?php echo $thumbnail['sizes']['preload']; ?> 64w,
            <?php echo $thumbnail['sizes']['128w']; ?> 65w,
            <?php echo $thumbnail['sizes']['240w']; ?> 129w,
            <?php echo $thumbnail['url']; ?> 241w,
          "
        />
      <?php
      wp_reset_postdata();
    endforeach;
  ?>
</section>
