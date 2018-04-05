<?php
/*
 * Template Name: Contact Us
 * Description: Contact us page
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_partial('meta/head'); ?>
  <body <?php body_class('content content--contact'); ?>>
    <header>
      <?php
        get_partial('navigation/primary'); // Primary navigation
        get_partial('hero/general'); // General hero area
      ?>
    </header>
    <main>
      <?php
        get_partial('form/quote-request'); // Quote request form block
        get_partial('media/contact-grid'); // Contact grid
        get_partial('media/location-map'); // Single-location interactive map
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
