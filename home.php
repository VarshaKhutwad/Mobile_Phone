<!DOCTYPE html>
<html>
<body>


<?php
require'conn.php';
include 'menu.php';

$select=mysqli_query($conn,"SELECT * FROM newsvk");
if ($select) {
	while ($r=mysqli_fetch_assoc($select)) {
		$id=$r['id'];
		$title=$r['title'];
		$comment=$r['comment'];
		$password=$r['image'];
		$website=$r['website'];
		$email=$r['email'];
		$dater=$r['dater'];
		$image=$r['image'];
		

		?>
		
			<?php echo $id; ?>
			<br><br>
			<?php echo $title; ?>
		    <br><br>
			<?php echo $comment; ?>
			<br><br>
			<?php echo $website; ?>
			<br><br>
			<?php echo $email; ?>
			<br><br>
			<?php echo $dater; ?>
			<br><br>
			
			<?php echo "<img src=data:image/jpg;base64,$image width=20%>";?></td><br><br>
		



		<?php
	}

	
	

}else{
	echo $conn->error;
}


?>

</body>
</html>