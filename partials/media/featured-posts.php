<?php
/**
 * Featured article previews
 *
 * Up to three featured articles shown as previews, with the other remaining
 * spaces (if any) drawn from recent posts
 *
 * @var array $background       The background image for the section
 * @var string $headline        Headline text for this section
 * @var array $articles         The featured articles, if any
 * @var array $exclude          The article IDs to exclude from WP_Query
 */

if( function_exists('get_field') ):
  $ID = get_the_ID();
  $background = get_field('media_featuredPosts_background', $ID);
  $headline = get_field('media_featuredPosts_headline', $ID);
  $articles = get_field('media_featuredPosts_articles', $ID);
  $exclude = get_field('media_featuredPosts_articles', $ID, false);
endif;

if( !$background ):
  $background = array(
    'sizes' => array(
      'preload' => '//picsum.photos/64/64/?blur',
      '2560w' => '//picsum.photos/2560/1280',
    ),
  );
endif;
?>
<section class="o-featuredPosts lazyload" data-bg="<?php echo $background['sizes']['2560w']; ?>" style="background-image:url('<?php $background['sizes']['preload']; ?>')">
  <h2 class="o-featuredPosts__headline"><?php echo $headline; ?></h2>
  <div class="o-featuredPosts__articles">
    <?php
      if( $articles ):
        $rows = count($articles);
        foreach( $articles as $post ):
          setup_postdata($post);
          include( locate_template('partials/content/article-preview.php') );
        endforeach;
        wp_reset_postdata();
      else:
        $rows = 0;
      endif;

      if ($rows < 3):
        $args = array(
          'post_type' => 'post',
          'post_status' => 'publish',
          'posts_per_page' => (3-$rows),
          'order' => 'DESC',
          'orderby' => 'date',
          'post__not_in' => $exclude,
        );
        $recent = new WP_Query( $args );
        $recent_posts = $recent->get_posts();
        foreach( $recent_posts as $post ):
          setup_postdata($post);
          include( locate_template('partials/content/article-preview.php') );
        endforeach;
        wp_reset_postdata();
      endif;
    ?>
  </div>
  <a class="o-featuredPosts__link" href="<?php echo get_post_type_archive_link('post'); ?>">View All News</a>
</section>
