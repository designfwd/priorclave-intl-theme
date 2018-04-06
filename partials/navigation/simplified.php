<?php
/**
 * Navigation to use in lieu of primary nav on international homepages
 *
 * Displays a non-clickable logo and a contact button. The contact button links
 * to the contact page as as identified in the child site settings.
 *
 * @var array $logo   An image array set via ACF that shows the website logo
 * @var string $url   A string denoting the URL of the website contact page
 */

// Sets variables, with fallbacks if ACF is not installed or if vars are empty
if( function_exists('get_field') ):
  $logo = get_field('site_logo', 'option');
  $url = get_field('site_contactPage', 'option');
endif;
if( !isset($logo) || ($logo == '') ):
  $logo = array(
    'alt' => 'logo',
    'sizes' => array(
      'preload' => '//via.placeholder.com/64x26?text=logo',
      '128w' => '//via.placeholder.com/128x51?text=logo',
    ),
    'url' => '//via.placeholder.com/192x76?text=logo'
  );
endif;

if( !isset($url) || ($url == '') ):
  $url = '#';
endif;
?>
<section class="o-simpleNav">
  <img class="o-simpleNav__logo lazyload lazyload--blurUp"
    alt="<?php echo $logo['alt']; ?>"
    src="<?php echo $logo['sizes']['preload']; ?>"
    data-sizes="auto"
    data-srcset="<?php echo $logo['sizes']['preload']; ?> 16w,
      <?php echo $logo['sizes']['128w']; ?> 65w,
      <?php echo $logo['url']; ?> 129w
    "
  />
  <div class="o-simpleNav__button">
    <a class="a-navButton" href="<?php echo $url; ?>">Contact</a>
  </div>
</section>
