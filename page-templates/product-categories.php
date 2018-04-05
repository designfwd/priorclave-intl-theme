<?php
/*
 * Template Name: Product - Categories
 * Description: Page for displaying product categories
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_partial('meta/head'); ?>
  <body <?php body_class('product product--categories'); ?>>
    <header>
      <?php
        get_partial('navigation/primary'); // Primary navigation
        get_partial('hero/general'); // General hero area
      ?>
    </header>
    <main>
      <?php
        get_partial('content/intro-block'); // Intro content block
        get_partial('navigation/product-grid'); // Product grid
        get_partial('media/cta-simple'); // Simple CTA
        get_partial('content/feature-block'); // Feature content block
        get_partial('media/cta-grid'); // CTA grid
        get_partial('media/featured-posts'); // Featured news posts
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
