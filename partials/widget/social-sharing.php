<?php
// Social media sharing links, arranged in icon blocks
?>
<section class="o-sidebarSocial">
  <?php // Social Media Feather sharing icons
    if(
      function_exists(‘synved_social_share_markup’)
      ):
      echo synved_social_share_markup();
    endif;
  ?>
</section>
