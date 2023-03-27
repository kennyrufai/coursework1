<?php
$servername = "localhost";
$username = "2113332";
$password = "2113332";
$dbname = "db2113332_travelstories";

$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>