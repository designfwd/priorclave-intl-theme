<?php
// Pagination links for placement on archive pages

$paginatedLinks = get_query_var('paginatedLinks');

$previousLink = get_previous_posts_page_link();
$nextLink = get_next_posts_page_link();



$url_array = wp_parse_url(get_bloginfo( 'url' ));
?>
<section class="o-pagination">
  <div class="o-pagination__adjacent o-pagination__adjacent--previous" onClick="window.location=('<?php echo $previousLink; ?>')">
    Previous
  </div>
  <div class="o-pagination__pages">
    <?php
    echo $paginatedLinks;
    ?>
  </div>
  <div class="o-pagination__adjacent o-pagination__adjacent--next" onClick="window.location=('<?php echo $nextLink; ?>')">
    Next
  </div>
</section>
