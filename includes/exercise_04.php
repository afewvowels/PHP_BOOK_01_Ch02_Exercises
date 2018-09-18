<section>
  <fieldset>
    <legend>#04 - Compound Logic</legend>
    <div id='exercise_04'>
      <?php
        $GasPriceAM = 1.13;
        $GasPricePM = 2.57;

        function isGasPriceBetweenTwoAndThree($GasPrice) {
          if ($GasPrice >= 2.0 && $GasPrice <= 3.0) {
            echo '<p>The gas price $' .$GasPrice. ' is between $2.00 and $3.00</p>';
          } else {
            echo '<p>The gas price $' .$GasPrice. ' is not between $2.00 and $3.00</p>';
          }
        }

        isGasPriceBetweenTwoAndThree($GasPriceAM);
        isGasPriceBetweenTwoAndThree($GasPricePM);
      ?>
    </div>
  </fieldset>
</section>
