<?php // Product options modal dialog. Requires a dialogID query variable to function properly
  $dialogID = get_query_var('dialogID');
?>
<dialog id="<?php echo $dialogID; ?>" class="m-optionsDialog">
  <img class="m-optionsDialog__thumbnail lazyload" src="<?php placeholder_img(440,320,'text=thumbnail'); ?>" />
  <h2 class="m-optionsDialog__title"><?php echo $dialogID; ?></h2>
  <div class="m-optionsDialog__description">
    <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
  </div>
  <div class="m-optionsDialog__button">
    Close
  </div>
</dialog>
