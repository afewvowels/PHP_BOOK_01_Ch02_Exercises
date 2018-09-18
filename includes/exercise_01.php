<section>
  <fieldset>
    <legend>#01 - Conditional Statement</legend>
    <div id='exercise_01'>
      <?php
        $IntVariable = 75;

        if ($IntVariable > 100) {
          $Result = ''.$IntVariable.' is greater than 100.';
        } else {
          $Result = ''.$IntVariable.' is less than 100.';
        }

        echo '<p>'.$Result.'</p>';
      ?>
    </div>
  </fieldset>
</section>
