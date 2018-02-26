<?php
/*
 * Template Name: Blog - Post
 * Description: Single blog post layout
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

  <?php get_partial('partials/meta/head'); ?>

  <body <?php body_class('blog blog--post'); ?>>

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
        get_partial('partials/footer/newsletter');

        // Footer masthead
        get_partial('partials/footer/masthead');

        // Quicklink buttons
        get_partial('partials/footer/quicklinks');

        // Contact blocks
        get_partial('partials/footer/contacts');

        // Crediibility badges
        get_partial('partials/footer/badges');

        // Copyright phrasing and links
        get_partial('partials/footer/copyright');
      ?>
    </footer>

    <?php get_partial('partials/meta/foot'); ?>

  </body>

</html>
