<?php
/*
 * Template Name: Homepage - Multiregion
 * Description: Homepage for group of coutries or regions
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

  <?php get_template_part('partials/meta/head'); ?>

  <body <?php body_class('homepage homepage--multiregion'); ?>>

    <header>
      <?php
        // Simplified header navigation
        get_template_part('partials/navigation/simplified');

        // Homepage hero-area map
        get_template_part('partials/hero/map', 'homepage');

        // Regional navigation
        get_template_part('partials/navigation/regional');
      ?>
    </header>

    <main>
      <?php
        // Introductory content
        get_template_part('partials/content/intro', 'decorated');

        // Block links
        get_template_part('partials/navigation/link', 'blocks');

        // Brand slideshow
        get_template_part('partials/media/slider', 'brands');

        // Product spotlight
        get_template_part('partials/media/product', 'spotlight');
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
