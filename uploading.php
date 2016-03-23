<?php
mysql_connect("localhost","root","");
mysql_select_db("users_db");
if(isset($_POST['btn-upload']))
{    
     
	$file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$folder="uploads/";
	
	// new file size in KB
	$new_size = $file_size/1024;  
	// new file size in KB
	
	// make file name in lower case
	$new_file_name = strtolower($file);
	// make file name in lower case
	
	$final_file=str_replace(' ','-',$new_file_name);

	
		$fname = $_POST['First_Name'];
		$lname = $_POST['Last_Name'];
		$date = $_POST['date'];
		$age = $_POST['age'];
		$email = $_POST['Email_Id'];
		$mobile = $_POST['Mobile_Number'];
		$sex = $_POST['sex'];
		$present_address = $_POST['Address'];
		$per_address = $_POST['per_Address'];
		$city = $_POST['City'];
		$pincode = $_POST['Pin_Code'];
		$state = $_POST['State'];
		$country = $_POST['Country'];
		$hobby = $_POST['Hobby'];
		$regno = $_POST['regno'];
		$yoj = $_POST['reg'];
		$deptt = $_POST['branch'];
		$roll = $_POST['roll'];
		$sem = $_POST['semester'];
	
	if(move_uploaded_file($file_loc,$folder.$final_file))
	{
		$sql = "INSERT INTO student_profile (file,type,size,f_name,l_name,dob,age,email_id,mobile,sex,present_add,permanent_add,city,pincode,state,country,hobbies,reg_no,yoj,deptt,roll_no,sem) values ('$file','$file_type','$file_size','$fname','$lname','$date','$age','$email','$mobile','$sex','$present_address','$per_address','$city','$pincode','$state','$country','$hobby','$regno','$yoj','$deptt','$roll','$sem')";
		mysql_query($sql);
		?>
		
		<?php
	}
	else
	{
		?>
		
	}
}
?>