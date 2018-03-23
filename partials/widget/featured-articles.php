<?php
// Sidebar widget to display specific articles
?>
<section class="o-widget">
  <h2 class="o-widget__headline">Featured</h2>
  <?php
    for( $i=0; $i<3; $i++ ):
  ?>
  <div class="o-widget__featuredPost">
    <a class="o-widget__featuredPost--title" href="#">
      Lorem Ipsum Dolor Sit Amet, Consect Etur Adipiscing Elit, Dolor Sit Amet.
    </a><br />
    <a class="o-widget__featuredPost--link" href="#">Read More</a>
  </div>
  <?php
    endfor;
  ?>
</section>
