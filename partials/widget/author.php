<?php
// Sidebar widget to display post author information
$ID = get_the_author_meta('ID');
$args = array(
  'size' => 120
);
$avatar = get_avatar_url( $ID, $args );
?>
<section class="o-widget">
  <h2 class="o-widget__headline">Author</h2>
  <div class="o-widget__authorBox">
    <div class="m-authorBox">
      <img class="m-authorBox__photo" src="<?php echo $avatar; ?>" />
      <h3 class="m-authorBox__name"><?php echo get_the_author_meta('display_name'); ?></h3>
      <h4 class="m-authorBox__title"><?php the_field('job_title', 'user_' . $ID ); ?></h4>
      <div class="m-authorBox__description">
        <?php echo get_the_author_meta( 'user_description' ); ?>
      </div>
    </div>
  </div>
</section>
