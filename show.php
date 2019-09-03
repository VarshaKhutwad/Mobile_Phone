<!DOCTYPE html>
<html>
      <title>form</title>
      <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/all.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/jquery.slim.min.js"></script>

</head>
<body>
<?php
 include 'conn.php';
 $id=$_POST['show'];
 //echo $id;
 $select=mysqli_query($conn,"SELECT * FROM newsvk WHERE id='$id'");
  if ($select) {
  while ($r=mysqli_fetch_assoc($select)) {
    $id=$r['id'];
    $title=$r['title'];
    $comment=$r['comment'];
    $image=$r['image'];
    $website=$r['website'];
    $email=$r['email'];
    $dater=$r['dater'];
    $link="edit.php?id=".$id;
    echo '<a href="'.$link.'">Edit</a>';
    echo"<br>";
    $link="delete.php?id=".$id;
    echo '<a href="'.$link.'">delete</a>';
      
  ?>
    
    <?php echo $id; ?>
      <br>
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
      <?php echo "<img src=data:image/jpg;base64,$image width=20%>";?>
      <br><br>
    
     <?php
  }
   echo "</body>";
}else{
  echo $conn->error;
}


?>
</html>
