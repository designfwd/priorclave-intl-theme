<?php
/**
 * Primary navigation system
 *
 * Logo, dropdown menus, and quicklinks for easy access via a fixed section
 *
 * @var array $siteLogo               The logo for this site
 *
 * @var string $sitePhone             The primary contact phone number for the
 *                                    site
 * @var string $intlMenu              The ACF field for referencing
 *                                    international menu settings
 * @var string $contactPage           The URL of the contact page for this site
 */

if( function_exists('get_field') ):
  $siteLogo = get_field('site_logo', 'option');
endif;

// Fallback logo if none is set
if( !$siteLogo ):
  $siteLogo = array(
    'alt' => 'Priorclave',
    'sizes' => array(
      'preload' => '//via.placeholder.com/64x17?text=logo',
      '128w' => '//via.placeholder.com/128x33?text=logo',
      '240w' => '//via.placeholder.com/240x62?text=logo'
    )
  );
endif;
?>
<section class="o-primaryNav">
  <a class="o-primaryNav__logo" href="<?php echo get_site_url(); ?>">
    <img class="a-menuLogo lazyload lazyload--blurUp"
      alt="<?php echo $siteLogo['alt']; ?>"
      src="<?php echo $siteLogo['sizes']['preload']; ?>"
      data-sizes="auto"
      data-srcset="<?php echo $siteLogo['sizes']['preload']; ?> 64w,
        <?php echo $siteLogo['sizes']['128w']; ?> 65w,
        <?php echo $siteLogo['sizes']['240w']; ?> 129w
      "
    />
  </a>

  <nav class="o-primaryNav__menu">
    <ul class="m-navMenu">
      <li class="m-navMenu__item menu-header">
        <a id="menuToggle--autoclave" class="m-navMenu__label --active" href="#">Autoclaves</a>
        <div id="menu--autoclave" class="m-navBlock">
          <div class="m-navBlock__grid m-navBlock__grid--autoclaves">
            <?php
              for( $i=0; $i<10; $i++):
            ?>
              <a class="a-navBlock a-navBlock--autoclaves" href="#">
                <img class="a-navBlock__image" src="//via.placeholder.com/72x106?text=image" />
                <h3 class="a-navBlock__title">Top-Loading Autoclaves</h3>
                <h4 class="a-navBlock__description">60-150L</h4>
              </a>
            <?php
              endfor;
            ?>
          </div>
          <div class="m-navBlock__list m-navBlock__list--autoclaves">
            <div class="a-navList">
              <h3 class="a-navList__headline">Autoclave Information</h3>
              <ul class="a-navList__list">
                <?php
                  $links = array(
                    'Autoclave Pricing',
                    'Autoclave Accessories',
                    'Autoclave Options',
                    'Request a Quote',
                    'FAQ'
                  );
                  foreach( $links as $link ):
                ?>
                  <li class="a-navItem">
                    <a class="a-navItem__link" href="#"><?php echo $link; ?></a>
                  </li>
                <?php
                  endforeach;
                ?>
              </ul>
            </div>
          </div>
          <div class="m-navBlock__button">
            <a class="a-menuButton" href="#">
              <div class="a-menuButton__label">
                View All Autoclaves
              </div>
            </a>
          </div>
        </div>
      </li>
      <li class="m-navMenu__item menu-header">
        <a class="m-navMenu__label" href="#">Customers</a>
      </li>
      <li class="m-navMenu__item menu-header">
        <a class="m-navMenu__label" href="#">Why Priorclave?</a>
      </li>
      <li class="m-navMenu__item menu-header">
        <a class="m-navMenu__label" href="#">Support</a>
      </li>
      <li class="m-navMenu__item menu-header">
        <a class="m-navMenu__label" href="#">Contact</a>
      </li>
    </ul>
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
