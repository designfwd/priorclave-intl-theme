<?php
  // A card with article overview content. Note the "data-href" attribute, used for linking the entire section
?>
<section class="m-articlePreview" data-href="#">
    <img class="m-articlePreview__featuredImage lazyload" src="<?php get_picsum(648,382); ?>" />
    <img class="m-articlePreview__photo lazyload" src="<?php get_picsum(72,72); ?>" />
    <h3 class="m-articlePreview__headline" href="#">Lorem Ipsum Dolor Sit</h3>
    <div class="m-articlePreview__article">
      Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation...
    </div>
    <a class="m-articlePreview__link" href="#">Read More</a>
</section>
