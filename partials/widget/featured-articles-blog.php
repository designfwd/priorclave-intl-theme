<?php
/**
 * Featured articles widget
 *
 * Sidebar widget to display specific pages
 *
 * @var string $pages     The ACF field to reference
 */

if( function_exists('get_field') ):
  $pages = 'widget_featured_articles';
endif;
?>
<section class="o-widget">
  <h2 class="o-widget__headline">Featured</h2>
  <?php
  $test = get_field($pages, 'option');
  if( have_rows($pages, 'option') ):
    while( have_rows($pages, 'option') ): the_row();
      $page = get_sub_field('widget_featured_article');
      ?>
      <div class="o-widget__featuredPost">
        <div class="m-featuredPost__content">
          <a class="m-featuredPost__content--title" href="<?php echo get_permalink($page->ID); ?>">
            <?php echo $page->post_title; ?>
          
          <br />
          <br />
            <div class="m-featuredPost__content--link">Read More</div>
            </a>
        </div>
      </div>
    <?php
    endwhile;
  endif;
  ?>
</section>
