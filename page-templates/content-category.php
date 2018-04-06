<?php
/*
 * Template Name: Content - Category
 * Description: Parent template for general content pages
 */
?>
<!doctype html>
<html <?php bellhop_lang(); ?>>
  <?php get_partial('meta/head'); ?>
  <body <?php body_class('content content--category'); ?>>
    <header>
      <?php
        get_partial('navigation/primary'); // Primary navigation
        get_partial('hero/general'); // General hero area
      ?>
    </header>
    <main>
      <?php
        get_partial('content/intro-inverted'); // Intro content block
        get_partial('media/cta-grid'); // Grid of cta links
        get_partial('content/feature-block'); // Feature content block
        get_partial('media/cta-background'); // Background-image CTA
      ?>
    </main>
    <footer class="universal-footer">
      <?php // Universal footer blocks
        get_partial('footer/newsletter'); // Newsletter signup form
        get_partial('footer/masthead'); // Footer masthead
        get_partial('footer/quicklinks'); // Quicklink buttons
        get_partial('footer/contacts'); // Contact blocks
        get_partial('footer/badges'); // Crediibility badges
        get_partial('footer/copyright'); // Copyright phrasing and links
      ?>
    </footer>
    <?php get_partial('meta/foot'); ?>
  </body>
</html>
