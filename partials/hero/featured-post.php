<?php
/**
 * Featured post in the hero area
 *
 * Preview of a specific post for feature in the hero area of the page
 *
 * @var string $newsPage  The page to pull news-related settings from
 * @var array $posts      The list of posts to feature. Must have single value.
 *
 */

if( function_exists('get_field') ):
  $newsPage = get_field('site_newsPage', 'option', false);
  $posts = get_field('hero_featuredPost_post', $newsPage);

  // Sets variables based on $posts
  $id = $posts[0]->ID;
  $link = get_permalink($id);
  $image = array(
    'alt' => get_the_title($id),
    'sizes' => array(
      'preload' => get_the_post_thumbnail_url( $id, 'preload' ),
      '128w' => get_the_post_thumbnail_url( $id, '128w' ),
      '240w' => get_the_post_thumbnail_url( $id, '240w' )
    )
  );
  $title = get_the_title($id);
  $excerpt = get_the_excerpt($id);
endif;

// Define placeholders if no post is set
if( !isset($id) || $id == '' ):
  $link = get_permalink();
  $image = array(
    'alt' => 'no image set',
    'sizes' => array(
      'preload' => '//via.placeholder.com/64x64?text=no+image+set',
      '128w' => '//via.placeholder.com/128x128?text=no+image+set',
      '240w' => '//via.placeholder.com/240x240?text=no+image+set'
    )
  );
  $title = 'No Post Set';
  $excerpt = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quantum Aristoxeni ingenium consumptum videmus in musicis.  Lorem ipsum dolor sit amet...';
endif;
?>
<section class="o-heroPost">
  <a href="<?php echo $link; ?>">
    <img class="o-heroPost__image lazyload lazyload--blurUp"
      alt="<?php echo $image['alt']; ?>"
      src="<?php echo $image['sizes']['preload']; ?>"
      data-sizes="auto"
      data-srcset="<?php echo $image['sizes']['preload']; ?> 64w,
        <?php echo $image['sizes']['128w']; ?> 65w,
        <?php echo $image['sizes']['240w']; ?> 129w
      "
    />
  </a>
  <div class="o-heroPost__content">
    <a class="o-heroPost__content--headline" href="<?php echo $link; ?>"><?php echo $title; ?></a>
    <br />
    <span class="o-heroPost__content--description">
      <?php echo $excerpt; ?>
    </span>
    <br />
    <a class="o-heroPost__content--link" href="<?php echo $link; ?>">Read More</a>
  </div>
</section>
