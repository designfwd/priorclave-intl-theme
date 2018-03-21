<?php
// Icon-paired grid of contact information
?>
<section class="o-contactGrid">
  <div class="o-contactGrid__section">
    <div class="m-gridSection">
      <div class="m-gridSection__icon m-gridSection__icon--phone">
        <svg viewBox="0 0 16 16">
          <?php get_svg('icon-phone-solid'); ?>
        </svg>
      </div>
      <?php
        // Phone numbers
        $numbers = array(
          array(
            'title' => 'Phone (UK)',
            'type' => 'tel',
            'content' => '123 4567 8901'
          ),
          array(
            'title' => 'Phone',
            'type' => 'tel',
            'content' => '+12 34 5678 9012'
          ),
          array(
            'title' => 'Fax',
            'type' => 'fax',
            'content' => '+12 34 5678 9012'
          )
        );
        foreach( $numbers as $number ):
      ?>
        <div class="m-gridSection__item">
          <?php echo $number['title'];?>: <a class="m-gridSection__link" href="<?php echo $number['type'] . ':' . $number['content']; ?>"><?php echo $number['content']; ?></a>
        </div>
      <?php
        endforeach;
      ?>
    </div>
  </div>
  <div class="o-contactGrid__section">
    <div class="m-gridSection__icon m-gridSection__icon--clock">
      <svg viewBox="0 0 16 16">
        <?php get_svg('icon-clock'); ?>
      </svg>
    </div>
    <div class="m-gridSection__item">
      Current Time: <?php echo current_time('H:i',true); ?> GMT
    </div>
    <div class="m-gridSection__item">
      Monday - Friday: 08:30 - 17:30
    </div>
    <div class="m-gridSection__item">
      Saturday - Sunday: Closed
    </div>
  </div>
</section>
