<?php
$width = (isset($_POST['width'])) ? $_POST['width'] : 0;
$height = (isset($_POST['height'])) ? $_POST['height'] : 0;
$depth = (isset($_POST['depth'])) ? $_POST['depth'] : 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Thomas Netusil">
  <meta name="description" content="">
  <title>Day 2 | Classwork | Exercise 4</title>
</head>

<body>
  <header>
    <h2>Exercise 4</h2>
    <p><strong>Create a function that calculates the area and volume of a box.</strong><br></p>
    <p>Formulas:</p>
    <p><strong>area = width x height <br>
        volume = width x height x depth</strong></p>
    <p>Pass three different numbers as arguments and get calculated results using the return statement. <br>
      You should get the following results:</p>
    <p><strong>The area of the box is: 14 <br>
        The volume of the box is: 70</strong></p>
    <hr>
    <br>
  </header>
  <main>

    <form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">
      width <input type="number" name="width" value=<?= $width  ?>>
      height <input type="number" name="height" value=<?= $height ?>>
      depth <input type="number" name="depth" value=<?= $depth ?>>
      <input type="submit" name="submit">
    </form>
    <br>

    <?php
    function area($width, $height)
    {
      $area = $width * $height;
      return $area;
    };
    function volume($width, $height, $depth)
    {
      $volume = $width * $height * $depth;
      return $volume;
    };
    if (isset($_POST['submit'])) {
      if ($width  <> 0 && $height <> 0 && $depth <> 0) {
        echo "The area of the box is:" . area($width, $height) . "<br>";
        echo "The volume of the box is:" . volume($width, $height, $depth);
      } elseif ($width == 0) {
        echo "please enter the width ";
      } elseif ($height == 0) {
        echo "please enter the height";
      } elseif ($depth == 0) {
        echo "please enter the depth";
      }
    }
    ?>
  </main>
  <footer>
  </footer>
</body>

</html>