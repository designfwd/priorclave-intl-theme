<?php
/*
 * Template Name: Homepage - Multiregion
 * Description: Homepage for group of coutries or regions
 */
?>
<?php
/**
 * Homepage for multiregion child sites
 *
 * Homepage for site within the multisite network that have information on
 * multiple countries and/or regions.
 *
 * @var array $headerBackground   The image to appear in the background of the
 *                                header
 */

// Sets $headerBackground, with fallback if ACF is not installed or if variable is empty
if( function_exists('get_field') ):
  $ID = get_the_ID();
  $headerBackground = get_field('homepage_headerBackground', $ID);
endif;
if( !isset($headerBackground) || ($headerBackground == '') ):
 $headerBackground = array(
   'sizes' => array(
     'preload' => '//picsum.photos/64/64/?blur'
   ),
   'url' => '//picsum.photos/2400/1200/?blur'
 );
endif;
?>
<!doctype html>
<html <?php bellhop_lang(); ?>>
  <?php get_partial('meta/head'); ?>
  <body <?php body_class('homepage homepage--multiregion'); ?>>
    <header class="homepage__header lazyload"
      data-bg="<?php echo $headerBackground['url']; ?>"
      style="background-image:url('<?php echo $headerBackground['sizes']['preload']; ?>');"
    >
      <?php
        get_partial('navigation/simplified'); // Simplified header navigation
        get_partial('hero/map-homepage'); // Homepage hero-area map
      ?>
    </header>
    <main>
      <?php
        get_partial('navigation/regional'); // Regional navigation
        get_partial('content/intro-decorated'); // Introductory content
        get_partial('navigation/link-blocks'); // Block links
        get_partial('media/slider-brands'); // Brand slideshow
        get_partial('media/product-spotlight'); // Product spotlight
      ?>
    </main>
    <footer class="universal-footer">
      <?php // Universal footer blocks
        get_partial('footer/newsletter'); // Newsletter signup form
        get_partial('footer/masthead'); // Footer masthead
        get_partial('footer/quicklinks'); // Quicklink buttons
        get_partial('footer/contacts'); // Contact blocks
        get_partial('footer/badges'); // Credibility badges
        get_partial('footer/copyright'); // Copyright phrasing and links
      ?>
    </footer>
    <?php get_partial('meta/foot'); ?>
  </body>
</html>
