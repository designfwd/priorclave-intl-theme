<?php
/*
 * Template Name: 404 Error Page
 * Description: Page template for 404 errors
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

  <?php get_template_part('partials/meta/head'); ?>

  <body <?php body_class('error error--404'); ?>>

    <header>
    </header>

    <main>
      <?php
        if ( have_posts() ):
          while ( have_posts() ): the_post();
            the_title();
            the_content();
          endwhile;
        endif;
      ?>
    </main>

    <footer class="universal-footer">
      <?php // Universal footer blocks
        // Newsletter signup form
        get_template_part('partials/footer/newsletter');

        // Footer masthead
        get_template_part('partials/footer/masthead');

        // Quicklink buttons
        get_template_part('partials/footer/quicklinks');

        // Contact blocks
        get_template_part('partials/footer/contacts');

        // Crediibility badges
        get_template_part('partials/footer/badges');

        // Copyright phrasing and links
        get_template_part('partials/footer/copyright');
      ?>
    </footer>

    <?php get_template_part('partials/meta/foot'); ?>

  </body>

</html>
