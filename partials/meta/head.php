<?php
/**
 * Metatags and other links for the <head> area of the page
 *
 * Includes basic meta markup as well as Google site certification, tag manager, and TypeKit before calling
 * the wp_head() function;
 */
?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php
  // Places alternate links for the page
  if( have_rows( 'hreflang' ) ):
    while( have_rows( 'hreflang' ) ): the_row();
      $link = get_sub_field( 'link' );
      $lang = get_sub_field( 'lang' );

      echo '<link rel="alternate" href="' . $link . '" hreflang="' . $lang . '" />' . PHP_EOL;
    endwhile;
  endif;
  ?>

  <?php
  // Grabs fields from parent site settings if on a different site
  $blogId = get_current_blog_id();
  if( get_current_blog_id() != 1 ):
    switch_to_blog(1);
  endif;

  // Google site verification
  if( get_field('google_site_verification_id', 'option') ):
  ?>
    <meta name="google-site-verification" content="<?php the_field('google_site_verification_id', 'option'); ?>" />
  <?php
  endif;

  // Google Analytics
  if( get_field('google_analytics_id', 'option') ):
    $google_analytics_id = get_field('google_analytics_id', 'option');
  ?>
    <link rel="preconnect" href="https://www.googletagmanager.com/" crossorigin>
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $google_analytics_id; ?>"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', '<?php echo $google_analytics_id; ?>');
    </script>
  <?php
  endif;

  // Typekit integration
  if( get_field('typekit_id', 'option') ):
    $typekit_id = get_field('typekit_id', 'option');
  ?>
    <link rel="preconnect" href="https://use.typekit.net/" crossorigin>
    <script>
      (function(d) {
        var config = {
          kitId: '<?php echo $typekit_id; ?>',
          scriptTimeout: 3000,
          async: true
        },
        h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
      })(document);
    </script>
  <?php
  endif;

  // Just in case we switched sites, switch back
  switch_to_blog($blogId);

  // WordPress head() function
  wp_head();
  ?>
</head>
