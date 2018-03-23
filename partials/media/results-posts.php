<?php
// Grid of posts resulting from a search
?>
<section class="o-articleGrid">
  <h2 class="o-articleGrid__headline">
    Search Results for "Lorem Ipsum Dolor Sit Amet"
  </h2>
  <?php
    for( $i=0; $i<rand(7,11); $i++):
  ?>
    <div class="o-articleGrid__article">
      <div class="m-articlePreview m-articlePreview--blog" data-href="#">
          <img class="m-articlePreview__featuredImage lazyload" src="<?php get_picsum(648,382); ?>" />
          <img class="m-articlePreview__photo lazyload" src="<?php get_picsum(72,72); ?>" />
          <h3 class="m-articlePreview__headline" href="#">Lorem Ipsum Dolor Sit</h3>
          <div class="m-articlePreview__article">
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation...
          </div>
          <a class="m-articlePreview__link" href="#">Read More</a>
      </div>
    </div>
  <?php
    endfor;
  ?>
</section>
