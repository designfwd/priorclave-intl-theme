<?php
// Sidebar widget to display a list of tag links
?>
<section class="o-widget">
  <h2 class="o-widget__headline">News Topics</h2>
  <?php
    // List of links as placeholder
    $links = array(
      'Announcements (10)',
      'Tips & Tricks (5)',
      'Technical Support (22)',
      'Maintenance (8)',
      'Custom Options (1)',
      'Laboratory Autoclaves (4)',
      'Healthcare Autoclaves (30)',
      'Industrial Autoclaves (6)'
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
