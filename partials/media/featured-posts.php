<?php
// A block of featured article previews
?>
<section class="o-featuredPosts" style="background-image:url('<?php get_picsum(2400,1200, 'grayscale'); ?>')">
  <h2 class="o-featuredPosts__headline">News & Updates</h2>
  <div class="o-featuredPosts__articles">
    <?php
      for( $i=0; $i<3; $i++):
        get_partial('content/article-preview');
      endfor;
    ?>
  </div>
  <a class="o-featuredPosts__link" href="#">View All News</a>
</section>
