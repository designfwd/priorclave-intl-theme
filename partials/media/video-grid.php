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
?>
<section class="o-videoGrid">
  <?php
    foreach($videos as $video):
      $title_slug = strtolower(str_replace(" ", "-", $video['title']));
      $image = $video['preview'];
  ?>
    <div class="o-videoGrid__video" data-dialog="<?php echo $title_slug; ?>">
      <img class="m-videoGrid__previewImg"
        src="<?php echo $image['sizes']['preload']; ?>"
        srcset="<?php echo $image['sizes']['preload']; ?> 64w,
                <?php echo $image['sizes']['128w']; ?> 65w,
                <?php echo $image['sizes']['240w']; ?> 129w,
                <?php echo $image['sizes']['320w']; ?> 241w,
              "
      />
      <div class="m-videoGrid__description">
        <?php echo $video['description']; ?>
      </div>
      <dialog id="dialog-<?php echo $title_slug;?>">
        <iframe src='<?php echo $video['url']; ?>' frameborder='0' allowfullscreen></iframe>
      </dialog>
    </div>
  <?php
    endforeach;
  ?>
</section>
