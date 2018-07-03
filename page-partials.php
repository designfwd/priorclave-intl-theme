<?php
// Placeholder page for testing partials
?>
<!doctype html>
<html <?php priorclave_lang(); ?>>
<?php get_partial('meta/head'); ?>
<style>
section {
  padding: 0 0 2rem;
  outline: .25rem dotted #666;
}
</style>
<body <?php body_class('blog blog--category'); ?>>
<?php while ( have_posts() ): the_post(); ?>

<h2>content</h2>
<h3>article-masthead</h3>
<?php get_partial('content/article-masthead'); ?>

<h3>article-preview</h3>
<section>
<?php get_partial('content/article-preview'); ?>
</section>

<h3>feature-block</h3>
<?php get_partial('content/feature-block'); ?>

<h3>feature-inverted</h3>
<?php get_partial('content/feature-inverted'); ?>

<h3>general-block</h3>
<?php get_partial('content/general-block'); ?>

<h3>intro-block</h3>
<?php get_partial('content/intro-block'); ?>

<h3>intro-decorated</h3>
<?php get_partial('content/intro-decorated'); ?>

<h3>intro-inverted</h3>
<?php get_partial('content/intro-inverted'); ?>

<h3>product-features</h3>
<?php get_partial('content/product-features'); ?>

<h3>product-specifications</h3>
<?php get_partial('content/product-specifications'); ?>


<h2>footer</h2>
<h3>badges</h3>
<?php get_partial('footer/badges'); ?>

<h3>contacts</h3>
<?php get_partial('footer/contacts'); ?>

<h3>copyright</h3>
<?php get_partial('footer/copyright'); ?>

<h3>masthead</h3>
<?php get_partial('footer/masthead'); ?>

<h3>newsletter</h3>
<?php get_partial('footer/newsletter'); ?>

<h3>quicklinks</h3>
<?php get_partial('footer/quicklinks'); ?>


<h2>form</h2>
<h3>product-finder</h3>
<?php get_partial('form/product-finder'); ?>

<h3>quote-request</h3>
<?php get_partial('form/quote-request'); ?>

<h3>site-search</h3>
<?php get_partial('form/site-search'); ?>


<h2>hero</h2>
<h3>featured-marketing</h3>
<?php get_partial('hero/featured-marketing'); ?>

<h3>featured-post</h3>
<?php get_partial('hero/featured-post'); ?>

<h3>general</h3>
<?php get_partial('hero/general'); ?>

<h3>map-distributors</h3>
<?php get_partial('hero/map-distributors'); ?>

<h3>map-homepage</h3>
<?php get_partial('hero/map-homepage'); ?>

<h3>product</h3>
<?php get_partial('hero/product'); ?>


<h2>media</h2>
<h3>article-grid</h3>
<?php get_partial('media/article-grid'); ?>

<h3>contact-grid</h3>
<?php get_partial('media/contact-grid'); ?>

<h3>cta-2up</h3>
<?php get_partial('media/cta-2up'); ?>

<h3>cta-background</h3>
<?php get_partial('media/cta-background'); ?>

<h3>cta-grid</h3>
<?php get_partial('media/cta-grid'); ?>

<h3>cta-simple</h3>
<?php get_partial('media/cta-simple'); ?>

<h3>directory-distributors</h3>
<?php get_partial('media/directory-distributors'); ?>

<h3>directory-faq</h3>
<?php get_partial('media/directory-faq'); ?>

<h3>featured-posts</h3>
<?php get_partial('media/featured-posts'); ?>

<h3>featured-video</h3>
<?php get_partial('media/featured-video'); ?>

<h3>location-map</h3>
<?php get_partial('media/location-map'); ?>

<h3>product-options</h3>
<?php get_partial('media/product-options'); ?>

<h3>product-related</h3>
<?php get_partial('media/product-related'); ?>

<h3>product-results</h3>
<?php get_partial('media/product-results'); ?>

<h3>product-spotlight</h3>
<?php get_partial('media/product-spotlight'); ?>

<h3>results-pages</h3>
<?php get_partial('media/results-pages'); ?>

<h3>results-posts</h3>
<?php get_partial('media/results-posts'); ?>

<h3>slider-brands</h3>
<?php get_partial('media/slider-brands'); ?>

<h3>slider-testimonial</h3>
<?php get_partial('media/slider-brands'); ?>

<h3>video-grid</h3>
<?php get_partial('media/video-grid'); ?>


<h2>modal</h2>
<h3>product-option</h3>
<?php get_partial('modal/product-option'); ?>


<h2>navigation</h2>
<h3>categories-blocks</h3>
<?php get_partial('navigation/categories-blocks'); ?>

<h3>categories-faq</h3>
<?php get_partial('navigation/categories-faq'); ?>

<h3>categories-list</h3>
<?php get_partial('navigation/categories-list'); ?>

<h3>link-blocks</h3>
<?php get_partial('navigation/link-blocks'); ?>

<h3>link-grid</h3>
<?php get_partial('navigation/link-grid'); ?>

<h3>pagination</h3>
<?php get_partial('navigation/pagination'); ?>

<h3>primary</h3>
<?php get_partial('navigation/primary'); ?>

<h3>product-blocks</h3>
<?php get_partial('navigation/product-blocks'); ?>

<h3>product-downloads</h3>
<?php get_partial('navigation/product-downloads'); ?>

<h3>product-grid</h3>
<?php get_partial('navigation/product-grid'); ?>

<h3>regional</h3>
<?php get_partial('navigation/regional'); ?>

<h3>simplified</h3>
<?php get_partial('navigation/simplified'); ?>

<h3>sitemap</h3>
<?php get_partial('navigation/sitemap'); ?>


<h2>widget</h2>
<h3>author</h3>
<?php get_partial('widget/author'); ?>

<h3>featured-articles</h3>
<?php get_partial('widget/featured-articles'); ?>

<h3>links-related</h3>
<?php get_partial('widget/links-related'); ?>

<h3>links-rich</h3>
<?php get_partial('widget/links-rich'); ?>

<h3>links-tags</h3>
<?php get_partial('widget/links-tags'); ?>

<h3>newsletter-signup</h3>
<?php get_partial('widget/newsletter-signup'); ?>

<h3>social-sharing</h3>
<?php get_partial('widget/social-sharing'); ?>

<?php endwhile; ?>
<?php get_partial('meta/foot'); ?>
</body>
</html>
