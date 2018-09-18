<section>
  <fieldset>
    <legend>#06 - </legend>
    <div id='exercise_06'>
      <?php
        // Declare variables
        $TempFarenheit = 0;

        function outputCelsius($TempF) {
          $TempCelsius = ($TempF - 32);
          $TempCelsius *= (5/9);

          return $TempCelsius;
        }

        while ($TempFarenheit <= 100) {
          // $Temp = outputCelsius($TempFarenheit);

          // echo '<span>' .$TempFarenheit. 'F is equal to ' .round($Temp, 1). 'C</span><br>';
          echo '<p>' .$TempFarenheit. 'F is ' .round(outputCelsius($TempFarenheit),1). 'C</p>';

          $TempFarenheit++;
        }
      ?>
    </div>
  </fieldset>
</section>
