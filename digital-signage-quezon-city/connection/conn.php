<?php
// Database connection for qcpldb
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "qcpldb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Now $conn can be used in other PHP files (e.g., login.php)
?>
