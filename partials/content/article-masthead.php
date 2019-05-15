<?php
/**
 * Article masthead
 *
 * Blog article title, byline, and category listing. Requires $post to be set
 * up before import with setup_postdata($post) to function properly
 *
 * @var string $title          Title of the article
 * @var string $author         Name of the article author
 * @var string $authorLink     Link to the author's post results page
 * @var array $categories      Categories applied to the post
 */
$title = get_the_title();
$author = get_the_author_meta('display_name');
$authorLink = get_author_posts_url(get_the_author_meta('ID'));
$categories = get_the_category();
?>
<section class="o-articleMasthead">
  <h1 class="o-articleMasthead__title"><?php echo $title; ?></h1>
  <h2 class="o-articleMasthead__byline">
    By: <a class="o-articleMasthead__byline--link" href="<?php echo $authorLink; ?>"><?php echo $author; ?></a>
  </h2>
  <?php
  // If there are tags for the post, list them
  if( !empty($categories) ):
  ?>
    <h2 class="o-articleMasthead__byline">
      <?php
      // Show singular or plural based on how many categories are applied
      if( sizeof($categories)>1 ):
        echo 'Categories: ';
      else:
        echo 'Category: ';
      endif;

      foreach( $categories as $category ):
        $name = $category->name;
        $link = get_category_link($category->term_id);
      ?>
        <a class="o-articleMasthead__byline--link" href="<?php echo $link; ?>"><?php echo $name; ?></a>
      <?php
      endforeach;
      ?>
    </h2>
  <?php
    endif;
  ?>
</section>
