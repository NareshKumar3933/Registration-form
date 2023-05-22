<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "customerdetails";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
// Check connection
if ($conn){
    // echo "conntected to databases successfully";
}
else {
  die("Connection failed: " . mysqli_connect_error());
}   
?>
