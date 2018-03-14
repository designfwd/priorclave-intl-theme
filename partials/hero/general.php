<?php
// Default hero content for internal pages, with page title and breadcrumbs
?>
<section class="o-heroGeneral" style="background-image:url('<?php get_picsum(2550,1660,'grayscale'); ?>')">
  <h1 class="o-heroGeneral__content">
    <?php // Lines of text
      $textLines = array(
        'Horizontal',
        'Autoclaves',
      );
      for( $i=0; $i<count($textLines); $i++):
        // Outputs a different style for the final line of text
        if( $i == (count($textLines)-1) ):
      ?>
        <span class="o-heroGeneral__content--feature">
          <?php echo $textLines[$i];?>
          <br />
        </span>
      <?php
        else:
          echo $textLines[$i];
        ?>
          <br />
      <?php
        endif;
      endfor;
    ?>
    <span class="o-heroGeneral__content--breadcrumbs">
      <?php // NavXT breadcrumbs code
        if(function_exists(‘bcn_display’)):
          bcn_display();
        else:
          echo 'Home / Autoclaves / Horizontal Autoclaves';
        endif;
      ?>
    </span>
  </h1>
  <img class="o-heroGeneral__image" src="<?php placeholder_img(650,210,'text=Hero Image'); ?>" />
</section>
