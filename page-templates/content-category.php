<?php
/*
 * Template Name: Content - Category
 * Description: Parent template for general content pages
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

  <?php get_partial('meta/head'); ?>

  <body <?php body_class('content content--category'); ?>>

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
        // Intro content block, with inverted colors from the homepage
        get_partial('content/intro-inverted');

        // Grid of cta links
        get_partial('media/cta-grid');

        // Feature content block
        get_partial('content/feature-block');

        // Background-image CTA
        get_partial('media/cta-background');
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
