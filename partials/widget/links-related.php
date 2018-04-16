<?php
/**
 * Related links widget
 *
 * Sidebar widget to display a list of page links
 *
 * @var string $headline        Header text for this section
 * @var string $links           The ACF field to check for links
 * @var string $page            The linked page
 * @var string $label           The label for the linked page
 */

if( function_exists('get_field') ):
  $ID = get_the_ID();
  $headline = get_field('widget_relatedLinks_headline', $ID);
  $links = 'widget_relatedLinks_links';
endif;

if( have_rows($links, $ID) ):
?>
  <section class="o-widget">
    <h2 class="o-widget__headline"><?php echo $headline; ?></h2>
    <?php
      while( have_rows($links, $ID) ): the_row();
        $page = get_sub_field('page');
        $label = get_sub_field('label');
    ?>
      <a class="o-widget__link o-widget__link--related" href="<?php echo $page; ?>">
        <?php echo $label; ?>
      </a>
    <?php
      endwhile;
    ?>
  </section>
<?php
endif;
?>
