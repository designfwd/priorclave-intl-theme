<?php
/**
 * Template Name: Homepage - Country/Region
 * Description: Homepage for a single country or region
 */
?>
<!doctype html>
<html <?php priorclave_lang(); ?>>
  <?php get_partial('meta/head'); ?>
  <body <?php body_class('homepage homepage--regional'); ?>>
    <header>
      <?php
        get_partial('navigation/primary'); // Primary navigation
        get_partial('hero/featured-marketing'); // Hero area featured marketing content
      ?>
    </header>
    <main>
      <?php
        get_partial('content/intro-block'); // Intro content block
        get_partial('navigation/product-grid'); // Product category grid
        get_partial('media/cta-simple'); // Simple CTA
        get_partial('content/feature-block'); // Feature content block
        get_partial('navigation/link-grid'); // Links grid
        get_partial('media/cta-2up'); // CTA 2-up
        get_partial('media/cta-background'); // Background-image CTA
        get_partial('media/featured-posts'); // Featured posts
        get_partial('media/slider-testimonial'); // Testimonial slider
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
