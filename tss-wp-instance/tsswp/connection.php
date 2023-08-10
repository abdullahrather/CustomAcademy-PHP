<?php
// $servername = "localhost";
// $username = "thescien_tsswp";
// $password = "8H4H-pp(]9BS3!5]";

$servername = "10.1.1.13";
$username = "root";
$password = "manager";
// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else{
	echo "connection created successfully";
}

// Create database
// $sql = "CREATE DATABASE myDB";
// if (mysqli_query($conn, $sql)) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . mysqli_error($conn);
// }

mysqli_close($conn);
?>