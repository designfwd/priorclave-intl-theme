<?php // Product options modal dialog. Requires a dialogID query variable to function properly
  $dialogID = get_query_var('dialogID');
  $title = get_query_var('dialogTitle');
  $description = get_query_var('dialogDescription');
  $image = get_query_var('dialogImage');
?>
<dialog id="<?php echo $dialogID; ?>" class="m-optionsDialog">
  <img class="m-optionsDialog__thumbnail lazyload lazyload--blurUp"
    src="<?php echo $image['sizes']['preload']; ?>"
    data-sizes="auto"
    data-srcset="<?php echo $image['sizes']['preload']; ?> 64w,
      <?php echo $image['sizes']['128w']; ?> 65w,
      <?php echo $image['sizes']['240w']; ?> 129w,
      <?php echo $image['sizes']['320w']; ?> 241w,
      <?php echo $image['sizes']['360w']; ?> 321w,
      <?php echo $image['sizes']['375w']; ?> 361w,
      <?php echo $image['sizes']['480w']; ?> 376w,
    "
  />
  <h2 class="m-optionsDialog__title"><?php echo $title; ?></h2>
  <div class="m-optionsDialog__description">
    <?php echo $description; ?>
  </div>
  <div class="m-optionsDialog__button">
    Close
  </div>
</dialog>
