<?php
/**
 * Newsletter widget
 *
 * Sidebar widget to display a newsletter signup form
 *
 * @var string $headline      Header text for this widget
 * @var string $form          ID of the Gravity Forms object to import
 */

if( function_exists('get_field') ):
  $headline = get_field('widget_newsletter_headline', 'option');
  $form = get_field('widget_newsletter_form', 'option');
endif;
?>
<section class="o-widget">
  <h2 class="o-widget__headline"><?php echo $headline; ?></h2>
  <div class="o-widget__form">
    <?php // If $form is defined, place Gravity Form here
      if( !isset($form) || ($form == '') ):
    ?>
    <form class="m-widgetForm">
      <div class="gform_body">
        <ul class="gform_fields">
          <li class="gfield m-widgetForm__email">
            <div class="ginput_container">
              <input type="text" class="large" placeholder="Email Address" />
            </div>
          </li>
        </ul>
      </div>
      <div class="gform_footer ">
        <input type="submit" class="gform_button button" value="Subscribe" />
      </div>
    </form>
    <?php
      elseif( isset($form) && function_exists('gravity_form') ):
        gravity_form( $form, false, false, false, null, true, 1, true);
      endif;
    ?>
  </div>
</section>
