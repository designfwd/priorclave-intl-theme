<?php
// Pagination links for placement on archive pages
$big = 999999999; // need an unlikely integer
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
  'post_type' => 'post',
  'post_status' => 'publish',
  'posts_per_page' => 12,
  'order' => 'DESC',
  'orderby' => 'date',
  'paged' => $paged
);
$posts_query = new WP_Query( $args );
$paginatedLinks = paginate_links( array(
  'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
  'end_size' => 5,
	'format' => '?paged=%#%',
  'current' => max( 1, get_query_var('paged') ),
  'prev_next' => false,
  'total' => $posts_query->max_num_pages,
  'type' => 'array'
) );
$previousLink = get_previous_posts_page_link();
$nextLink = get_next_posts_page_link();
?>
<section class="o-pagination">
  <div class="o-pagination__adjacent o-pagination__adjacent--previous" onClick="window.location=('<?php echo $previousLink; ?>')">
    Previous
  </div>
  <div class="o-pagination__pages">
    <?php
    $count = count($paginatedLinks);
    for( $i=0; $i<$count; $i++ ):
      echo $paginatedLinks[$i];
      if( $i<($count-1) ):
      ?>
        <span class="o-pagination__pages--divider"> - </span>
      <?php
      endif;
    endfor;
    ?>
  </div>
  <div class="o-pagination__adjacent o-pagination__adjacent--next" onClick="window.location=('<?php echo $nextLink; ?>')">
    Next
  </div>
</section>
