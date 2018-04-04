<?php
/**
 * Footer newsletter signup
 *
 * Newsletter signup form in universal footer
 *
 * @var string $headline    Call to action text for the section
 * @var string $form        The Gravity Form ID to import
 */

// Sets variables, with fallbacks if ACF is not installed or if variables are empty
if( function_exists('get_field') ):
  $headline = get_field('footer_newsletter_headline', 'option');
  $form = get_field('footer_newsletter_headline', 'option');
endif;

if( !isset($headline) || $headline == ''):
  $headline = 'Stay connected by joining our mailing list';
endif;
?>
<section class="o-footerNewsletter">
  <h3 class="o-footerNewsletter__headline">
    <?php echo $headline; ?>
  </h3>
  <div class="o-footerNewsletter__form">
    <?php // If $form is defined, place Gravity Form here
      if( isset($form) && function_exists('gravity_form') ):
        gravity_form( $form, false, false, false, null, true, 1, true);
      else:
    ?>
      <form class="m-footerForm">
        <div class="gform_body">
          <ul class="gform_fields">
            <li class="gfield m-footerForm__email">
              <div class="ginput_container">
                <input type="text" class="large" placeholder="Email Address" />
              </div>
            </li>
          </ul>
        </div>
        <div class="gform_footer ">
          <input type="submit" class="gform_button button" value="Submit" />
        </div>
      </form>
    <?php
      endif;
    ?>
  </div>
</section>
