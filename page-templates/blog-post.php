<?php
/**
 * Template Name: Blog - Post
 * Description: Single blog post layout
 */
?>
<!doctype html>
<html <?php priorclave_lang(); ?>>
  <?php get_partial('meta/head'); ?>
  <body <?php body_class('content content--blogPost'); ?>>
    <?php
    wp_body_open();
    get_partial('meta/gtm-noscript');
    ?>
    <header>
      <?php
        get_partial('navigation/primary'); // Primary navigation
        get_partial('hero/news'); // General hero area
      ?>
    </header>
    <section class="content__articleWrapper">
    <main class="content__article">
      <?php
        get_partial('content/article-masthead'); // Article masthead
        get_partial('content/post-block'); // Page body content
      ?>
    </main>
    <aside class="content__sidebar">
      <?php // Sidebar widgets
        get_partial('widget/social-sharing'); // Social media sharing links
        get_partial('widget/featured-post'); // Featured post

        get_partial('widget/newsletter-signup'); // Newsletter signup form
        get_partial('widget/author'); // Author information widget
        get_partial('widget/links-rich'); // Rich links block

        get_partial('widget/featured-articles-blog'); // Featured articles block
        get_partial('widget/links-tags'); // Tags list
      ?>
    </section></aside>
    <footer class="universal-footer">
      <?php
        get_partial('media/product-related'); // Related product block

        // Universal footer blocks
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
