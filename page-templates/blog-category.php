<?php
/**
 * Template Name: Blog - Category
 * Description: Category archive for the blog
 */
?>
<!doctype html>
<html <?php priorclave_lang(); ?>>
  <?php get_partial('meta/head'); ?>
  <body <?php body_class('blog blog--category'); ?>>
    <?php
    wp_body_open();
    get_partial('meta/gtm-noscript');
    ?>
    <header>
      <?php
        get_partial('navigation/primary'); // Primary navigation
        get_partial('hero/general-category'); // General hero area
      ?>
    </header>
    <main>
      <?php
      get_partial('media/article-category-grid'); // Article grid
      get_partial('navigation/category-pagination'); // Pagination for articles
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
