<?php
/**
 * Article preview
 *
 * Preview of a blog post. Requires $post to be set up before import with
 * setup_postdata($post) to function properly
 *
 * @var object $post      The post object used to define content
 * @var string $author    The ID of the author avatar to query
 */

$author = get_the_author_meta('ID');
?>
<div class="m-articlePreview" data-href="<?php echo get_permalink($post->ID); ?>">
  <?php // Post featured image
    if( has_post_thumbnail($post->ID) ):
  ?>
    <img class="m-articlePreview__featuredImage lazyload"
      src="<?php echo get_the_post_thumbnail_url($post->ID, 'preload'); ?>"
      data-sizes="auto"
      data-srcset="<?php echo get_the_post_thumbnail_url($post->ID, 'preload'); ?> 64w,
        <?php echo get_the_post_thumbnail_url($post->ID, '128w'); ?> 65w,
        <?php echo get_the_post_thumbnail_url($post->ID, '240w'); ?> 129w,
        <?php echo get_the_post_thumbnail_url($post->ID, '320w'); ?> 241w,
      "
    />
  <?php
    else:
  ?>
    <img class="m-articlePreview__featuredImage lazyload"
      src="<?php get_picsum(64,38); ?>"
      data-sizes="auto"
      data-srcset="<?php get_picsum(64,38); ?> 64w,
        <?php get_picsum(128,76); ?> 65w,
        <?php get_picsum(240,142); ?> 129w,
        <?php get_picsum(320,189); ?> 241w,
      "
    />
  <?php
    endif;
  ?>
  <img class="m-articlePreview__photo lazyload"
    src="<?php echo get_avatar_url($author, array('size'=>16)); ?>"
    data-sizes="auto"
    data-srcset="<?php echo get_avatar_url($author, array('size'=>16)); ?> 16w,
     <?php echo get_avatar_url($author, array('size'=>72)); ?> 65w,
    "
  />
  <h3 class="m-articlePreview__headline"><?php echo get_the_title($post->ID); ?></h3>
  <div class="m-articlePreview__article">
    <?php echo get_the_excerpt($post->ID); ?>
  </div>
  <a class="m-articlePreview__link" href="<?php echo get_permalink($post->ID); ?>">Read More</a>
</div>
