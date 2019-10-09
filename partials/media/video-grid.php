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
      <div class="o-video__button">
      <svg class="o-video__triangle" viewBox="0 0 16 16">
        <polygon points="0,0 12,8 0,16"></polygon>
      </svg>
    </div>
      <div class="m-videoGrid__description">
        <?php echo $video['description']; ?>
      </div>
    </div>
    <dialog id="dialog-<?php echo $title_slug;?>" class="o-videoGrid__dialog" >
      <div class="o-videoGrid__embed">
        <iframe data-src='<?php echo $video['url']; ?>' frameborder='0' allowfullscreen class="ytVideo" src="" width="100%" height="80%"></iframe>
      </div>
      <button id="featured-video-close" class="o-videoGrid__close">
        Close
      </button>
    </dialog>
  <?php
    endforeach;
  ?>
</section>
