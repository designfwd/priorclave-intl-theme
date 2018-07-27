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
 * @var array $locations              Array of menu locations
 * @var string $intlMenu              The ACF field for referencing
 *                                    international menu settings
 * @var string $contactPage           The URL of the contact page for this site
 */

if( function_exists('get_field') ):
  $siteLogo = get_field('site_logo', 'option');
  $sitePhone = get_field('site_contact_phone', 'option');
  $contactPage = get_field('site_contactPage', 'option');
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
    <?php
    $locations = get_nav_menu_locations();
    if( isset( $locations['primary_nav'] ) ):
      $menu = get_term( $locations['primary_nav'], 'nav_menu' );
      if( $items = wp_get_nav_menu_items( $menu->name ) ):
    ?>
      <ul class="m-navMenu">
        <?php
        foreach( $items as $item ):
          // if the current item is not a top level item, skip it
          if($item->menu_item_parent != '0'):
            continue;
          endif;
          $currentNavItemID = $item->ID;
          $classList = implode(' ', $item->classes);
        ?>
          <li class="m-navMenu__item <?php echo $classList; ?>">
            <div id="menuToggle-<?php echo $item->ID; ?>" data-menu="<?php echo $item->ID; ?>" class="m-navMenu__label">
              <?php echo $item->title; ?>
            </div>
            <div id="menu-<?php echo $item->ID; ?>" class="m-navBlock --preload">
              <?php
              foreach( $items as $subnav ):
                if( $subnav->menu_item_parent == $currentNavItemID ):
                  $currentSubID = $subnav->ID;
                  $subClass = implode(' ', $subnav->classes);

                  // Creates a grid of icon links
                  if( in_array('grid-items', $subnav->classes) ):
                  ?>
                    <div class="m-navBlock__grid">
                      <?php
                      foreach( $items as $block ):
                        if( $block->menu_item_parent == $currentSubID ):
                          if( function_exists('get_field') ):
                            $preview = get_field('page_preview_icon', $block->ID);
                          endif;
                          if(!$preview):
                            $preview = array(
                              'sizes' => array(
                                'preload' => '//via.placeholder.com/64x94?text=image',
                                '128w' => '//via.placeholder.com/128x188?text=image'
                              )
                            );
                          endif;
                        ?>
                        <a class="a-navBlock" href="<?php echo $block->url; ?>">
                          <img class="a-navBlock__image lazyload"
                            src="<?php echo $preview['sizes']['preload']; ?>"
                            data-sizes="auto"
                            data-srcset = "
                              <?php echo $preview['sizes']['preload']; ?> 64w,
                              <?php echo $preview['sizes']['128w']; ?> 65w
                            "
                          />
                          <h3 class="a-navBlock__title">
                            <?php echo $block->title; ?>
                          </h3>
                          <h4 class="a-navBlock__description">
                            <?php echo $block->description; ?>
                          </h4>
                        </a>
                        <?php
                        endif;
                      endforeach;
                      ?>
                    </div>
                  <?php

                  // Creates a modified grid menu for lists with 'picture grid'
                  // as an added class
                  elseif( in_array('picture-grid', $subnav->classes) ):
                  ?>
                    <div class="m-navBlock__grid m-navBlock__grid--pictureGrid">
                      <?php
                      foreach( $items as $block ):
                        if( $block->menu_item_parent == $currentSubID ):
                          if( function_exists('get_field') ):
                            $preview = get_field('page_preview_icon', $block->ID);
                          endif;
                          if(!$preview):
                            $preview = array(
                              'sizes' => array(
                                'preload' => '//via.placeholder.com/64x94?text=image',
                                '128w' => '//via.placeholder.com/128x188?text=image'
                              )
                            );
                          endif;
                        ?>
                        <a class="a-navBlock a-navBlock--pictureGrid" href="<?php echo $block->url; ?>">
                          <img class="a-navBlock__image lazyload"
                            src="<?php echo $preview['sizes']['preload']; ?>"
                            data-sizes="auto"
                            data-srcset = "
                              <?php echo $preview['sizes']['preload']; ?> 64w,
                              <?php echo $preview['sizes']['128w']; ?> 65w
                            "
                          />
                          <h3 class="a-navBlock__title">
                            <?php echo $block->title; ?>
                          </h3>
                          <h4 class="a-navBlock__description">
                            <?php echo $block->description; ?>
                          </h4>
                        </a>
                        <?php
                        endif;
                      endforeach;
                      ?>
                    </div>
                  <?php

                  // Creates a list menu
                  elseif( in_array('list-items', $subnav->classes) ):
                  ?>
                    <div class="m-navBlock__list">
                      <div class="a-navList">
                        <?php
                        foreach( $items as $item ):
                          if( $item->menu_item_parent == $currentSubID ):
                            if( in_array('list-heading', $item->classes) ):
                            ?>
                              <h3 class="a-navList__headline">
                                <?php echo $item->title; ?>
                              </h3>
                            <?php
                            endif;
                          endif;
                        endforeach;
                        ?>
                        <ul class="a-navList__list">
                          <?php
                          foreach( $items as $item ):
                            if(
                              $item->menu_item_parent == $currentSubID &&
                              (in_array('list-heading', $item->classes) == 0)
                            ):
                              ?>
                              <li class="a-navItem">
                                <a class="a-navItem__link" href="<?php echo $item->url; ?>">
                                  <?php echo $item->title; ?>
                                </a>
                              </li>
                            <?php
                            endif;
                          endforeach;
                          ?>
                        </ul>
                      </div>
                    </div>
                  <?php

                  // Creates a thinner version of the list menu for use
                  // alongside a modified grid
                  elseif( in_array('little-list', $subnav->classes) ):
                  ?>
                    <div class="m-navBlock__list m-navBlock__list--littleList">
                      <div class="a-navList">
                        <?php
                        foreach( $items as $item ):
                          if( $item->menu_item_parent == $currentSubID ):
                            if( in_array('list-heading', $item->classes) ):
                            ?>
                              <h3 class="a-navList__headline">
                                <?php echo $item->title; ?>
                              </h3>
                            <?php
                            endif;
                          endif;
                        endforeach;
                        ?>
                        <ul class="a-navList__list">
                          <?php
                          foreach( $items as $item ):
                            if(
                              $item->menu_item_parent == $currentSubID &&
                              (in_array('list-heading', $item->classes) == 0)
                            ):
                              ?>
                              <li class="a-navItem">
                                <a class="a-navItem__link" href="<?php echo $item->url; ?>">
                                  <?php echo $item->title; ?>
                                </a>
                              </li>
                            <?php
                            endif;
                          endforeach;
                          ?>
                        </ul>
                      </div>
                    </div>
                  <?php
                  elseif (in_array('bottom-button', $subnav->classes) ):
                    if( $subnav->menu_item_parent == $currentNavItemID ):
                    ?>
                      <div class="m-navBlock__button">
                        <a class="a-menuButton" href="<?php echo $subnav->url; ?>">
                          <div class="a-menuButton__label">
                            <?php echo $subnav->title; ?>
                          </div>
                        </a>
                      </div>
                    <?php
                    endif;
                  endif;
                endif;
              endforeach;
              ?>
            </div>
          </li>
        <?php
        endforeach;
        ?>
      </ul>
    <?php
      endif;
    endif;
    ?>
  </nav>

  <div class="o-primaryNav__quicklinks">
    <div class="m-navQuicklinks">
      <a class="m-navQuicklinks__phone" href="tel:<?php echo $sitePhone; ?>">CALL <?php echo $sitePhone; ?></a>
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
      <a class="m-navQuicklinks__button" href="<?php echo $contactPage; ?>">
        Request Quote
      </a>
    </div>
  </div>
</section>
