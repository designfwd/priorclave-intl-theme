<?php
// Group of credibility indicator badges for use in the page footer
?>
<section class="o-footerBadges">
  <?php
    for( $i=0; $i<5; $i++):
  ?>
    <img class="o-footerBadges__badge"
      alt="badge"
      src="<?php placeholder_img( 306, 201, 'text=Badge' ); ?>"
    />
  <?php
    endfor;
  ?>
</section>
