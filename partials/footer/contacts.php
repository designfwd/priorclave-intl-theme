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
  $company = get_field('footer_company', 'option');
  $address = get_field('footer_address', 'option');
  $phone = get_field('footer_phone', 'option');
  $fax = get_field('footer_fax', 'option');
  $email = get_field('footer_email', 'option');
  $networks = 'footer_networks';
endif;

if( !isset($company) || ($company == '') ):
  $company = 'Priorclave Ltd.';
endif;

if( !isset($address) || ($address == '') ):
  $address = '1234 Main St.<br />
    West Somewhere Business Park<br />
    London<br />
    28SE AB0<br />
    UK';
endif;

if( !isset($phone) || ($phone == '') ):
  $phone = '+12 34 5678 9012';
endif;

if( !isset($fax) || ($fax == '') ):
  $fax = '+12 34 5678 9012';
endif;

if( !isset($email) || ($email == '') ):
  $email = 'name@example.com';
endif;

if(
  !function_exists('get_field') ||
  (function_exists('get_field') && !have_rows($networks))
):
  $networksFallback = true;
  $networks = array(
    array(
      'network' => 'facebook',
      'url' => '#'
    ),
    array(
      'network' => 'linkedin',
      'url' => '#'
    ),
    array(
      'network' => 'twitter',
      'url' => '#'
    ),
  );
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
      if( $networksFallback != true ):
        while( have_rows($networks, 'option') ):
          $network = $networks['network'];
          $url = $networks['url'];
      ?>
        <a class="m-contactBlock__socialLink" href="<?php echo $url; ?>" target="_blank">
          <svg viewBox="0 0 16 16">
            <?php get_svg( 'social-' . $network );?>
          </svg>
        </a>
      <?php
        endwhile;
      else:
        foreach( $networks as $networks ):
          $network = $networks['network'];
          $url = $networks['url'];
      ?>
        <a class="m-contactBlock__socialLink" href="<?php echo $url; ?>" target="_blank">
          <svg viewBox="0 0 16 16">
            <?php get_svg( 'social-' . $network );?>
          </svg>
        </a>
      <?php
        endforeach;
      endif;
    ?>
  </div>

</section>
