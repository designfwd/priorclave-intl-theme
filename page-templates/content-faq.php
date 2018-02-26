<?php
/*
 * Template Name: FAQ
 * Description: A page dedicated to frequently asked questions
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

  <?php get_partial('meta/head'); ?>

  <body <?php body_class('content content--faq'); ?>>

    <header>
      <?php
        // Primary navigation
        get_partial('navigation/primary');

        // General her area
        get_partial('hero/general');
      ?>
    </header>

    <main>
      <?php
        // Intro block
        get_partial('content/intro-inverted');

        // FAQ navigation
        get_partial('navigation/categories-blocks');

        // Direcotry of FAQs
        get_partial('media/directory-faq');

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
