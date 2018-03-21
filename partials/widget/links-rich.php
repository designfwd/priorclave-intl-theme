<?php
// Sidebar widget to display image-enhanced links with descriptions
?>
<section class="o-widget">
  <?php
    // Placeholder content to mimic what feeds from ACF
    $links = array(
      'Locate a Distributor',
      'Request a Quote',
      'Request Support',
    );
    foreach( $links as $link ):
  ?>
    <a class="o-widget__link" href="#">
      <div class="m-richLink">
        <img class="m-richLink__image lazyload" src="<?php placeholder_img(145,145,'text=icon'); ?>" />
        <div class="m-richLink__content">
          <?php echo $link; ?><br />
          <span class="m-richLink__content--description">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          </span>
        </div>
      </div>
    </a>
  <?php
    endforeach;
  ?>
</section>
