<?php
session_start();//get the session
 if(isset($_GET['id'])){//check if we get id from a get
 	$id=$_GET['id'];//put the id of selected post in a variable
 	if(isset($_SESSION['id'])){//check if session exsist
		
		$userid=$_SESSION['id'];//put the  value of session id into user id
		include 'conn.php';
}else{//if there is no session
	echo "<script language='Javascript'>";
		 		echo "document.location.replace('./login.php')";//go to login page
		 		echo "</script>";
  }
  	$delete=mysqli_query($conn,"DELETE FROM newsvk where id='$id'");//delete post with the get id
  	echo "<script language='Javascript'>";
		 		echo "document.location.replace('./home.php')";//go to user page
		 		echo "</script>";

 }
?>