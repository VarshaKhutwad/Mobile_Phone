<!DOCTYPE html>
<html>
<head>
	<title>Registeration</title>
</head>
<body>
	<form method="POST" action="" enctype="multipart/form-data">
		<label>Username</label>
		<input type="text" name="username" id="username" placeholder="Enter Your Username">
		<br>
		<label>Email</label>
		<input type="text" name="email" id="email" placeholder="Enter Your Valid Email-Id">
		<br>
		<label>Password</label>
		<input type="password" name="password" id="password" placeholder="*******">
		<br>
		<label>Confirom Password</label>
		<input type="password" name="password1" id="password1" placeholder="*******">
		<input type="submit" name="submit" value="submit">
		<br>
	</form>


<?php

  include 'conn.php';
 
 if(isset($_POST['submit'])){
 	$username=addslashes($_POST['username']);
 	$email=addslashes($_POST['email']);
 	$password=addslashes($_POST['password']);
 	$password1=addslashes($_POST['password1']);
 	


 	if ($password==$password1) 
 	{
	$pass=md5($password);

	}
	else
 		{
 			echo "$conn->error";
 		}
 		$insert=mysqli_query($conn,"INSERT INTO lgn(username,email,password) VALUES('$username','$email','$pass')");
 	
 	if ($insert) 
 		{
 			echo "<script language='javascript'>";
 			echo "document.location.replace('./login.php')";
 			echo "</script>";
 		}
 		else
 		{
 			echo $conn->error;
 		}
 	}

?>
</body>
</html>

