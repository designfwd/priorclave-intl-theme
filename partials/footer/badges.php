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
?>
<section class="o-footerBadges">
  <?php
  if($badges):
    foreach( $badges as $post ):
      setup_postdata($post);
        $id = $post->ID;
        $label = get_field('badge_label', $id);
        $image = get_field('badge_image_grayscale', $id);
        if( !isset($image) || $image == '' ):
          $image = array(
            'sizes' => array(
              'preload' => '//via.placeholder.com/64x30?text=badge+unset',
              '128w' => '//via.placeholder.com/128x60?text=badge+unset',
              '240w' => '//via.placeholder.com/240x112?text=badge+unset',
              '320w' => '//via.placeholder.com/320x149?text=badge+unset'
            )
          );
        endif;
      ?>
        <img class="o-footerBadges__badge lazyload lazyload--blurUp"
          alt="<?php echo $label; ?>"
          src="<?php echo $image['sizes']['preload']; ?>"
          data-sizes="auto"
          data-srcset="<?php echo $image['sizes']['preload']; ?> 64w,
            <?php echo $image['sizes']['128w']; ?> 65w,
            <?php echo $image['sizes']['240w']; ?> 129w,
            <?php echo $image['sizes']['320w']; ?> 241w,
          "
        />
      <?php
      wp_reset_postdata();
    endforeach;
  else:
    $image = array(
      'sizes' => array(
        'preload' => '//via.placeholder.com/64x30?text=badges+unset',
        '128w' => '//via.placeholder.com/128x60?text=badges+unset',
        '240w' => '//via.placeholder.com/240x112?text=badges+unset',
        '320w' => '//via.placeholder.com/320x149?text=badges+unset'
      )
    );
  ?>
    <img class="o-footerBadges__badge lazyload lazyload--blurUp"
          alt="<?php echo $label; ?>"
          src="<?php echo $image['sizes']['preload']; ?>"
          data-sizes="auto"
          data-srcset="<?php echo $image['sizes']['preload']; ?> 64w,
            <?php echo $image['sizes']['128w']; ?> 65w,
            <?php echo $image['sizes']['240w']; ?> 129w,
            <?php echo $image['sizes']['320w']; ?> 241w,
          "
        />
  <?php
  endif;
  ?>
</section>
