<?php
// Social media sharing links, arranged in icon blocks
?>
<section class="o-sidebarSocial">
  <?php
    // Generate a URL-encoded string of the current page for sharing
    $shareURL = urlencode(get_permalink());
    $facebookLink = 'https://www.facebook.com/sharer/sharer.php?u=' . $shareURL;
    $twitterLink = 'https://twitter.com/intent/tweet?url=' . $shareURL;
    $linkedInLink = 'https://www.linkedin.com/shareArticle?mini=true&url=' . $shareURL;
    $googlePlusLink = 'https://plus.google.com/share?url={' . $shareURL . '}';
  ?>
  <div class="o-sidebarSocial__button o-sidebarSocial__button--facebook" href="<?php echo $facebookLink; ?>" target="_blank">
    <a class="a-socialIcon" href="<?php echo $facebookLink; ?>" target="_blank">
      <svg class="a-socialIcon__svg" viewBox="0 0 16 16">
        <?php get_svg('social-facebook'); ?>
      </svg>
    </a>
  </div>
  <div class="o-sidebarSocial__button o-sidebarSocial__button--twitter" href="<?php echo $twitterLink; ?>" target="_blank">
    <a class="a-socialIcon" href="<?php echo $twitterLink; ?>" target="_blank">
      <svg class="a-socialIcon__svg" viewBox="0 0 16 16">
        <?php get_svg('social-twitter'); ?>
      </svg>
    </a>
  </div>
  <div class="o-sidebarSocial__button o-sidebarSocial__button--linkedIn" href="<?php echo $linkedInLink; ?>" target="_blank">
    <a class="a-socialIcon" href="<?php echo $linkedInLink; ?>" target="_blank">
      <svg class="a-socialIcon__svg" viewBox="0 0 16 16">
        <?php get_svg('social-facebook'); ?>
      </svg>
    </a>
  </div>
  <div class="o-sidebarSocial__button o-sidebarSocial__button--googlePlus" href="<?php echo $googlePlusLink; ?>" target="_blank">
    <a class="a-socialIcon" href="<?php echo $googlePlusLink; ?>" target="_blank">
      <svg class="a-socialIcon__svg" viewBox="0 0 16 16">
        <?php get_svg('social-twitter'); ?>
      </svg>
    </a>
  </div>
</section>
