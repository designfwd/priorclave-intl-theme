<?php
/*
 * Template Name: Content - Category
 * Description: Parent template for general content pages
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

  <?php get_template_part('partials/meta/head'); ?>

  <body <?php body_class('content content--category'); ?>>

    <header>
    </header>

    <main>
      <?php
        if ( have_posts() ):
          while ( have_posts() ): the_post();
            the_title();
            the_content();
          endwhile;
        endif;
      ?>
    </main>

    <footer>
    </footer>

    <?php get_template_part('partials/meta/foot'); ?>

  </body>

</html>
