<?php
/*
 * Template Name: Product - Results
 * Description: Results page for products searched with the "finder" template
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

  <?php get_partial('meta/head'); ?>

  <body <?php body_class('product product--results'); ?>>

    <header>
      <?php
        // Primary navigation
        get_partial('navigation/primary');

        // General hero area
        get_partial('hero/general');
      ?>
    </header>

    <main>
      <?php
        // Intro content
        get_partial('content/intro-inverted');

        // Product results
        get_partial('media/product-results');

        // Quote request form
        get_partial('form/quote-request');

        // Custom quote block (uses related product layout)
        get_partial('media/product-related');

        // Testimonial slider
        get_partial('media/slider-testimonial');

        // CTA grid
        get_partial('media/cta-grid');
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
