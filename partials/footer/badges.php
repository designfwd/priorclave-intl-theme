<?php
// Group of credibility indicator badges for use in the page footer
?>
<section class="o-footerBadges">
  <?php
    for( $i=0; $i<5; $i++):
  ?>
    <img class="o-footerBadges__badge lazyload lazyload--blurUp"
      alt="badge"
      data-src="holder.js/100px201?text=Badge"
    />
  <?php
    endfor;
  ?>
</section>
