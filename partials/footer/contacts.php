<?php
/**
 * Footer contact blocks
 *
 * Address, phone, email, and social contact information
 *
 * @var string $company    Company label for address block
 * @var string $address    Block of text to include as physical address
 * @var string $phone      Phone number
 * @var string $fax        Fax number
 * @var string $email      Mailto link to use for direct email
 * @var array $networks    Social media networks and links
 */

// Sets variables, with fallbacks if ACF is not installed or if variables are empty
if( function_exists('get_field') ):
  $company = get_field('site_contact_name', 'option');
  $address = get_field('site_contact_address', 'option');
  $phone = get_field('site_contact_phone', 'option');
  $fax = get_field('site_contact_fax', 'option');
  $email = get_field('site_contact_email', 'option');
  $networks = 'footer_networks';
endif;
?>
<section class="o-footerContacts">

  <div class="o-footerContacts__block m-contactBlock">
    <h4 class="m-contactBlock__headline">
      <?php echo $company; ?>
    </h4>
    <div class="m-contactBlock__body">
      <?php echo $address; ?>
    </div>
  </div>

  <div class="o-footerContacts__block m-contactBlock">
    <h4 class="m-contactBlock__headline">
      Contact Us
    </h4>
    <div class="m-contactBlock__body">
      Phone: <a class="a-footerlink" href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a><br />
      Fax: <?php echo $fax; ?><br />
      <a class="a-footerLink a-footerLink--feature" href="mailto:<?php echo $email; ?>">Email Us</a>
    </div>
  </div>

  <div class="o-footerContacts__block m-contactBlock">
    <h4 class="m-contactBlock__headline">
      Connect
    </h4>
    <?php // Shows social network links
      if( have_rows($networks, 'option') ):
        while( have_rows($networks, 'option') ): the_row();
          $network = get_sub_field('network');
          $url = get_sub_field('url');
      ?>
        <a class="m-contactBlock__socialLink" href="<?php echo $url; ?>" target="_blank" title="<?php echo $network['label']; ?>">
          <svg viewBox="0 0 16 16">
            <?php get_svg( 'social-' . $network['value'] );?>
          </svg>
        </a>
      <?php
        endwhile;
      endif;
    ?>
  </div>

</section>
