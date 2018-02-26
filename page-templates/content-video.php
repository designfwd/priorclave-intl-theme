<?php
/*
 * Template Name: Content - Video
 * Description: A page to shocase linked videos
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

  <?php get_partial('meta/head'); ?>

  <body <?php body_class('content content--video'); ?>>

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
        // Featured video
        get_partial('media/featured-video');

        // Intro content
        get_partial('content/intro-inverted');

        // Video grid
        get_partial('media/video-grid');

        // Pagination for videos
        get_partial('navigation/pagination');

        // Other resources info block
        get_partial('content/feature-inverted');

        // Grid of links
        get_partial('media/cta-grid');
      ?>
    </main>

    <footer class="universal-footer">
      <?php // Universal footer blocks
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
