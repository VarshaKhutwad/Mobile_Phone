<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Publish Post</title>
</head>
<body>
<?php
include 'menu.php';
?>
<form method="POST" action="" enctype="multipart/form-data">
	<label>Title</label>
	<input type="text" name="title"><br><br>

	<label>Comment</label>
	<textarea name="comment"></textarea><br><br>

	<label>Image</label>
	<input type="file" name="image"><br><br>

	<label>Website</label>
	<input type="url" name="website">

	<label>Contact/Email</label>
	<input type="text" name="email">

	<input type="submit" name="publish" value="publish">

</form>

<?php 
require 'conn.php';


if(isset ($_POST['publish'])){
		$title=addslashes($_POST['title']);
		$comment=addslashes($_POST['comment']);
		$website=addslashes($_POST['website']);
		$email=addslashes($_POST['email']);
	    $dater= date('y-m-d');
		
		$imagepath=$_FILES['image']['tmp_name'];
		 echo "title : ".$title;
		 echo "<br>";
		 echo "comment : ".$comment;
		 echo "<br>";
		 echo "image : ".$imagepath;
		 echo "<br>";
		 echo "website : ".$website;
		 echo "<br>";
		  echo "email : ".$email;
		 echo "<br>";
		 echo "dater : ".$dater;
		 echo "<br>";
		 
		 if($imagepath){

		 	$binary =fread(fopen($imagepath, 'r'),filesize($imagepath));
		 	$image =base64_encode($binary);

		 	
		 	
		 	$insert=mysqli_query($conn,"INSERT INTO newsvk(title, comment, image, website, email,dater) VALUES ('$title','$comment','$image','$website','$email','$dater')");
		 	if($insert){
		 		echo"good";
		 		echo "<script language='Javascript'>";
		 		echo "document.location.replace('./home.php')";
		 		echo "</script>";


		 	}
		 	else{
		 		echo ("error".mysqli_error($conn));
		 	}

		 }
		 else{
		 	echo "choose your image profile";
		 }




	
}




?>
</body>
</html>