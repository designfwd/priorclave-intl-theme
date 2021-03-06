<?php
/**
 * Template Name: 404 Error Page
 * Description: Page template for 404 errors
 */
?>
<!doctype html>
<html <?php priorclave_lang(); ?>>
  <?php get_partial('meta/head'); ?>
  <body <?php body_class('error error--404'); ?>>
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
        get_partial('hero/general-404'); // General hero area
      ?>
    </header>
      <main>
      <p>Unfortunately, we can't seem to find the page you're looking for. This could be due to a deleted page, a broken link, or a mistyped web page address.</p>
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
