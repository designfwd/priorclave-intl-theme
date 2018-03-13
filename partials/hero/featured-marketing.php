<?php
// Single-slide marketing message with image and optional distributor contact capability
?>
<section class="o-heroMarketing" style="background-image:url('<?php get_picsum(2550,1660,'grayscale'); ?>')">
  <h1 class="o-heroMarketing__content">
    <?php // Lines of text
      $textLines = array(
        'Reliable.',
        'Flexible.',
        'Programmable.',
        'Affordable.',
        'Autoclaves',
      );
      for( $i=0; $i<count($textLines); $i++):
        // Outputs a different style for the final line of text
        if( $i == (count($textLines)-1) ):
      ?>
        <span class="o-heroMarketing__content--feature">
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
    <div class="o-heroMarketing__content--subtitle">
      The Right Autoclave for Your Industry
    </div>
  </h1>
  <img class="o-heroMarketing__image" src="<?php placeholder_img(650,460,'text=Marketing Image'); ?>" />
</section>
