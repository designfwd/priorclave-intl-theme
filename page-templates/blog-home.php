<?php
/*
 * Template Name: Blog - Homepage
 * Description: Homepage for the blog
 */
?>
<!doctype html>
<html <?php bellhop_lang(); ?>>
  <?php get_partial('meta/head'); ?>
  <body <?php body_class('blog blog--home'); ?>>
    <header>
      <?php
        get_partial('navigation/primary'); // Primary navigation
        get_partial('hero/general'); // General hero area
      ?>
    </header>
    <main>
      <?php
        get_partial('hero/featured-post'); // Featured post
        get_partial('media/article-grid'); // Article grid
        get_partial('navigation/pagination'); // Pagination for articles
        get_partial('navigation/categories-list'); // Categories listing
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
