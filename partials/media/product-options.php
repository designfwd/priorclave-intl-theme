<?php
/**
 * Product options
 *
 * Relevant product options, with featured imagery and a modal with more info
 *
 * @var array $options      The options to include in this section
 */

if( function_exists('get_field') ):
  $ID = get_the_ID();
  $items = get_field('media_productOptions_items', $ID);
endif;
?>
<section id="productOptions" class="o-productOptions">
  <h2 class="o-productOptions__headline">Options</h2>
  <?php
  if( $items ):
    $rows = count($items);
  ?>
    <div class="o-productOptions__featured">
      <?php
      for( $i=0; $i<10; $i++ ):
        if( $items[$i] ):
          $post = $items[$i];
          setup_postdata($post);
          $title = get_the_title($post->ID);
          $description = get_field('product_options_description', $post->ID);
          $image = get_field('product_options_image', $post->ID);
          if( !$image ):
            $image = array( // 440 x 320
              'sizes' => array(
                'preload' => '//via.placeholder.com/64x47?text=thumbnail+' . ($i + 1),
                '128w' => '//via.placeholder.com/128x93?text=thumbnail+' . ($i + 1),
                '240w' => '//via.placeholder.com/240x175?text=thumbnail+' . ($i + 1),
                '320w' => '//via.placeholder.com/320x233?text=thumbnail+' . ($i + 1),
                '360w' => '//via.placeholder.com/360x262?text=thumbnail+' . ($i + 1),
                '375w' => '//via.placeholder.com/375x273?text=thumbnail+' . ($i + 1),
                '480w' => '//via.placeholder.com/480x349?text=thumbnail+' . ($i + 1),
              ),
            );
          endif;
        ?>
          <div id="productOption-<?php echo $i; ?>" class="m-featuredOption">
            <img class="m-featuredOption__thumbnail lazyload lazyload--blurUp"
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
            <div class="m-featuredOption__title">
              <?php echo $title; ?>
            </div>
          </div>
        <?php
        set_query_var( 'dialogID', ('optionDialog-' . $i));
        set_query_var( 'dialogTitle', $title);
        set_query_var( 'dialogDescription', $description);
        set_query_var( 'dialogImage', $image);
        get_partial('modal/product-option');
        endif;
      endfor;
      ?>

    </div>
    <?php
    if($rows>10):
    ?>
      <p id="productOptions-toggle" class="o-productOptions__listToggle">View a Full List of Options</p>
      <div id="productOptions-list" class="o-productOptions__list --preload">
        <?php // Displays the non-featured options
          for( $i=10; $i<$rows; $i++):
            $post = $items[$i];
            setup_postdata($post);
            $title = get_the_title($post->ID);
            $description = get_field('product_options_description', $post->ID);
            $image = get_field('product_options_image', $post->ID);
            if( !$image ):
              $image = array( // 440 x 320
                'sizes' => array(
                  'preload' => '//via.placeholder.com/64x47?text=thumbnail+' . ($i + 1),
                  '128w' => '//via.placeholder.com/128x93?text=thumbnail+' . ($i + 1),
                  '240w' => '//via.placeholder.com/240x175?text=thumbnail+' . ($i + 1),
                  '320w' => '//via.placeholder.com/320x233?text=thumbnail+' . ($i + 1),
                  '360w' => '//via.placeholder.com/360x262?text=thumbnail+' . ($i + 1),
                  '375w' => '//via.placeholder.com/375x273?text=thumbnail+' . ($i + 1),
                  '480w' => '//via.placeholder.com/480x349?text=thumbnail+' . ($i + 1),
                ),
              );
            endif;
        ?>
          <div id="productOption-<?php echo $i; ?>" class="o-productOptions__item">
            <?php
              echo $title;
            ?>
          </div>
        <?php
          endfor;
        ?>
      </div>
      <?php // Creates the dialog boxes associated with the list above
      for( $i=10; $i<$rows; $i++):
        $post = $items[$i];
        setup_postdata($post);
        $title = get_the_title($post->ID);
        $description = get_field('product_options_description', $post->ID);
        $image = get_field('product_options_image', $post->ID);        
        set_query_var( 'dialogID', ('optionDialog-' . $i));
        set_query_var( 'dialogTitle', $title);
        set_query_var( 'dialogDescription', $description);
        set_query_var( 'dialogImage', $image);
        get_partial('modal/product-option');
      endfor;
    endif;
  endif;
  wp_reset_postdata();
  ?>
</section>
