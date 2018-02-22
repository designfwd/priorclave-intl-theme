<?php
/*
 * Template Name: Product - Finder
 * Description: A "finder" tool for the different products
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

  <?php get_template_part('partials/meta/head'); ?>

  <body <?php body_class('product product--finder'); ?>>

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
