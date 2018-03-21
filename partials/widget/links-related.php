<?php
// Sidebar widget to display a list of page links
?>
<section class="o-widget">
  <h2 class="o-widget__headline">Related Pages</h2>
  <?php
    // List of links as placeholder
    $links = array(
      'Excellent Customer Service',
      'Unique Features',
      'Quality, Reliability, & Safety',
      'Energy & Water Efficiency',
      'Accreditation & Certification',
      'Customers & Case Studies',
      'News',
      'About Priorclave'
    );
    foreach( $links as $link ):
  ?>
    <a class="o-widget__link o-widget__link--related" href="#">
      <?php echo $link; ?>
    </a>
  <?php
    endforeach;
  ?>
</section>
