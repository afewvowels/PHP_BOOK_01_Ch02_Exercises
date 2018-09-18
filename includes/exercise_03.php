<section>
  <fieldset>
    <legend>#03 - Another While Statement</legend>
    <div id='exercise_03'>
      <?php
        $Count = 0;
        while ($Count <= 100) {
          $Numbers[] = $Count;
          $Count++;
        }
        foreach ($Numbers as $Number) {
          echo '<span>'.$Number.' </span>';
        }
      ?>
    </div>
  </fieldset>
</section>
