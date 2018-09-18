<section>
  <fieldset>
    <legend>#02 - While Statement</legend>
    <div id='exercise_02'>
      <?php
        function isOdd($ToTest) {
          if ($ToTest % 2 == 1) {
            echo '<span>'.$ToTest.' </span>';
          }
        }

        $Count = 1;

        while ($Count <= 100) {
          isOdd($Count);
          $Count++;
        }
      ?>
    </div>
  </fieldset>
</section>
