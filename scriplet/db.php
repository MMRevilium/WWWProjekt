<?php
$conn = new mysqli('localhost','root','','wwwprojekt');
if ($conn->connect_error) {
  exit("Connection failed: " . $conn->connect_error);
  }
?>