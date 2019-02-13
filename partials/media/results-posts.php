<?php
// Grid of posts resulting from a search
$search = get_query_var( 'search' );
?>
<section class="o-articleGrid">
  <h2 class="o-articleGrid__headline">
    Search Results for "<?php the_search_query(); ?>" 
  </h2>
  <?php
    if($search->have_posts()) : 
      while($search->have_posts()) : $search->the_post();
  ?>
    <div class="o-articleGrid__article">
      <div class="m-articlePreview m-articlePreview--blog" data-href="<?php the_permalink(); ?>">
          <img class="m-articlePreview__featuredImage lazyload" src="<?php the_post_thumbnail_url('640w'); ?>" />
          <img class="m-articlePreview__photo lazyload" src="<?php get_picsum(72,72); ?>" />
          <h3 class="m-articlePreview__headline" href="#"><?php the_title(); ?></h3>
          <div class="m-articlePreview__article">
            <?php the_excerpt(); ?>
          </div>
          <a class="m-articlePreview__link" href="<?php the_permalink(); ?>">Read More</a>
      </div>
    </div>
  <?php
    endwhile;
  else:
    echo "Sorry, there were no results";
  endif;
  ?>
</section>
