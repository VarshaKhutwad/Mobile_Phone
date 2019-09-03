<?php
$servername = "localhost";
$username = "ladiesin_dab2";
$password = "dab2@2019";
$dbname = "ladiesin_batch2";

// Create connection
$conn=new mysqli($servername,$username,$password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


//delete table
$sql1 = "DROP TABLE news";
    if(mysqli_query($conn, $sql1)) {  
      echo "Table is deleted successfully";  
    } 
    else {  
         echo "Table is not deleted successfully\n";
    }  

// sql to create table
$sql = "CREATE TABLE newsvk (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
  title VARCHAR(255),
  comment VARCHAR(255),
  image LONGBLOB,
  website VARCHAR(255),
  email VARCHAR(255),
  dater DATE
)";


if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
  
