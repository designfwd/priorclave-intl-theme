<?php
/*
 * Template Name: Sitemap
 * Description: An HTML version of the website sitemap
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

  <?php get_partial('meta/head'); ?>

  <body <?php body_class('content content--sitemap'); ?>>

    <header>
    </header>

    <main>
      <?php
        // Human-readable sitemap
        get_partial('navigation/sitemap');
      ?>
    </main>

    <footer class="universal-footer">
      <?php
        // Related product block
        get_partial('media/product-related');

        // Universal footer blocks
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
