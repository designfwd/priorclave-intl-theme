<?php
/**
 * Template Name: FAQ
 * Description: A page dedicated to frequently asked questions
 */
?>
<!doctype html>
<html <?php priorclave_lang(); ?>>
  <?php get_partial('meta/head'); ?>
  <body <?php body_class('content content--faq'); ?>>
    <header>
      <?php
        get_partial('navigation/primary'); // Primary navigation
        get_partial('hero/general'); // General her area
      ?>
    </header>
    <main>
      <?php
        get_partial('content/intro-inverted'); // Intro block
        get_partial('navigation/categories-faq'); // FAQ navigation
        get_partial('media/directory-faq'); // Directory of FAQs
        get_partial('media/cta-grid'); // CTA grid
      ?>
    </main>
    <footer class="universal-footer">
      <?php // Universal footer blocks
        get_partial('footer/newsletter'); // Newsletter signup form
        get_partial('footer/masthead'); // Footer masthead
        get_partial('footer/quicklinks'); // Quicklink buttons
        get_partial('footer/contacts'); // Contact blocks
        get_partial('footer/badges'); // Credibility badges
        get_partial('footer/copyright');// Copyright phrasing and links
      ?>
    </footer>
    <?php get_partial('meta/foot'); ?>
  </body>
</html>
