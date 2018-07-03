<?php
/**
 * Template Name: Product
 * Description: Page for showing a single product
 */
?>
<!doctype html>
<html <?php priorclave_lang(); ?>>
  <?php get_partial('meta/head'); ?>
  <body <?php body_class('product product--single'); ?>>
    <header>
      <?php
        get_partial('navigation/primary'); // Primary navigation
        get_partial('hero/product'); // Product-specific hero area
      ?>
    </header>
    <main>
      <?php
        get_partial('navigation/product-blocks'); // Product section navigation
        get_partial('content/product-features'); // Product features
        get_partial('media/product-options'); // Product options
        get_partial('content/product-specifications'); // Product specifications
        get_partial('navigation/product-downloads'); // Product downloads and links
        get_partial('media/cta-2up'); // CTA grid
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
