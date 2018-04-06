<?php
/*
 * Template Name: Content - Video
 * Description: A page to shocase linked videos
 */
?>
<!doctype html>
<html <?php bellhop_lang(); ?>>
  <?php get_partial('meta/head'); ?>
  <body <?php body_class('content content--video'); ?>>
    <header>
      <?php
        get_partial('navigation/primary'); // Primary navigation
        get_partial('hero/general'); // General hero area
      ?>
    </header>
    <main>
      <?php
        get_partial('media/featured-video'); // Featured video
        get_partial('content/intro-inverted'); // Intro content
        get_partial('media/video-grid'); // Video grid
        get_partial('navigation/pagination'); // Pagination for videos
        get_partial('content/feature-inverted'); // Other resources info block
        get_partial('media/cta-grid'); // Grid of links
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
