<?php
/*
 * Template Name: Blog - Homepage
 * Description: Homepage for the blog
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

  <?php get_partial('meta/head'); ?>

  <body <?php body_class('blog blog--home'); ?>>

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
        // Featured post
        get_partial('hero/featured-post');

        // Article grid
        get_partial('media/article-grid');

        // Pagination for articles
        get_partial('navigation/pagination');

        // Categories listing
        get_partial('navigation/categories-list');
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
