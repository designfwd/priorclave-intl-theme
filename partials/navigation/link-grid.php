<?php
/**
 * Link grid
 *
 * Grid of linked pages with background imagery and rollover interaction
 *
 * @var string $links     ACF field to use for links array
 * @var string $label     The label to give to the link
 * @var object $page      Linked post object
 */

if( function_exists('get_field') ):
  $ID = get_the_ID();
  $links = 'navigation_linkGrid_links';
endif;
?>
<section class="o-linkGrid">
  <?php
    if( have_rows($links, $ID) ):
      while( have_rows($links, $ID) ): the_row();
        $label = get_sub_field('label');
        $page = get_sub_field('page');
        setup_postdata( $page );
        ?>
        <?php
          if( has_post_thumbnail() ):
          ?>
            <a class="o-linkGrid__item lazyload" href="<?php the_permalink(); ?>" style="background-image:url('<?php the_post_thumbnail('preload'); ?>')" data-bg="<?php the_post_thumbnail('960w'); ?>">
          <?php
          else:
          ?>
            <a class="o-linkGrid__item lazyload" href="<?php the_permalink(); ?>" style="background-image:url('//picsum.photos/g/64/64?blur')" data-bg="//picsum.photos/g/960/664">
          <?php
          endif;
        ?>
          <div class="m-linkGridItem">
            <h3 class="m-linkGridItem__title"><?php echo $label; ?></h3>
            <div class="m-linkGridItem__overlay"></div>
          </div>
        </a>
        <?php
        wp_reset_postdata();
      endwhile;
    endif;
  ?>
</section>
