<?php
/**
 * Post content block
 *
 * Post content block, containing only a single content area
 */

global $post;
if( has_post_thumbnail() ):
  $feature = $post->ID;
endif;
?>
<section class="o-generalBlock">
  <?php
  if( $feature ):
  ?>
    <img class="o-generalBlock__feature lazyload lazyload--blurUp"
      src="<?php echo get_the_post_thumbnail_url( $feaure, 'preload' ); ?>"
      data-sizes="auto" alt="<?php echo get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>"
      data-srcset="<?php echo get_the_post_thumbnail_url( $feature, 'preload' ); ?> 64w,
        <?php echo get_the_post_thumbnail_url( $feature, '128w' ); ?> 65w,
        <?php echo get_the_post_thumbnail_url( $feature, '240w' ); ?> 129w,
        <?php echo get_the_post_thumbnail_url( $feature, '320w' ); ?> 241w,
        <?php echo get_the_post_thumbnail_url( $feature, '360w' ); ?> 321w,
        <?php echo get_the_post_thumbnail_url( $feature, '375w' ); ?> 361w,
        <?php echo get_the_post_thumbnail_url( $feature, '480w' ); ?> 376w,
        <?php echo get_the_post_thumbnail_url( $feature, '540w' ); ?> 481w,
        <?php echo get_the_post_thumbnail_url( $feature, '640w' ); ?> 541w,
        <?php echo get_the_post_thumbnail_url( $feature, '720w' ); ?> 641w,
        <?php echo get_the_post_thumbnail_url( $feature, '800w' ); ?> 721w,
        <?php echo get_the_post_thumbnail_url( $feature, '960w' ); ?> 801w,
        <?php echo get_the_post_thumbnail_url( $feature, '1024w' ); ?> 961w,
        <?php echo get_the_post_thumbnail_url( $feature, '1280w' ); ?> 1025w,
      "
    />
  <?php
  endif;
  ?>
  <div class="o-generalBlock__content">
    <?php echo apply_filters( 'the_content', get_post_field( 'post_content', $post->ID) ); ?>
  </div>
</section>
