<?php
// A larger video preview for prominent featuring
/**
 * Featured video block
 *
 * A full-width block featuring a single video that will play in a modal dialog
 *
 * @var string $title       Title text for the video
 * @var string $url         The URL of the video to feature
 * @var array $image      The preview image of the video to feature
 */

// Sets variables
if( function_exists('get_field') ):
  $ID = get_the_ID();
  $title = get_field('media_featuredVideo_title', $ID);
  $url = get_field('media_featuredVideo_url', $ID);
  $image = get_field('media_featuredVideo_thumbnail', $ID);
endif;

if( !$url ):
  $url = 'https://www.youtube.com/watch?v=QILiHiTD3uc';
endif;

// Grabs the video ID from the URL
parse_str($url, $video);
$videoID = $video['https://www_youtube_com/watch?v'];

if( !$image ):
  $image = array(
    'sizes' => array(
      'preload' => '//picsum.photos/64/64?blur',
      '128w' => '//picsum.photos/128/47',
      '240w' => '//picsum.photos/240/88',
      '320w' => '//picsum.photos/320/118',
      '360w' => '//picsum.photos/360/132',
      '375w' => '//picsum.photos/480/138',
      '480w' => '//picsum.photos/480/177',
      '540w' => '//picsum.photos/540/199',
      '640w' => '//picsum.photos/640/236',
      '720w' => '//picsum.photos/720/265',
      '768w' => '//picsum.photos/768/283',
      '800w' => '//picsum.photos/800/295',
      '960w' => '//picsum.photos/960/354',
      '1024w' => '//picsum.photos/1024/378',
      '1280w' => '//picsum.photos/1280/472',
      '1366w' => '//picsum.photos/1366/504',
      '1440w' => '//picsum.photos/1440/531',
      '1600w' => '//picsum.photos/1600/590',
      '1920w' => '//picsum.photos/1920/708',
      '2560w' => '//picsum.photos/2560/945'
    ),
  );
endif;
?>
<section class="o-featuredVideo">
  <div id="featured-video-preview" class="o-featuredVideo__preview">
    <img class="o-featuredVideo__image lazyload lazyload--blurUp"
      alt="<?php echo $title; ?>"
      src="<?php echo $image['sizes']['preload']; ?>"
      data-srcset="<?php echo $image['sizes']['preload']; ?> 64w,
        <?php echo $image['sizes']['128w']; ?> 65w,
        <?php echo $image['sizes']['240w']; ?> 129w,
        <?php echo $image['sizes']['320w']; ?> 241w,
        <?php echo $image['sizes']['360w']; ?> 321w,
        <?php echo $image['sizes']['375w']; ?> 361w,
        <?php echo $image['sizes']['480w']; ?> 376w,
        <?php echo $image['sizes']['540w']; ?> 481w,
        <?php echo $image['sizes']['640w']; ?> 541w,
        <?php echo $image['sizes']['720w']; ?> 641w,
        <?php echo $image['sizes']['768w']; ?> 721w,
        <?php echo $image['sizes']['800w']; ?> 769w,
        <?php echo $image['sizes']['960w']; ?> 801w,
        <?php echo $image['sizes']['1024w']; ?> 961w,
        <?php echo $image['sizes']['1280w']; ?> 1025w,
        <?php echo $image['sizes']['1366w']; ?> 1281w,
        <?php echo $image['sizes']['1440w']; ?> 1367w,
        <?php echo $image['sizes']['1600w']; ?> 1441w,
        <?php echo $image['sizes']['1920w']; ?> 1601w,
        <?php echo $image['sizes']['2560w']; ?> 1921w
      "
    />
    <div class="o-featuredVideo__button">
      <svg class="o-featuredVideo__triangle" viewBox="0 0 16 16">
        <polygon points="0,0 12,8 0,16" />
      </svg>
    </div>
  </div>

  <?php
  // Dialog box, opened on click of preview
  ?>
  <dialog id="featured-video-dialog" class="o-featuredVideo__dialog">
    <div class="o-featuredVideo__embed">
      <iframe src="https://www.youtube.com/embed/<?php echo $videoID; ?>" frameborder="0" allowfullscreen></iframe>
    </div>
    <button id="featured-video-close" class="o-featuredVideo__close">
      Close
    </button>
  </dialog>
</section>