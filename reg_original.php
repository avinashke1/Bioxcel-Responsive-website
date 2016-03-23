<?php include("include/db.php");?>
<?php
session_start();
?>
<?php
if (isset($_POST['submit'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql = mysql_query("INSERT INTO log (name,email,password) values ('$name','$email','$password');");
}
?>

<!DOCTYPE html>
<html>
<head>
<style>
	.error {color: red;}
</style>	
</head>
<body>

<?php

$nameErr = $emailErr = $passwordErr= "";
$name = $email = $password= "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
	if(empty($_POST["name"])){
		$nameErr = "Name is required";
	} else {
		$name = test_input($_POST["name"]);
		if (!preg_match("/^[a-zA-Z ]*$/", $name)){
			$nameErr = "Only letters and white spaces allowed";
		}
	}

	if(empty($_POST["email"])){
		$emailErr = "Email is required";
	} else {
		$email = test_input($_POST["email"]);
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$emailErr = "Invalid email format";
		}
	}

	if(empty($_POST["password"])){
		$passwordErr = "password is required";

	}
}

function test_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>

<h2>Register</h2>
<p><span class="error">* mandatory fields.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   Name: <input type="text" name="name" value="<?php echo $name;?>">
   <span class="error">* <?php echo $nameErr;?></span>
   <br><br>
   E-mail: <input type="text" name="email" value="<?php echo $email;?>">
   <span class="error">* <?php echo $emailErr;?></span>
   <br><br>
   Password: <input type="password" name="password" value="<?php echo $password;?>">
   <span class="error">* <?php echo $passwordErr;?></span>
   <br><br>
   <input type="submit" name="submit" value="Submit"> 
</form>
<br><br><br>
Have an account?</br>
<a href="login.php">Proceed To Login</a><p>
<a href="home.php">Proceed To HOME</a></p>


</body>
</html>