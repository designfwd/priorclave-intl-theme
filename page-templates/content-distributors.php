<?php
/**
 * Template Name: Distributors
 * Description: A layout to showcase local / national / regional product distributors
 */
?>
<!doctype html>
<html <?php priorclave_lang(); ?>>
  <?php get_partial('meta/head'); ?>
  <body <?php body_class('content content--distributors'); ?>>
    <header>
      <?php
        if( get_current_blog_id() == 1 ):
          get_partial('navigation/simplified'); // Multisite navigation
        else:
          get_partial('navigation/primary'); // Primary navigation
        endif;
        get_partial('hero/map-distributors'); // Distributor map area
      ?>
    </header>
    <main>
      <?php
        get_partial('content/general-block'); // Intro general block
        get_partial('navigation/regions-blocks'); // Distributors navigation
        

        $form = get_field('form_contactDistributor_form');
        set_query_var('form', $form);
        get_partial('media/directory-distributors'); // Directory of distributors
        get_partial('media/cta-2up'); // CTA grid
      ?>
    </main>
    <footer class="universal-footer">
      <?php // Universal footer blocks
        get_partial('footer/newsletter'); // Newsletter signup form
        get_partial('footer/masthead'); // Footer masthead
        get_partial('footer/quicklinks'); // Quicklink buttons
        get_partial('footer/contacts'); // Contact blocks
        get_partial('footer/badges'); // Credibility badges
        get_partial('footer/copyright'); // Copyright phrasing and links
      ?>
    </footer>
    <?php get_partial('meta/foot'); ?>
  </body>
</html>
