<?php
/**
 * Quote request block
 *
 * A content block with form for submitting quote requests
 *
 * @var string $headline        Header text for this section
 * @var string $description     Descriptive text for the quote request form
 * @var string $form            The form ID to use with Gravity Forms
 * @var string $phone           The site's contact phone number
 */
if( function_exists('get_field') ):
  $ID = get_the_ID();
  $headline = get_field('form_quoteRequest_headline', $ID);
  $description = get_field('form_quoteRequest_description', $ID);
  $form = get_field('form_quoteRequest_form', $ID);
  $phone = get_field('site_contact_phone', 'option');
endif;
?>
<section class="o-quoteRequest" id="o-quoteRequestForm">
  <h2 class="o-quoteRequest__headline">
    <?php echo $headline; ?>
  </h2>
  <div class="o-quoteRequest__description">
    <?php echo $description; ?>
  </div>
  <div class="o-quoteRequest__form">
    <?php
      if( isset($form) && function_exists('gravity_form') ):
        gravity_form( $form, false, false, false, null, true, 1, true);
      endif;
    ?>
  </div>
  <div class="o-quoteRequest__disclosure">
    This site is protected by reCAPTCHA and the Google <a href="https://policies.google.com/privacy">Privacy Policy</a> and <a href="https://policies.google.com/terms">Terms of Service</a> apply.
  </div>
  </div>
  <div class="o-quoteRequest__subtitle">
    Or Contact an Expert by Phone at:
  </div>
  <a style="padding-bottom: 0" class="o-quoteRequest__phone" href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a><br>
  <div class="o-quoteRequest__subtitle" style="padding-top: 0">
  (for Canada, Mexico, and the USA)
  </div>
<a class="o-quoteRequest__phone" href="tel:800-748-1459">800-748-1459</a> 

</section>
