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

	h2 {
    font-size: 35px;
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: #EF8419;
    color: white;
}
h4 {
    font-size: 18px;
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: #3CBC8D;
    color: white;
}

p {
    font-size: 15px;
    width: 100%;
    padding: 2px 20px;
    margin: 3px 0;
    box-sizing: border-box;
    border: none;
    background-color: #460C08;
    color: white;
}
input[type=text] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: #8CE9C7;
    color: white;
}
input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: #8CE9C7;
    color: white;
}

.button {
  display: inline-block;
  border-radius: 0px;
  background-color: #2ED1DF;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 20px;
  padding: 15px;
  width: 140px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '»';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}

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
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   <h4>Name:</h4> <input type="text" name="name" value="<?php echo $name;?>" required>
   <span class="error"><?php echo $nameErr;?></span>
   <br><br>
   <h4>Email:</h4> <input type = "text" name = "email" value="<?php echo $email;?>" required>
   <span class="error"><?php echo $emailErr;?></span>
   <br><br>
   <h4>Password:</h4> <input type="password" name="password" value="<?php echo $password;?>" required>
   <span class="error"><?php echo $passwordErr;?></span>
   <br><br>
   <button input id = "button" class="button" type = "submit" name = "submit" style="vertical-align:middle"><span>Register </span></button>
</form>


</body>
</html>