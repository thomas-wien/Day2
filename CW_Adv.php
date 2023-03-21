<?php
$fahrenheit = (isset($_POST['fahrenheit'])) ? $_POST['fahrenheit'] : 0;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Thomas Netusil">
  <meta name="description" content="">
  <title>Day 2 | Classwork | Advanced</title>
</head>

<body>
  <header>
    <h2>Advanced Exercise</h2>
    <p>1- Create a function that can convert °F in °C and show the result on the screen</p>
    <hr>
    <br>
  </header>
  <main>
    <form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">
      Fahrenheit <input type="number" name="fahrenheit" value=<?= $fahrenheit  ?>>
      <input type="submit" name="submit" value="calculate">
    </form>
    <br>
    <?php

    $celsius = round(celsius($fahrenheit), 2);
    echo "<strong>$fahrenheit °F = " . $celsius . " °C </strong><br><br>";
    echo "Formel: ($fahrenheit °F − 32) × 5/9 = " . $celsius . " °C <br><hr>";

    if ($celsius < 6) {
      $temp = "$celsius: Very cold";
      echo $temp;
    } elseif ($celsius < 11) {
      $temp = "$celsius: Cold";
      echo $temp;
    } elseif ($celsius < 16) {
      $temp = "$celsius: Pleasant";
      echo $temp;
    } elseif ($celsius < 21) {
      $temp = "$celsius: Warm";
      echo $temp;
    } else {
      $temp = "$celsius: Hot";
      echo $temp;
    }


    function celsius($fahrenheit)
    {
      $celsius = (($fahrenheit - 32) * (5 / 9));
      return $celsius;
    }
    ?>
    <br>
  </main>
  <footer>
  </footer>
</body>

</html>