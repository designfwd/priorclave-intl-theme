<?php
// A table of downloadable materials related to a particular product
/** Table of downloadable materials
 *
 * A table of downloads related to a particular product presented as a grid of
 * links
 *
 * @var array $models           The list of autoclave models associated with
 *                              this autoclave type
 * @param string $downloads     The field to reference for downloads
 */

if( function_exists('get_field') ):
  $ID = get_the_ID();
  $models = get_field('content_productFeatures_models', $ID);
  $downloads = 'navigation_productDownloads_downloads';
endif;
?>
<section id="productDownloads" class="o-productDownloads">
  <h2 class="o-productDownloads__headline">Downloads</h2>
  <?php
  // First, grab any downloads from the models included to the product page
  if( get_field('content_productFeatures_models', $ID) ):
    $autoclaves = get_field('content_productFeatures_models', $ID);

    foreach( $autoclaves as $model ):
      $name = get_field('autoclave_name', $model->ID);
      if( have_rows('autoclave_downloads', $model->ID) ):
      ?>
      <div class="o-productDownloads__grid o-productDownloads__grid--model">
        <h3 class="o-productDownloads__subhead">
          <?php echo $name . ' Downloads'; ?>
        </h3>
        <?php
        while( have_rows('autoclave_downloads', $model->ID) ): the_row();
          $file = get_sub_field('file')['url'];
          $title = get_sub_field('title');
        ?>
          <a class="m-productDownload" href="<?php echo $file; ?>" target="_blank" download>
          <div class="m-productDownload__icon">
            <svg class="m-productDownload__icon--svg" viewBox="0 0 16 16">
              <?php get_svg('icon-file-alt'); ?>
            </svg>
          </div>
          <div class="m-productDownload__title">
            <?php echo $title; ?>
          </div>
        </a>
        <?php
        endwhile;
        ?>
      </div>
      <?php
      endif;
    endforeach;
  endif;
  if( have_rows($downloads) ):
  ?>
    <div class="o-productDownloads__grid o-productDownloads__grid--other">
      <?php // TODO: commented out for now - may add back later if scale requires ?>
      <!-- <h3 class="o-productDownloads__subhead">
        Other Downloads
      </h3> -->
      <?php
      while( have_rows($downloads) ): the_row();
        $label = get_sub_field('label');
        $file = get_sub_field('file')['url'];
      ?>
        <a class="m-productDownload" href="<?php echo $file; ?>" target="_blank" rel="noopener noreferrer">
          <div class="m-productDownload__icon">
            <svg class="m-productDownload__icon--svg" viewBox="0 0 16 16">
              <?php get_svg('icon-file-alt'); ?>
            </svg>
          </div>
          <div class="m-productDownload__title">
            <?php echo $label; ?>
          </div>
        </a>
      <?php
      endwhile;
    ?>
    </div>
    <?php
  endif;
  ?>
</section>
