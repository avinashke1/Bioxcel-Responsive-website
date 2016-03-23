<?php include("include/db.php");?>
<?php
function SignIn()
{
	session_start();
	if(!empty($_POST['email']))
	{
		$query = mysql_query("SELECT * FROM log where email = '$_POST[email]' AND password = '$_POST[password]'");
		$row = mysql_fetch_array($query);

		if(!empty($row['email']) AND !empty($row['password'])){
			$_SESSION['email'] = $row['email'];
			echo $_SESSION['email'];
			echo "Successfully logged in" . "<br>";
			echo "<a href = 'logout.php'>Log Out</a>" . "<br>";
			echo "<a href = 'index.php'>Go to HOME page</a>";
			header("Location: index.php ");
		}
		else{
			$_SESSION['message'] = "Invalid id";
			echo "Invalid ID";
			header("Location: reg.php");
			
		}
	}
}
if(isset($_POST['submit'])){
	SignIn();
}
?>
