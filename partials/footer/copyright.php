<?php
// Copyright information and relevant links
?>
<section class="o-footerCopyright">
  <p class="o-footerCopyright__content">
    &copy; Copyright <?php echo date('Y'); ?> Priorclave Ltd. All rights reserved.
  </p>
  <p class="o-footerCopyright__content">
    <?php // Using an array here to imitate returns from ACF
      $links = array(
        'Sitemap',
        'Terms'
      );
      foreach ($links as $link):
    ?>
      <a class="a-footerLink a-footerLink--copyright" href="#"><?php echo $link; ?></a>
    <?php
      endforeach;
    ?>
  </p>
</section>
