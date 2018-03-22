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
      $categories = array(
        'Product Updates',
        'Company News',
        'Service & Support',
        'Events',
        'Product Updates',
        'Company News',
        'Service & Support',
        'Events'
      );

      for( $i=0; $i<count($categories); $i++ ):
    ?>
      <?php
        if($i<(count($categories)-1)):
      ?>
        <a class="o-categoriesList__categories--link" href="#"><?php echo $categories[$i]; ?></a>, 
      <?php
        else:
      ?>
        <a class="o-categoriesList__categories--link" href="#"><?php echo $categories[$i]; ?></a>
      <?php
        endif;
      ?>
    <?php
      endfor;
    ?>
  </div>
</section>
