<?php
/*
 * Template Name: Product
 * Description: Page for showing a single product
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

  <?php get_partial('meta/head'); ?>

  <body <?php body_class('product product--single'); ?>>

    <header>
      <?php
        // Primary navigation
        get_partial('navigation/primary');

        // Product-specific hero area
        get_partial('hero/product');
      ?>
    </header>

    <main>
      <?php
        // Product section navigation
        get_partial('navigation/product-grid');

        // Product features
        get_partial('content/product-features');

        // Product options
        get_partial('media/product-options');

        // Product specifications
        get_partial('content/product-specifications');

        // Product downloads and links
        get_partial('navigation/product-downloads');

        // CTA grid
        get_partial('media/cta-grid');

        // Testimonial slider
        get_partial('media/slider-testimonial');
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
