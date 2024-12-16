<?php 
// Database credentials as variables
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'scholarshipdb';

// Establish database connection
$conn = mysqli_connect($host, $user, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    // Set character set to utf8
    mysqli_set_charset($conn, "utf8");
}
?>
