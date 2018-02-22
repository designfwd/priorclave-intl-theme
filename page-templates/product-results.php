<?php
/*
 * Template Name: Product - Results
 * Description: Results page for products searched with the "finder" template
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

  <?php get_template_part('partials/meta/head'); ?>

  <body <?php body_class('product product--results'); ?>>

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
