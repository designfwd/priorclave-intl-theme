<?php
/*
 * Template Name: Distributors
 * Description: A layout to showcase local / national / regional product distributors
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

  <?php get_partial('meta/head'); ?>

  <body <?php body_class('content content--distributors'); ?>>

    <header>
      <?php
        // Primary navigation
        get_partial('navigation/primary');

        // Distributor map area
        get_partial('hero/map-distributors');
      ?>
    </header>

    <main>
      <?php
        // Distributors navigation
        get_partial('navigation/categories-blocks');

        // Direcotry of distributors
        get_partial('media/directory-distributors');

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
