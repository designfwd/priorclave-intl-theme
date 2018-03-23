<?php
// Search form for use within the page body
?>
<section class="o-siteSearch">
  <?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>
  <form role="search" method="get" class="search-form o-siteSearch__form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  	<input type="search" id="<?php echo $unique_id; ?>" class="search-field" placeholder="Search" value="<?php echo get_search_query(); ?>" name="s" />
  	<button type="submit" class="search-submit">
      <svg viewBox="0 0 16 16">
        <?php get_svg( 'icon-search' ); ?>
      </svg>
      <span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', 'bellhop' ); ?></span></button>
  </form>
</section>
