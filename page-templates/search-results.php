<?php
/*
 * Template Name: Search Results
 * Description: The results page for a website search
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

  <?php get_partial('partials/meta/head'); ?>

  <body <?php body_class('search search--results'); ?>>

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
