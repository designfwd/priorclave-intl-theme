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
  $links = get_field('navigation_linkGridGroup_lists', $ID);
endif;
?>
<section class="o-linkGrid o-linkGrid--group">
  <?php
  foreach( $links as $link ):
    $headline = $link['headline'];
    $list = $link['links'];
  ?>
    <h2 class="o-linkGrid__headline">
      <?php echo $headline; ?>
    </h2>
    <div class="o-linkGrid__group">
      <?php
      foreach( $list as $item ):
        $label = $item['label'];
        $page = $item['page'];

        if( has_post_thumbnail( $page->ID ) ):
        ?>
          <a class="o-linkGrid__item lazyload" href="<?php the_permalink( $page->ID ); ?>" style="background-image:url('<?php echo get_the_post_thumbnail_url( $page->ID, 'preload' ); ?>')" data-bg="<?php echo get_the_post_thumbnail_url( $page->ID, '960w' ); ?>">
        <?php
        else:
        ?>
          <a class="o-linkGrid__item lazyload" href="<?php the_permalink( $page->ID ); ?>" style="background-image:url('//picsum.photos/g/64/64?blur')" data-bg="//picsum.photos/g/960/664">
          <?php
        endif;
        ?>
          <div class="m-linkGridItem">
            <h3 class="m-linkGridItem__title"><?php echo $label; ?></h3>
              <div class="m-linkGridItem__overlay"></div>
          </div>
        </a>
      <?php
      endforeach;
      ?>
    </div>
  <?php
  endforeach;
  ?>
</section>
