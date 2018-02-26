<?php
/*
 * Template Name: Content - General
 * Description: General content page
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

  <?php get_partial('meta/head'); ?>

  <body <?php body_class('content content--general'); ?>>

    <header>
      <?php
        // Primary navigation
        get_partial('navigation/primary');

        // General hero area
        get_partial('hero/general');
      ?>
    </header>

    <main class="content__article">
      <?php
        // Page body content
        get_partial('content/general-block');
      ?>
    </main>

    <aside class="content__sidebar">
      <?php // Sidebar widgets
        // Social media sharing links
        get_partial('widget/social-sharing');

        // Newsletter signup form
        get_partial('widget/newsletter-signup');

        // Rich links block
        get_partial('widget/links-rich');

        // Related links list
        get_partial('widget/links-related');
      ?>
    </aside>

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
