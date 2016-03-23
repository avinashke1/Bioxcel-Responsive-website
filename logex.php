<?php include("include/db.php");?>
<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Log in</title>

<style> 
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

.button {
  display: inline-block;
  border-radius: 0px;
  background-color: #2ED1DF;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 20px;
  padding: 15px;
  width: 120px;
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

<h2>Log in </h2>
<form name = "loginform" method = "POST" action = "connectivity.php">
	<h4>Email:</h4> <input type = "text" name = "email"><br>
	<h4>Password:</h4> <input type = "password" name = "password"><br>
	<!--<input id = "button" class="button" type = "submit" name = "submit" value = "Submit"> -->

<button input id = "button" class="button" type = "submit" name = "submit" style="vertical-align:middle"><span>Submit </span></button>
</form>	


</body>
</html>