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
//var_dump(get_sites());
$author = get_the_author_meta('ID');
switch_to_blog( 1 );
$image = (get_field( 'profile_image', "user_{$author}" ) ? get_field( 'profile_image', "user_{$author}" ) : $image = get_field('profile_image', "user_2"));
restore_current_blog();
$name = get_the_author_meta( 'display_name', $author );
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
    alt="<?php echo $name; ?>"
    src="<?php echo $image['sizes']['preload']; ?>"
    data-sizes="auto"
    data-srcset="<?php echo $image['sizes']['preload']; ?> 16w,
     <?php echo $image['sizes']['128w']; ?> 65w,
    "
  />
  <h3 class="m-articlePreview__headline"><?php echo get_the_title($post->ID); ?></h3>
  <div class="m-articlePreview__article">
    <?php echo get_the_excerpt($post->ID); ?>
  </div>
  <a class="m-articlePreview__link" href="<?php echo get_permalink($post->ID); ?>">Read More</a>
</div>
