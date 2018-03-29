<?php
/*
 * Template Name: Homepage - Multiregion
 * Description: Homepage for group of coutries or regions
 */

/**
 * Homepage for multiregion child sites
 *
 * Homepage for site within the multisite network that have information on multiple countries
 * and/or regions.
 *
 * @var array $headerBackground   The image to appear in the background of the header
 */

 if( !isset($headerBackground) || ($headerBackground == '') ):
   $headerBackground = array(
     'sizes' => array(
       'preload' => '//picsum.photos/64/64/?blur'
     ),
     'url' => '//picsum.photos/2400/1600/?blur'
   );
 endif;
?>
<!doctype html>
<html <?php language_attributes(); ?>>

  <?php get_partial('meta/head'); ?>

  <body <?php body_class('homepage homepage--multiregion'); ?>>

    <header class="homepage__header lazyload"
      data-bg="<?php echo $headerBackground['url']; ?>"
      style="background-image:url('<?php echo $headerBackground['sizes']['preload']; ?>');">
      <?php
        // Simplified header navigation
        get_partial('navigation/simplified');

        // Homepage hero-area map
        get_partial('hero/map-homepage');
      ?>
    </header>

    <main>
      <?php
        // Regional navigation
        get_partial('navigation/regional');

        // Introductory content
        get_partial('content/intro-decorated');

        // Block links
        get_partial('navigation/link-blocks');

        // Brand slideshow
        get_partial('media/slider-brands');

        // Product spotlight
        get_partial('media/product-spotlight');
      ?>
    </main>

    <footer class="universal-footer">
      <?php // Universal footer blocks
        // Newsletter signup form
        get_partial('footer/newsletter');

        // Footer masthead
        get_partial('footer/masthead');

        // Quicklink buttons
        get_partial('footer/quicklinks');

        // Contact blocks
        get_partial('footer/contacts');

        // Crediibility badges
        get_partial('footer/badges');

        // Copyright phrasing and links
        get_partial('footer/copyright');
      ?>
    </footer>

    <?php get_partial('meta/foot'); ?>

  </body>

</html>
