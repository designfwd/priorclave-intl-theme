<?php
// A block of featured article previews
?>
<section class="o-featuredPosts" style="background-image:url('<?php get_picsum(2400,1200, 'grayscale'); ?>')">
  <h2 class="o-featuredPosts__headline">News & Updates</h2>
  <div class="o-featuredPosts__articles">
    <?php
      for( $i=0; $i<3; $i++):
    ?>
      <div class="m-articlePreview" data-href="#">
          <img class="m-articlePreview__featuredImage lazyload" src="<?php get_picsum(648,382); ?>" />
          <img class="m-articlePreview__photo lazyload" src="<?php get_picsum(72,72); ?>" />
          <h3 class="m-articlePreview__headline" href="#">Lorem Ipsum Dolor Sit</h3>
          <div class="m-articlePreview__article">
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation...
          </div>
          <a class="m-articlePreview__link" href="#">Read More</a>
      </div>
    <?php
      endfor;
    ?>
  </div>
  <a class="o-featuredPosts__link" href="#">View All News</a>
</section>
