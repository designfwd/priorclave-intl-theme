<?php
// Pagination links for placement on archive pages
?>
<section class="o-pagination">
  <div class="o-pagination__adjacent o-pagination__adjacent--previous" data-href="#">
    Previous
  </div>
  <div class="o-pagination__pages">
    <?php
      $count = 10;
      for( $i=0; $i<$count; $i++ ):
    ?>
      <a class="o-pagination__pages--link" href="#"><?php echo $i+1; ?></a>
      <?php
        if( $i<($count-1) ):
      ?>
        <span class="o-pagination__pages--divider"> - </span>
      <?php
        endif;
      ?>
    <?php
      endfor;
    ?>
  </div>
  <div class="o-pagination__adjacent o-pagination__adjacent--next" data-href="#">
    Next
  </div>
</section>
