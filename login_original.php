<?php include("include/db.php");?>
<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Log in</title>
</head>
<body>

<h2>Log in </h2>
<form name = "loginform" method = "POST" action = "connectivity.php">
  Email: <input type = "text" name = "email"><br>
  Password: <input type = "password" name = "password"><br>
  <input id = "button" type = "submit" name = "submit" value = "Submit">
</form> 


</body>
</html>