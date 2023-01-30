<?php
$servername = "localhost";
$username = "cpe4334";
$password = "123456789";
$db_name = "cpe11";

// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>