<?php
// Address, phone, email, and social contact information
?>
<section class="o-footerContacts">

  <div class="o-footerContacts__block m-contactBlock">
    <h4 class="m-contactBlock__headline">
      Priorclave Ltd.
    </h4>
    <div class="m-contactBlock__body">
      1234 Main St.<br />
      West Somewhere Business Park<br />
      London<br />
      28SE AB0<br />
      UK
    </div>
  </div>

  <div class="o-footerContacts__block m-contactBlock">
    <h4 class="m-contactBlock__headline">
      Contact Us
    </h4>
    <div class="m-contactBlock__body">
      Phone: <a class="a-footerlink" href="tel:+12 34 5678 9012">+12 34 5678 9012</a><br />
      Fax: +12 34 5678 9012<br />
      <a class="a-footerLink a-footerLink--feature" href="mailto:name@example.com">Email Us</a>
    </div>
  </div>

  <div class="o-footerContacts__block m-contactBlock">
    <h4 class="m-contactBlock__headline">
      Connect
    </h4>
    <?php // Shows social network links
      $networks = array(
        'facebook',
        'linkedin',
        'twitter'
      );
      foreach ($networks as $network):
    ?>
      <a class="m-contactBlock__socialLink" href="#" target="_blank">
        <svg viewBox="0 0 16 16">
          <?php get_svg( 'social-' . $network );?>
        </svg>
      </a>
    <?php
      endforeach;
    ?>
  </div>

</section>
