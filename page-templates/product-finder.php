<?php
/*
 * Template Name: Product - Finder
 * Description: A "finder" tool for the different products
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

  <?php get_partial('meta/head'); ?>

  <body <?php body_class('product product--finder'); ?>>

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
        get_partial('content/intro-inverted');

        // Product finder form
        get_partial('form/product-finder');

        // CTA grid
        get_partial('media/cta-2up');
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
