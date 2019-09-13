<?php
/**
 * Template Name: Search Results
 * Description: The results page for a website search
 */
global $query_string;
wp_parse_str( $query_string, $search_query );
$current = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$query_var = get_query_var("s");
$search_query['post_type'] = 'any';
$search_query['posts_per_page'] = 5;
$search_query['paged'] = $current;
$search = new WP_Query( $search_query );

$big = 999999999;
$paginatedLinks = paginate_links( array(
'base' => @add_query_arg('paged','%#%'),
'format' => '?page=%#%',
'current' => $current,
'total' => $search->max_num_pages,
'prev_next' => false
) );

?>
<!doctype html>
<html <?php priorclave_lang(); ?>>
  <?php get_partial('meta/head'); ?>
  <body <?php body_class('search search--results'); ?>>
    <?php
    wp_body_open();
    get_partial('meta/gtm-noscript');
    ?>
    <header>
      <?php
        if( get_current_blog_id() == 1 ):
          get_partial('navigation/simplified'); // Multisite navigation
        else:
          get_partial('navigation/primary'); // Primary navigation
        endif;
        get_partial('hero/search'); // General hero area
      ?>
    </header>
    <main>
      <?php
        get_partial('form/site-search'); // Site search

        set_query_var('search', $search);
        get_partial('media/results-posts'); // Results grid

        set_query_var('paginatedLinks', $paginatedLinks);
        get_partial('navigation/search-pagination'); // Pagination
      ?>
    </main>
    <footer class="universal-footer">
      <?php
        get_partial('media/product-related'); // Related product block

        // Universal footer blocks
        get_partial('footer/newsletter'); // Newsletter signup form
        get_partial('footer/masthead'); // Footer masthead
        get_partial('footer/quicklinks'); // Quicklink buttons
        get_partial('footer/contacts'); // Contact blocks
        get_partial('footer/badges'); // Crediibility badges
        get_partial('footer/copyright'); // Copyright phrasing and links
      ?>
    </footer>
    <?php get_partial('meta/foot'); ?>
  </body>
</html>
