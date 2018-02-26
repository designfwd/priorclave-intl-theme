<?php
/*
 * Template Name: Homepage - Multiregion
 * Description: Homepage for group of coutries or regions
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

  <?php get_partial('meta/head'); ?>

  <body <?php body_class('homepage homepage--multiregion'); ?>>

    <header>
      <?php
        // Simplified header navigation
        get_partial('navigation/simplified');

        // Homepage hero-area map
        get_partial('hero/map-homepage');

        // Regional navigation
        get_partial('navigation/regional');
      ?>
    </header>

    <main>
      <?php
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
