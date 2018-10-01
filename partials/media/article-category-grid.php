<?php
  // Grid of blog article previews
?>
<section class="o-articleGrid">
  <?php
  // Displays a grid of articles
  $category = get_the_category()[0]->cat_ID;
  $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
  $args = array(
    'cat' => $category,
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 12,
    'order' => 'DESC',
    'orderby' => 'date',
    'paged' => $paged
  );
  $posts_query = new WP_Query( $args );
  while( $posts_query->have_posts() ):
    $posts_query->the_post();
    include( locate_template('partials/content/article-preview.php') );
  endwhile;
  ?>
</section>
