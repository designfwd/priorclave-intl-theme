<?php
// A table of downloadable materials related to a particular product
?>
<section id="productDownloads" class="o-productDownloads">
  <h2 class="o-productDownloads__headline">Downloads</h2>
  <div class="o-productDownloads__grid">
    <?php
      $downloads = array(
        '40L Compact Data Sheet',
        '40L Compact Data Sheet B',
        '40L Compact User Manual',
        '40L Compact User Manual B',
        '60L Compact Data Sheet',
        '60L Compact Data Sheet B',
        '60L Compact User Manual',
        '60L Compact User Manual B',
      );

      foreach( $downloads as $download ):
    ?>
      <a class="m-productDownload" href="#" target="_blank" download>
        <div class="m-productDownload__icon">
          <svg class=m-productDownload__icon--svg viewBox="0 0 16 16">
            <?php get_svg('icon-file-alt'); ?>
          </svg>
        </div>
        <div class="m-productDownload__title">
          <?php echo $download; ?>
        </div>
      </a>
    <?php
      endforeach;
    ?>
  </div>
</section>
