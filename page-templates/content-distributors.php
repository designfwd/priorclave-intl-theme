<?php
/**
 * Template Name: Distributors
 * Description: A layout to showcase local / national / regional product distributors
 */
?>
<!doctype html>
<html <?php bellhop_lang(); ?>>
  <?php get_partial('meta/head'); ?>
  <body <?php body_class('content content--distributors'); ?>>
    <header>
      <?php
        get_partial('navigation/primary'); // Primary navigation
        get_partial('hero/map-distributors'); // Distributor map area
      ?>
    </header>
    <main>
      <?php
        get_partial('navigation/categories-blocks'); // Distributors navigation
        get_partial('media/directory-distributors'); // Direcotry of distributors
        get_partial('media/cta-2up'); // CTA grid
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
