<?php
/**
 * Post content block
 *
 * Post content block, containing only a single content area
 */

global $post;
?>
<section class="o-generalBlock">
  <div class="o-generalBlock__content">
    <?php echo apply_filters( 'the_content', get_post_field( 'post_content', $post->ID) ); ?>
  </div>
</section>
