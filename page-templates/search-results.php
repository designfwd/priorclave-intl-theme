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
        get_partial('navigation/primary'); // Primary navigation
        get_partial('hero/general'); // General hero area
      ?>
    </header>
    <main>
      <?php
        get_partial('form/site-search'); // Site search
        get_partial('media/results-posts'); // Results grid
        get_partial('navigation/pagination'); // Pagination
      ?>
    </main>
    <footer class="universal-footer">
      <?php
        get_partial('media/product-related'); // Related product block

        // Universal footer blocks
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
