<?php
$servername = "localhost";
$ussername = "root";
$password = "";
$dbname = "db_rb";

// Create connection
$conn = new mysqli($servername, $ussername, $password, $dbname);
// Check connection
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
} 
   //echo "Connected successfully";
?>
