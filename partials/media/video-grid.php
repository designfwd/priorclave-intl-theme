<?php
// Grid of video previews
/**
 * Video grid
 *
 * A grid layout of video previews, which open larger video players on click
 *
 * @var array $videos      Video information array
 */

// Sets variable
$videos = get_field('media_videoGallery_videos');
var_dump($videos);
?>
<section class="o-videoGrid">
  <?php
    for( $i=0; $i<9; $i++ ):
  ?>
    <div class="o-videoGrid__video">
      <iframe src='https://www.youtube.com/embed/QILiHiTD3uc' frameborder='0' allowfullscreen></iframe>
    </div>
  <?php
    endfor;
  ?>
</section>
