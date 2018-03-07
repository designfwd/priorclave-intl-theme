<?php
// Transparent block links with background imagery
?>
<section class="o-linkBlocks" style="background-image: url('<?php get_picsum(2400,900,'grayscale'); ?>')">
  <h2 class="o-linkBlocks__headline">How Can We Help You?</h2>
  <div class=o-linkBlocks__links>
    <?php // Imitating the repeater likely to come from ACF
      $buttonText = array(
        'Find a Distributor',
        'Request a Quote',
        'Request Support'
      );
      foreach( $buttonText as $text ):
    ?>
      <a class="m-blockLink" href="#">
        <img class="m-blockLink__icon lazyload" src="<?php placeholder_img( 90, 90, 'text=icon'); ?>" />
        <h3 class="m-blockLink__text"><?php echo $text; ?></h3>
      </a>
    <?php
      endforeach;
    ?>
  </div>
</section>
