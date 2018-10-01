<?php
// Sidebar widget to display a list of tag links
?>
<section class="o-widget">
  <h2 class="o-widget__headline">News Topics</h2>
  <?php
    // List of category links
    $categories = get_categories();
    foreach( $categories as $category ):
      $name = $category->name;
      $url = get_home_url() . '/category/' . $category->slug;
  ?>
    <a class="o-widget__link o-widget__link--related" href="<?php echo $url; ?>">
      <?php echo $name; ?>
    </a>
  <?php
    endforeach;
  ?>
</section>
