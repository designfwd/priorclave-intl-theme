<?php
// Collapsible directory of frequently asked questions
$categories = get_query_var('categories');
?>
<section class="o-faq">
  <?php
    foreach( $categories as $category ):
  ?>
    <div id="faq-<?php echo urlencode($category); ?>" class="o-faq__category">
      <?php echo $category; ?>
    </div>
    <?php // Placeholder questions
      $faq = array(
        array(
          'question' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. At enim hic etiam dolore. Quis istud possit, inquit, negare?',
          'answer' => 'Sed erat a equius Triarium aliquid de dissensione nostra iudicare. Ut nemo dubitet, eorum omnia officia quo spectare, quid sequi, quid fugere debeant? Nunc de hominis summo bono quaeritur',
        ),
        array(
          'question' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. At enim hic etiam dolore. Quis istud possit, inquit, negare?',
          'answer' => 'Sed erat a equius Triarium aliquid de dissensione nostra iudicare. Ut nemo dubitet, eorum omnia officia quo spectare, quid sequi, quid fugere debeant? Nunc de hominis summo bono quaeritur',
        ),
        array(
          'question' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. At enim hic etiam dolore. Quis istud possit, inquit, negare?',
          'answer' => 'Sed erat a equius Triarium aliquid de dissensione nostra iudicare. Ut nemo dubitet, eorum omnia officia quo spectare, quid sequi, quid fugere debeant? Nunc de hominis summo bono quaeritur',
        ),
        array(
          'question' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. At enim hic etiam dolore. Quis istud possit, inquit, negare?',
          'answer' => 'Sed erat a equius Triarium aliquid de dissensione nostra iudicare. Ut nemo dubitet, eorum omnia officia quo spectare, quid sequi, quid fugere debeant? Nunc de hominis summo bono quaeritur',
        ),
      );

      for( $i=0; $i<count($faq); $i++ ):
        $question = $faq[$i]['question'];
        $answer = $faq[$i]['answer'];
    ?>

      <div id="toggle-<?php echo $i; ?>" class="m-faqToggle">
        <div class="m-faqToggle__icon" data-question="<?php echo $i; ?>">
          <svg viewBox="0 0 8 16">
            <polygon points="0,0 0,16 8,8" />
          </svg>
        </div>
        <h3 class="m-faqToggle__category"><?php echo $question; ?></h3>
      </div>
      <div id="content-<?php echo $i; ?>" class="m-faqAnswer --preload">
        <div class="m-faqAnswer__content">
          <p>
            <?php echo $answer; ?>
          </p>
        </div>
      </div>
    <?php
      endfor;
    ?>
  <?php
    endforeach;
  ?>
</section>
