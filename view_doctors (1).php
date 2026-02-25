<?php
// Database configuration
$host = "localhost";
$user = "root";        // default XAMPP user
$password = "";        // default XAMPP password is empty
$dbname = "smart_health";

// Create connection
$conn = mysqli_connect($host, $user, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
