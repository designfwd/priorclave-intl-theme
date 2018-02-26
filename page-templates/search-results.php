<?php
/*
 * Template Name: Search Results
 * Description: The results page for a website search
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

  <?php get_partial('meta/head'); ?>

  <body <?php body_class('search search--results'); ?>>

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
        // Site search
        get_partial('form/site-search');

        // Results grid
        get_partial('media/results-posts');

        // Pagination
        get_partial('navigation/pagination');
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
