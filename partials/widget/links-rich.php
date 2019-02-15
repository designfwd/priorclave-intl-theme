<?php
/**
 * Featured pages widget
 *
 * Sidebar widget to display image-enhanced links with descriptions
 *
 * @var string $pages         The ACF field to query for linked pages
 * @var string $page          The linked page ID
 * @var string $label         The label for the link
 * @var string $description   Short description of the linked page
 */

if( function_exists('get_field') ):
  $pages = 'widget_featured_pages';
endif;
?>
<section class="o-widget">
  <?php
    if( have_rows($pages, 'option') ):
      while( have_rows($pages, 'option') ): the_row();
        $label = get_sub_field('label');
        $description = get_sub_field('description');
        $image = get_sub_field('image');
        $page = get_sub_field('page');
        if( $page ):
          $post = $page;
          setup_postdata($post);
        endif;
        if( !$image ):
          $image = array(
            'sizes' => array(
              'preload' => '//via.placeholder.com/64x66?text=image',
              '128w' => '//via.placeholder.com/128x132?text=image',
              '240w' => '//via.placeholder.com/240x247?text=image',
              '320w' => '//via.placeholder.com/320x329?text=image',
            ),
          );
        endif;
      ?>
        <a class="o-widget__link" href="<?php echo get_permalink($page); ?>">
          <div class="m-richLink">
            <img class="m-richLink__image lazyload"
              src="<?php echo $image['sizes']['preload']; ?>"
              data-sizes="auto"
              data-srcset="<?php echo $image['sizes']['preload']; ?> 64w,
                <?php echo $image['sizes']['128w']; ?> 65w,
                <?php echo $image['sizes']['240w']; ?> 129w,
                <?php echo $image['sizes']['320w']; ?> 241w,
              "
            />
            <div class="m-richLink__content">
              <?php echo $label; ?><br />
              <span class="m-richLink__content--description">
                <?php echo $description; ?>
              </span>
            </div>
          </div>
        </a>
      <?php
        if( $page ):
          wp_reset_postdata();
        endif;
      endwhile;
    endif;
  ?>
</section>
