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
    <header>
      <?php
        var_dump(get_current_blog_id());
        if( get_current_blog_id() == 1 ):
          get_partial('navigation/simplified'); // Multisite navigation
        else:
          get_partial('navigation/primary'); // Primary navigation
        endif;
        get_partial('hero/general-404'); // General hero area
      ?>
    </header>
      <main>
        It looks like there's nothing here. Try searching for something else or going back to the <a href="<?php echo get_home_url(); ?>">homepage</a>.
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
