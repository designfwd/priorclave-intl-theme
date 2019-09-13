<?php
// Grabs fields from parent site settings if on a different site
$blogId = get_current_blog_id();
if( get_current_blog_id() != 1 ):
  switch_to_blog(1);
endif;

if( get_field('google_analytics_id', 'option') ):
  $google_id = get_field('google_analytics_id', 'option');
?>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo $google_id; ?>"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
<?php
endif;
// Just in case we switched sites, switch back
switch_to_blog($blogId);