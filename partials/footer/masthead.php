<?php
/**
 * Footer masthead
 *
 * Logo for display in the page footer
 *
 * @var array $logo    Image object to use for the logo
 */

// Sets variables, with fallbacks if ACF is not installed or if variables are empty
if( function_exists('get_field') ):
  $logo = get_field('site_logo', 'option');
endif;

if( !isset($logo) || $logo == ''):
  $logo = array(
    'alt' => 'Priorclave International',
    'url' => '//via.placeholder.com/621x164?text=Footer+Logo',
    'sizes' => array(
      'preload' => '//via.placeholder.com/64x17?text=Footer+Logo',
      '128w' => '//via.placeholder.com/128x34?text=Footer+Logo',
      '240w' => '//via.placeholder.com/240x64?text=Footer+Logo',
      '320w' => '//via.placeholder.com/320x85?text=Footer+Logo',
      '360w' => '//via.placeholder.com/360x95?text=Footer+Logo',
      '375w' => '//via.placeholder.com/375x99?text=Footer+Logo',
      '480w' => '//via.placeholder.com/480x127?text=Footer+Logo',
      '540w' => '//via.placeholder.com/540x143?text=Footer+Logo',
    )
  );
endif;
//
?>
<section class="o-footerMasthead">
  <img class="o-footerMasthead__logo lazyload"
    alt="<?php echo $logo['alt']; ?>"
    src="<?php echo $logo['sizes']['preload']; ?>"
    data-sizes="auto"
    data-srcset="<?php echo $logo['sizes']['preload']; ?> 64w,
      <?php echo $logo['sizes']['128w']; ?> 65w,
      <?php echo $logo['sizes']['240w']; ?> 129w,
      <?php echo $logo['sizes']['320w']; ?> 241w,
      <?php echo $logo['sizes']['360w']; ?> 321w,
      <?php echo $logo['sizes']['375w']; ?> 361w,
      <?php echo $logo['sizes']['480w']; ?> 376w,
      <?php echo $logo['sizes']['540w']; ?> 481w,
      <?php echo $logo['url']; ?> 541w
    "
  />
</section>
