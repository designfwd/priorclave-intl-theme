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


endif;
?>
<section class="o-heroPost">
  <a href="#">
    <img class="o-heroPost__image lazyload" src="<?php placeholder_img(240,240,'text=image'); ?>" />
  </a>
  <div class="o-heroPost__content">
    <a class="o-heroPost__content--headline" href="#">Priorclave at Medlab 2018</a>
    <br />
    <span class="o-heroPost__content--description">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quantum Aristoxeni ingenium consumptum videmus in musicis.  Lorem ipsum dolor sit amet...
    </span>
    <br />
    <a class="o-heroPost__content--link" href="#">Read More</a>
  </div>
</section>
