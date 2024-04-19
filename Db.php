<?php
$dbHost = 'localhost';
$dbUsername = 'your';
$dbPassword = 'sasd';
$dbName = 'nsmas';
$conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
?>
