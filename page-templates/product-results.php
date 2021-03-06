<?php
/**
 * Template Name: Product - Results
 * Description: Results page for products searched with the "finder" template
 */
?>
<!doctype html>
<html <?php priorclave_lang(); ?>>
  <?php get_partial('meta/head'); ?>
  <body <?php body_class('product product--results'); ?>>
    <?php
    wp_body_open();
    get_partial('meta/gtm-noscript');
    ?>
    <header>
      <?php
        get_partial('navigation/primary'); // Primary navigation
        get_partial('hero/general'); // General hero area
      ?>
    </header>
    <main>
      <?php
        get_partial('content/intro-inverted'); // Intro content
        get_partial('media/product-results'); // Product results
        get_partial('form/quote-request'); // Quote request form
        get_partial('media/product-related'); // Custom quote block (uses related product layout)
        get_partial('media/slider-testimonial'); // Testimonial slider
        get_partial('media/cta-2up'); // CTA grid
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
