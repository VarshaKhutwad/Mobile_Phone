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
?>
