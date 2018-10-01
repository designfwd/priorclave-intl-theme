<?php
/**
 * Featured articles widget
 *
 * Sidebar widget to display specific pages
 *
 * @var string $pages     The ACF field to reference
 */

if( function_exists('get_field') ):
  $pages = 'widget_featured_pages';
endif;
?>
<section class="o-widget">
  <h2 class="o-widget__headline">Featured</h2>
  <?php
  if( have_rows($pages, 'option') ):
    while( have_rows($pages, 'option') ): the_row();
      $page = get_sub_field('page');
      $image = get_field('page_preview_icon', $page->ID);
      $label = get_sub_field('label');
      $description = get_sub_field('description');

      if( !$image ):
        $image = array(
          'sizes' => array(
            'preload' => '//via.placeholder.com/64x64?text=icon',
            '128w' => '//via.placeholder.com/128x128?text=icon',
            '240w' => '//via.placeholder.com/240x240?text=icon'
          ),
        );
      endif;
      ?>
      <div class="o-widget__featuredPost">
        <div class="m-featuredPost">
          <img class="m-featuredPost__thumbnail lazyload"
            src="<?php echo $image['sizes']['preload']; ?>"
            data-sizes="auto"
            data-srcset="<?php echo $image['sizes']['preload']; ?> 64w,
              <?php echo $image['sizes']['128w']; ?> 65w,
              <?php echo $image['sizes']['240w']; ?> 129w
            "
          />
        </div>
        <div class="m-featuredPost__content">
          <a class="m-featuredPost__content--title" href="<?php echo get_permalink($page->ID); ?>">
            <?php echo $label; ?>
          </a>
          <br />
          <?php
          if( $description != '' ):
          ?>
            <p class="m-featuredPost__content--description">
              <?php echo $description; ?>
            </p>
            <a class="m-featuredPost__content--link" href="<?php echo get_permalink($page->ID); ?>">Read More</a>
          <?php
          endif;
          ?>
        </div>
      </div>
    <?php
    endwhile;
  endif;
  ?>
</section>
