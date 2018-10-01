<?php
// A list of links displayed as a comma-separated, continual expression
?>
<section class="o-categoriesList">
  <div class="o-categoriesList__headline">
    Categories:
  </div>
  <div class="o-categoriesList__categories">
    <?php
    // List of categories as placeholders
    $categories = get_categories();
    // var_dump($categories);
    for( $i=0; $i<count($categories); $i++ ):
      $name = $categories[$i]->cat_name;
      $url = get_home_url() . '/category/' . $categories[$i]->slug;
      if($i<(count($categories)-1)):
      ?>
        <a class="o-categoriesList__categories--link" href="<?php echo $url; ?>"><?php echo $name; ?></a>,
      <?php
      else:
      ?>
        <a class="o-categoriesList__categories--link" href="<?php echo $url; ?>"><?php echo $name; ?></a>
      <?php
      endif;
    endfor;
    ?>
  </div>
</section>
