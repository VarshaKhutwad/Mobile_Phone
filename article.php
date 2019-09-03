<!DOCTYPE html>
<html>
<head>
	<style>
		body{
			color:white;
		}
		a{
			font-size: 150%;
			color: white;
		}
	</style>
	<title></title>
</head>
<body background="img38.jpg" style="background-repeat: no-repeat; background-size: cover;">
	<h3><a href="index.php">back</a></h3>

<?php
		include 'conn.php';
if(isset($_GET['id'])){

	$getid=$_GET['id'];
	

	$select=mysqli_query($conn,"SELECT * FROM newsvk WHERE id='$id'");

		$number=mysqli_num_rows($select);
		$article=$select->fetch_assoc();
		$title=$article['title'];
		$comment=$article['comment'];
		$image=$article['image'];
		$website=$article['website'];
		$email=$article['email'];
		$dater=$article['dater'];
		//get the username
		
		$user=mysqli_query($conn,"SELECT * FROM newsvk WHERE id='$id'");
		$userinfo=$user->fetch_assoc();
		$username=$userinfo['username'];

		echo "<center><h1>".$title."</h1></center>";
		echo "<br>";
		echo "<center><h1>".$comment."</h1></center>";
		echo "<br>";
		echo "<center>";
		echo "<img src= data:image/jpg;base64,$image width='30%' height='30%'>";
		echo"</center>";
		echo "<br>";
		echo "<center><p>".$website."</p></center>";
		echo "<br><br>";
		echo "<center><h1>".$email."</h1></center>";
		echo "<br>";
		echo "published on : ".$dater." by ".$username;


		


}

?>
<br><br>
<h3><a href="index.php">back</a></h3>
</body>
</html>