<?php
/**
 * Template Name: Sitemap
 * Description: An HTML version of the website sitemap
 */
?>
<!doctype html>
<html <?php priorclave_lang(); ?>>
  <?php get_partial('meta/head'); ?>
  <body <?php body_class('content content--sitemap'); ?>>
    <?php
    wp_body_open();
    get_partial('meta/gtm-noscript');
    ?>
    <header>
      <?php
        if( get_current_blog_id() == 1 ):
          get_partial('navigation/simplified'); // Multisite navigation
        else:
          get_partial('navigation/primary'); // Primary navigation
        endif;
        get_partial('hero/general'); // General hero area
      ?>
    </header>
    <main>
      <?php
        get_partial('navigation/sitemap'); // Human-readable sitemap
      ?>
    </main>
    <footer class="universal-footer">
      <?php
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
