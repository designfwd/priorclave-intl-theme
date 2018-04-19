<?php
/**
 * Primary navigation system
 *
 * Logo, dropdown menus, and quicklinks for easy access via a fixed section
 *
 * @var array $siteLogo               The logo for this site
 *
 * @var string $autoclavesLabel       The label for the autoclaves menu tab
 * @var string $autoclavesGrid        The ACF field for grid items in the
 *                                    autoclaves menu tab
 * @var string $autoclavesHeadline    Header text for the link list in the
 *                                    autoclaves menu tab
 * @var string $autoclavesList        ACF of list items in the autoclaves menu
 *                                    tab
 * @var object $autoclavesButtonLink  The linked page for this menu tab button
 * @var string $autoclavesButtonLabel The label text for this menu tab's button
 *
 * @var string $customersLabel        The label for the customers menu tab
 * @var string $customersList         ACF for the link lists in this menu
 * @var object $customersButtonLink   The linked page for this menu tab button
 * @var string $customersButtonLabel  The label text for this menu tab's button
 *
 * @var string $aboutLabel            The label for the 'about us' menu tab
 * @var string $aboutGrid             ACF for the link lists in the about menu
 * @var object $aboutButtonLink       The linked page for this menu tab button
 * @var string $aboutButtonLabel      The label text for this menu tab's button
 *
 * @var string $supportLabel          The label for the support menu tab
 * @var string $supportGrid           ACF for the link lists in this menu
 * @var object $supportButtonLink     The linekd page for this menu tab button
 * @var string $supportButtonLabel    The label text for this menu tab's button
 *
 * @var string $contactLabel          The label for the contact menu tab
 * @var string $contactGrid           ACF for the link list in this menu
 *
 * @var string $sitePhone             The primary contact phone number for the
 *                                    site
 * @var string $intlMenu              The ACF field for referencing
 *                                    international menu settings
 * @var string $contactPage           The URL of the contact page for this site
 */
?>
<section class="o-primaryNav">
  <a class="o-primaryNav__logo" href="<?php echo get_site_url(); ?>">
    <img class="a-navLogo lazyload lazyload--blurUp"
      alt=""
      src="<?php placeholder_img(219,57,'text=logo'); ?>"
    />
  </a>

  <nav class="o-primaryNav__menu">
  </nav>

  <div class="o-primaryNav__quicklinks">
    <div class="m-navQuicklinks">
      <a class="m-navQuicklinks__phone" href="#">CALL +12 34 5678 9012</a>
      <a class="m-navQuicklinks__menu" href="#">
        <svg id="" class="a-dropdownLink a-dropdownLink--icon" viewBox="0 0 640 480">
          <?php get_svg('flag/gb'); ?>
        </svg>
      </a>

      <a class="m-navQuicklinks__search" href="#">
        <svg class="a-navIcon" viewBox="0 0 16 16">
          <?php get_svg('icon-search'); ?>
        </svg>
      </a>
      <a class="a-navButton a-navButton--primary" href="#">
        Request Quote
      </a>
    </div>
  </div>
</section>
