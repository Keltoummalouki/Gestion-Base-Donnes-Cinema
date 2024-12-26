<?php
$servername = "localhost";
$username = "username";
$password = "password";
$db_name = 'cinema';

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>