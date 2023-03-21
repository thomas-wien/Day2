<?php
$firstname = (isset($_POST['firstname'])) ? $_POST['firstname'] : "";
$lastname = (isset($_POST['lastname'])) ? $_POST['lastname'] : "";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Thomas Netusil">
  <meta name="description" content="">
  <title>Day 2 | Classwork | Exercise 1</title>
</head>

<body>
  <header>
    <h2>Exercise 1</h2>
    <p>Create a PHP script which will accept two parameters from the form (name and surname). The user must insert name and surname into the form to get the output: "Welcome Name Surname!" otherwise you will output the message: please insert your name, or please insert your surname.</p>
    <hr>
    <br>
  </header>
  <main>
    <form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">
      FirstName <input type="text" name="firstname" value=<?= $firstname ?>>
      LastName <input type="text" name="lastname" value=<?= $lastname ?>>
      <input type="submit" name="submit" value="submit">
    </form>
    <br>
    <?php
    if (isset($_POST['submit'])) {
      if ($firstname != "" && $lastname != "") {
        echo "Welcome $firstname $lastname!";
      } elseif ($firstname == "") {
        echo "Mr. $lastname please enter your Firstname";
      } else {
        echo "$firstname please enter your Lastname";
      }
    }
    ?>
  </main>
  <footer>
  </footer>
</body>

</html>