<?php
// Relevant product options, with featured imagery and listing of all available options

  // Array of options to mimic ACF from admin
  $featuredNumber = 10;
  $optionsList = array(
    'TACTROL Control System 10 Program Memory',
    'Priorclave Tactrol Printer',
    'Combined Pre-Cycle Vacuum & Vacuum Cooling',
    'Setting Lock Keyswitch',
    'TACTROL Control System',
    'TACTROL Control System 10 Program Memory 02',
    'Priorclave Tactrol Printer 02',
    'Combined Pre-Cycle Vacuum & Vacuum Cooling 02',
    'Setting Lock Keyswitch 02',
    'TACTROL Control System 02',
    'TACTROL Control System 10 Program Memory 03',
    'Priorclave Tactrol Printer 03',
    'Combined Pre-Cycle Vacuum & Vacuum Cooling 03',
    'Setting Lock Keyswitch 03',
    'TACTROL Control System 03',
    'TACTROL Control System 10 Program Memory 04',
    'Priorclave Tactrol Printer 04',
    'Combined Pre-Cycle Vacuum & Vacuum Cooling 04',
    'Setting Lock Keyswitch 04',
    'TACTROL Control System 04',
  );
?>
<section id="productOptions" class="o-productOptions">
  <h2 class="o-productOptions__headline">Options</h2>
  <div class="o-productOptions__featured">
    <?php // Displays the featured options
      for( $i=0; $i<$featuredNumber; $i++):
    ?>
      <div id="productOption-<?php echo $i; ?>" class="m-featuredOption">
        <img class="m-featuredOption__thumbnail lazyload" src="<?php placeholder_img(440,320,'text=thumbnail'); ?>" />
        <div class="m-featuredOption__title">
          <?php echo $optionsList[$i]; ?>
        </div>
      </div>
    <?php
      endfor;
    ?>

  </div>
  <p class="o-productOptions__listToggle">View a Full List of Options</p>
  <ul class="o-productOptions__list">
    <?php // Displays the non-featured options
      for( $i=$featuredNumber; $i<count($optionsList); $i++):
    ?>
      <li id="productOption-<?php echo $i; ?>" class="o-productOptions__item">
        <?php echo $optionsList[$i]; ?>
      </li>
    <?php
      endfor;
    ?>
  </ul>
</section>
