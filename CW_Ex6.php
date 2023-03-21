<?php
$firstname = (isset($_POST['firstname'])) ? $_POST['firstname'] : "";
$lastname = (isset($_POST['lastname'])) ? $_POST['lastname'] : "";
$age = (isset($_POST['age'])) ? $_POST['age'] : 0;
$color =  (strlen($lastname) > 5) ? "green" : "red";
$hobbies = (isset($_POST['hobbies'])) ? $_POST['hobbies'] : "";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Thomas Netusil">
  <meta name="description" content="">
  <style>
    h1 {
      color: <?= $color ?>;
    }
  </style>
  <title>Day 2 | Classwork | Exercise 6</title>
</head>

<body>
  <header>
    <h2>Exercise 6</h2>
    <p>Create a form with input fields for your firstname, lastname and age. Extract the values from each input field and display them all in a separate div. Use the POST method.</p>
    <p>If the length of your name is larger than 5 characters, change the text colour to green. Otherwise, change the text-colour to red.Now extend with adding a new input field "hobbies". Use the GET method to extract and display the hobbies</p>
    <hr>
    <br>
  </header>
  <main>
    <form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">
      FirstName <input type="text" name="firstname" value=<?= $firstname ?>>
      LastName <input type="text" name="lastname" value=<?= $lastname ?>>
      age <input type="number" name="age" value=<?= $age ?>>
      Hobbies <input type="text" name="hobbies" value=<?= $hobbies ?>>
      <input type="submit" name="submit" value="submit">
    </form>
    <br>
    <?php
    if (isset($_POST['submit'])) {
      if ($firstname != "" && $lastname != "") {
        echo "<div><h1>$firstname $lastname is $age years old!</h1></div>";
      } elseif ($firstname == "") {
        echo "Mr. $lastname please enter your Firstname";
      } elseif ($lastname == "") {
        echo "$firstname please enter your Lastname";
      } else {
        echo "$firstname $lastname please enter your age";
      }
      echo "<h1>$firstname likes $hobbies</h1>";
    }


    ?>
  </main>
  <footer>
  </footer>
</body>

</html>