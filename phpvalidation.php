
<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
// define variables and set to empty values
$name = $prop = $rooms = $address = $location = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $prop = test_input($_POST["prop"]);
  $rooms = test_input($_POST["rooms"]);
  $address = test_input($_POST["address"]);
  $location = test_input($_POST["location"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  property: <input type="text" name="email">
  <br><br>
  location: <input type="text" name="website">
  <br><br>
  address: <input name="comment" rows="5" cols="40">
  <br><br>
  rooms
  <input type="text" name="website">
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>
