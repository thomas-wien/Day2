<?php
$minutes = (isset($_POST['minutes'])) ? $_POST['minutes'] : 0;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Thomas Netusil">
  <meta name="description" content="">
  <title>Day 2 | Classwork | Exercise 5</title>
</head>

<body>
  <header>
    <h2>Exercise 5</h2>
    <p>Create a function that will return the number of minutes, in hours and minutes. The function should accept only <strong>one argument</strong>.</p>
    <p><strong>E.g. If we call the function and pass the number of minutes 200 we should get the message "200 minutes = 3 hour(s) and 20 minute(s)."</strong></p>
    <hr>
    <br>
  </header>
  <main>
    <form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">
      Minutes <input type="number" name="minutes" value=<?= $minutes  ?>>
      <input type="submit" name="submit" value="calculate">
    </form>
    <br>
    <?php
    echo "$minutes minutes = " . hours($minutes) . " hour(s) and " . ($minutes % 60) . "minute(s)";
    function hours($minutes)
    {
      $hours = ($minutes - ($minutes % 60)) / 60;
      return $hours;
    }
    ?>
    <br>
  </main>
  <footer>
  </footer>
</body>

</html>