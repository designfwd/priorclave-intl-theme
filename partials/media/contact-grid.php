<?php
/**
 * Contact grid 2-up
 *
 * Icon-paired grid of contact information with phone, fax, and operation hours
 *
 * @var string $phone         The phone number to use for contacting
 * @var string $fax           The fax number to use for contacting
 * @var string $times         ACF field to query for operation times
 */

if( function_exists('get_field') ):
  $phone = get_field('site_contact_phone', 'option');
  $phone2 = get_field('site_contact_phone2', 'option');
  $fax = get_field('site_contact_fax', 'option');
  $times = 'site_operation_times';
endif;
?>
<section class="o-contactGrid">
  <div class="o-contactGrid__section">
    <div class="m-gridSection">
      <div class="m-gridSection__icon m-gridSection__icon--phone">
        <svg viewBox="0 0 16 16">
          <?php get_svg('icon-phone-solid'); ?>
        </svg>
      </div>
      <div class="m-gridSection__item">
        Phone: <a class="m-gridSection__link" href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
      </div>
      <?php
      // Optional second phone number
      if( $phone2 ):
      ?>
        <div class="m-gridSection__item">
          Phone: <a class="m-gridSection__link" href="tel:<?php echo $phone2; ?>"><?php echo $phone2; ?></a>
        </div>
      <?php
      endif;
      ?>
      <div class="m-gridSection__item">
        Fax: <a class="m-gridSection__link" href="fax:<?php echo $fax; ?>"><?php echo $fax; ?></a>
      </div>
    </div>
  </div>
  <div class="o-contactGrid__section">
    <div class="m-gridSection__icon m-gridSection__icon--clock">
      <svg viewBox="0 0 16 16">
        <?php get_svg('icon-clock'); ?>
      </svg>
    </div>
    <div class="m-gridSection__item">
      Current Time: <?php echo current_time('H:i',true); ?> GMT
    </div>
    <?php
      if( function_exists('have_rows') ):
        while( have_rows($times, 'option') ): the_row();
          $time = get_sub_field('time');
      ?>
        <div class="m-gridSection__item">
          <?php echo $time; ?>
        </div>
      <?php
        endwhile;
      endif;
    ?>
  </div>
</section>
