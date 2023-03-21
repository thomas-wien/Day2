<?php
$param1 = (isset($_POST['param1'])) ? $_POST['param1'] : 0;
$param2 = (isset($_POST['param2'])) ? $_POST['param2'] : 0;
$param3 = (isset($_POST['param3'])) ? $_POST['param3'] : 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Thomas Netusil">
  <meta name="description" content="">
  <title>Day 2 | Classwork | Exercise 3</title>
</head>

<body>
  <header>
    <h2>Exercise 3</h2>
    <p>Make a function that will accept 3 parameters, which are the grades from Math, Physics and English. then make the calculation and print them on the screen. Make sure that the variables are numbers.</p>
    <p><strong>E.g. If you put the following grades 3, 4, 5 the result should be: <br>
        Sum:12 <br>
        Average: 4</strong></p>
    <hr>
    <br>
  </header>
  <main>
    Please enter the grades for the following Classes
    <form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">
      Math <input type="number" name="param1" value=<?= $param1 ?>>
      Physics <input type="number" name="param2" value=<?= $param2 ?>>
      English <input type="number" name="param3" value=<?= $param3 ?>>
      <input type="submit" name="submit">
    </form>
    <br>

    <?php
    function calc($param1, $param2, $param3)
    {
      $sum = $param1 + $param2 + $param3;
      $average = round(($sum / 3), 2);
      echo "Math: &nbsp;  &nbsp; $param1 <br>";
      echo "Physics: $param2 <br>";
      echo "English: $param3 <br>";
      echo "_______________ <br><br>";
      echo "Sum: &nbsp;  &nbsp; $sum  <br>";
      echo "Average: $average  <br>";
    };
    if (isset($_POST['submit'])) {
      if ($param1 <> 0 && $param2 <> 0 && $param3 <> 0) {
        calc($param1, $param2, $param3);
      } elseif ($param1 == 0) {
        echo "please enter the grade for Math ";
      } elseif ($param2 == 0) {
        echo "please enter the grade for Physics";
      } elseif ($param3 == 0) {
        echo "please enter the grade for English";
      }
    }
    ?>
  </main>
  <footer>
  </footer>
</body>

</html>