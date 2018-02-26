<?php
/*
 * Template Name: Product - Categories
 * Description: Page for displaying product categories
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

  <?php get_partial('meta/head'); ?>

  <body <?php body_class('product product--categories'); ?>>

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
        // Intro content block
        get_partial('content/intro-block');

        // Product grid
        get_partial('navigation/product-grid');

        // Simple CTA
        get_partial('media/cta-simple');

        // Feature content block
        get_partial('content/feature-block');

        // CTA grid
        get_partial('media/cta-grid');

        // Featured news posts
        get_partial('media/featured-posts');

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
