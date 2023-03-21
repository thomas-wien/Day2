<?php
$param1 = (isset($_POST['param1'])) ? $_POST['param1'] : 0;
$param2 = (isset($_POST['param2'])) ? $_POST['param2'] : 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Thomas Netusil">
  <meta name="description" content="">
  <title>Day 2 | Classwork | Exercise 2</title>
</head>

<body>
  <header>
    <h2>Exercise 2</h2>
    <p>Create a function which takes two integer parameters - divide them and output the result on the screen.</p>
    <hr>
    <br>
  </header>
  <main>
    <form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">
      dividend <input type="number" name="param1" value=<?= $param1 ?>>
      divisor <input type="number" name="param2" value=<?= $param2 ?>>
      <input type="submit" name="submit" value="devide">
    </form>
    <br>

    <?php
    function devide($param1, $param2)
    {
      echo "$param1 divided by $param2 equals " . round(($param1 / $param2), 2);
    };
    if (isset($_POST['submit'])) {
      if ($param1 <> 0 && $param2 <> 0) {
        devide($param1, $param2);
      } elseif ($param1 == 0) {
        echo "please enter the dividend ";
      } elseif ($param2 == 0) {
        echo "please enter the divisor";
      }
    }
    ?>
  </main>
  <footer>
  </footer>
</body>

</html>